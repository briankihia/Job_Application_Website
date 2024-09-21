<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="reset_password.css">
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="row">
  <div class="col-md-6 mx-auto p-0">
    <div class="card">
      <div class="login-box">
        <div class="login-space">
          <!-- Sign-up form -->
          <div class="sign-up-form">
            <form action="../src/process_signup.php" method="post">
              <!-- <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" name="username" type="text" class="input" placeholder="Create your Username">
              </div> -->
              <div class="group">
                <label for="pass" class="label">New Password</label>
                <input id="pass" name="password" type="password" class="input" data-type="password" placeholder="Create your password">
              </div>
              <div class="group">
                <label for="pass" class="label">Repeat Password</label>
                <input id="pass" name="password_repeat" type="password" class="input" data-type="password" placeholder="Repeat your password">
              </div>
              <!-- <div class="group">
                <label for="email" class="label">Email Address</label>
                <input id="email" name="email" type="text" class="input" placeholder="Enter your email address">
              </div> -->
              <div class="group">
                <input type="submit" class="button" value="Reset">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (requires Popper.js) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
