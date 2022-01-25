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

echo "<br><br>";

// Updating Query

$sql = "UPDATE greenhouse SET fan_status = $_POST[fan_status], light_status = $_POST[light_status], water_pump = $_POST[water_pump] WHERE gh_no = $_POST[gh_no]"; 

echo "<br>";

if($connection->query($sql) === TRUE){
	echo "<h3>Crop Deleted Successfullly.</h3>";

	echo "<br>" . "<a href='admin_page.html'>Return to Admin page ? </a>";
}else{
	echo "Error: " . $sql . "<br>" . $connection->error;
	echo "<br>" . "<a href='admin_page.html'>Return to Admin page ? </a>";
}

$connection->close();
?>