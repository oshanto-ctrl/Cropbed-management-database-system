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

$sql = "DELETE FROM greenhouse WHERE gh_no = $_POST[gh_no]";

echo "<br>";

if($connection->query($sql) === TRUE){
	echo "<h3> Selected Green House Deleted Successfullly.</h3>";

	echo "<br>" . "<a href='admin_page.html'>Return to Admin page ? </a>";
}else{
	echo "Error: " . $sql . "<br>" . $connection->error;
	echo "<br>" . "<a href='admin_page.html'>Return to Admin page ? </a>";
}
//close connection
$connection->close();




?>