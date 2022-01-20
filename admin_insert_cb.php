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

$sql = "INSERT INTO cropbed (bed_no,crop_name)VALUES($_POST[bed_no], '$_POST[crop_name]')";

// passing the update query
echo "<br>";

if($connection->query($sql) === TRUE){
	echo "<h3>Crop Name Updated Successfullly.</h3>";

	echo "<br>" . "<a href='admin_page.html'>Return to employee page ? </a>";
}else{
	echo "Error: " . $sql . "<br>" . $connection->error;
	echo "<br>" . "<a href='admin_page.html'>Return to employee page ? </a>";
}


// close connections
$connection->close();
?>