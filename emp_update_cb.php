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




$sql = "UPDATE cropbed SET crop_name = '$_POST[crop_name]' WHERE bed_no = $_POST[bed_no] ";

// passing the update query
echo "<br>";

if($connection->query($sql) === TRUE){
	echo "<h3>Crop Name Updated Successfullly.</h3>";

	echo "<br>" . "<a href='employee_page.php'>Return to employee page ? </a>";
}else{
	echo "Error: " . $sql . "<br>" . $connection->error;
	echo "<br>" . "<a href='employee_page.php'>Return to employee page ? </a>";
}

// ends here 
?>