<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="login.css">
   <!-- Bootstrap CSS -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div class ="row">
	<div class="col-md-6 mx-auto p-0">
		<div class="card">
<div class="login-box">
	<div class="login-snip">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-space">
			<!-- login form -->
			<div class="login">
			<form action="../src/process_login.php" method="post">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="username" placeholder="Enter your username">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" name="password" data-type="password" placeholder="Enter your password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot">
					<a href="#">Forgot Password?</a>
				</div>
			</form>
			</div>
			<!-- signup form -->
			<div class="sign-up-form">
			<form action="../src/process_signup.php" method="post">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="username" type="text" class="input" placeholder="Create your Username">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password" placeholder="Create your password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" name="password_repeat" type="password" class="input" data-type="password" placeholder="Repeat your password" >
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" name="email" type="text" class="input" placeholder="Enter your email address">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot">
					<label for="tab-1">Already Member?</label>
				</div>
			</form>
			</div>
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