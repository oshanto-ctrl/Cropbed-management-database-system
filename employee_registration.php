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
echo "<br><br>";

$sql = "INSERT INTO employee(emp_name,emp_username,emp_password,emp_address,phone)VALUES('$_POST[emp_name]', '$_POST[emp_username]', '$_POST[emp_password]','$_POST[emp_address]','$_POST[phone]')";
echo "<br>";

if($connection->query($sql) === TRUE){
	echo "<h3>Registered Successfullly.</h3>";
	echo "<p>Thanks for filling out the form.</p>";
	echo "<br>" . "<a href='index.html'>Return to Homepage</a>";
}else{
	echo "Error: " . $sql . "<br>" . $connection->error;
	echo "<br>" . "<a href='index.html'>Return to Homepage</a>";
}

$connection->close();
?>