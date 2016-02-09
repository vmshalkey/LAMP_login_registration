<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>

	<style type="text/css">

	</style>
</head>
<body>
	<h2>Welcome <?= $user['first_name'] ?></h2>
	<div>
		<h3>User Information</h3>
		<p>First Name: <?= $user['first_name'] ?></p>
		<p>Last Name: <?= $user['last_name'] ?></p>
		<p>Email Address: <?= $user['email'] ?></p>
	</div>
	<a href="logins/logoff_user"><button>Log Off</button></a>
</body>
</html>