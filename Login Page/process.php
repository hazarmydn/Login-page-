<?php
$username = $_POST['username'];
$password = $_POST['password'];

$hostName ='localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'database_first';
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if($conn ===false){

	die("ERROR: Could not connect." . mysql_connect_error());
}

$query = "SELECT * FROM login WHERE username = '$username' and password = '$password'";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password){
	echo "Login Successfull Welcome".$row['username'];
}

else{

	echo "Failed to login";
}
?>