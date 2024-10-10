<?php
  session_start();
  include __DIR__ . '/../db_scripts/config/db_connection.php';


  // get the submitted data
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];  //username
    $password = $_POST['password'];  //password

    //Validate that the fields are not empty

    if(!empty($username)&& !empty($password)) {
      
      // Prepare a SQL statement to select the user
      $stmt = $conn->prepare("SELECT id, username, password, role FROM users WHERE username = ?");
      $stmt->bind_param("s", $username);
      $stmt->execute();
      $stmt->store_result();

      // Check if the user exists
      if ($stmt->num_rows > 0) {
        // Bind the result variables
        $stmt->bind_result($id, $db_username, $db_password,$role);
        $stmt->fetch();

           // Verify the password
            if (password_verify($password, $db_password)) {
                // Start a session and store user data
                session_start();
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $db_username;
                $_SESSION['role'] = $role;

                echo "Login successful! Welcome, " . $db_username;

                // Redirect based on user role
                if ($role == 'admin') {
                  // Redirect to admin dashboard
                  header("Location: ../dashboard/index.php");
              } else {
                  // Redirect to normal user page
                  header("Location: ../index.php");
              }

                // Redirect to a protected page
                // header("Location: ../index.php");
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that username.";
        }


        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Please fill in all fields.";

    }

  }
    

?>