<?php
  include __DIR__ . '/../db_scripts/config/db_connection.php';


  // capture form data
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $pass_repeat = $_POST['password_repeat'];
  $email= $_POST['email'];

  // check if all fields are filled
  if(empty($user) || empty($pass) || empty($pass_repeat) || empty($email)) {
    die("All fields are required");
  }

  // validate password match
  if($pass !== $pass_repeat) {
    die("passwords do not match");
  }

  // Hash the password
  $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

  // SQL query to insert user data into the database
  // so here below should look the same as how the data is in the database
  $sql = "INSERT INTO users (username, password, email) VALUES ('$user', '$hashed_pass', '$email')";

  // Execute query and check if succesful
  if($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header("LOcation:../public/login.php");
    exit();  //Make sure to call exit to stop the script after redirection
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  //close the connection
  $conn->close();
?>