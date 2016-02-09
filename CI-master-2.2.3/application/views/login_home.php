<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<style type="text/css">
		#errors {
			color: red;
		}
	</style>
</head>
<body>
	<div>
		<h3>Login</h3>
		<form action="logins/login_user" method="post">
			Email Address: <input type="text" name="email">
			Password: <input type="password" name="password">
			<input type="submit" value="Login">
		</form>
	</div>
	<div>
		<h3>Registration</h3>
		<form action="logins/register_user" method="post">
			First Name: <input type="text" name="first_name">
			Last Name: <input type="text" name="last_name">
			Email Address: <input type="text" name="email">
			Password: <input type="password" name="password">
			Confirm Password: <input type="text" name="password_confirm">
			<input type="submit" value="Register">
		</form>
	</div>
	<div id="errors">
		<?= $this->session->flashdata("errors"); ?>
	</div>
</body>
</html>