<?php
  // sending reset link to user to change password

  // handles the post request
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include __DIR__ . '/../db_scripts/config/db_connection.php'; //databse connection file
    $email = $_POST['email'];

    //check if email exists in the database
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
      // generate a unique token if email exists
      $token = bin2hex(random_bytes(50));

      // Insert token into the database (linked with users email)
      $stmt = $conn->prepare("UPDATE users SET reset_token = ?, token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email= ?");
      $stmt->bind_param("ss", $token, $email);
      $stmt->execute();

      // create a password reset link
      $reset_link = "reset_password.php?token=$token";

      // send the reset link to the user's email
      $subject = "Password Reset Request";
      $message = "Click this link to reset your password: $reset_link";
      $headers = "From: brianjohnkiama@gmail.com";
      mail($email, $subject, $message, $headers);

      echo "password reset link has been sent to your email.";

    } else {
      echo "Email does not exist.";
    }

  }
?>