<?php
$servername = "localhost";
$root_username = "root";
$root_password = "";
$db_name = "cropmanagement";


// creating a connection
$connection = new mysqli($servername, $root_username, $root_password, $db_name);

// check if connection is good
if($connection){
	echo "Connected to the database.";
} else{
	die("Connection failed " . "<br>" . $connection->connect_error);
}

$username = $_POST['emp_username'];
$password = $_POST['emp_password'];

$username = stripcslashes($username);
$password = stripcslashes($password); // to avoid sql injection

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);


// check username, password input by employee

$sql = "SELECT * FROM EMPLOYEE WHERE emp_username = '$username' AND emp_password = '$password'";

$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){
	echo "<h2>Login Successful</h2>";
	echo "<h1><a href='employee_page.html'>Employee Feed</h1>";
	echo "<p><a href='index.html'>Go to index </a></p>";
}else{
	echo "<h2>Login Failed. Invalid Credentials</h2>";
}

// closing connection
$connection->close();
// --- ends here --- 
?> 