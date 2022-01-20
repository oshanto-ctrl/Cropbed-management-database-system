<?php

$servername = "localhost";
$root_username = "root";
$root_password = "";
$db_name = "cropmanagement";

// creating a connection
// creating a connection
$connection = new mysqli($servername, $root_username, $root_password, $db_name);

// check if connection is good
if($connection){
	echo "Connected to the database.";
} else{
	die("Connection failed " . "<br>" . $connection->connect_error);
}


$username = $_POST['admin_username'];
$password = $_POST['admin_password'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

// check username, password input by admin
$sql = "SELECT * FROM ADMIN WHERE admin_username = '$username' AND admin_password = '$password'";

$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){
	echo "<h2>Login Successful</h2>";
	echo "<br>"."<h3><a href='admin_page.html'>Admin Feed</a></h3>" . "<br>";
	echo "<p><a href='index.html'> Go to index </a></p>";
}else{
	echo "<h2>Login Failed. Invalid Credentials</h2>";
	echo "<p><a href='index.html'> Go to index </a></p>";
}

// closing connection
$connection->close();

// --- ends here ---
?>