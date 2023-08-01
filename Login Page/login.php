<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id="frm">
  	<h1>Login</h1>
  	<form action="process.php" method="POST">
  		<label for="email">Username:</label>
  		<input type="text" name="username" id="user"><br><br>
  		<label for="password">Password:</label>
  		<input type="password" name="password" id="pass"><br><br>

        <input type="submit" id="btn" value="Login">

  	</form>
  	

  </div>
</body>
</html>