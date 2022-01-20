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

$sql = "SELECT * FROM employee";

$result = $connection-> query($sql);

echo "<h1>Employee Informations</h1>";

if($result-> num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "<tr><td> " . $row['emp_id'] .
		"	</td><td>". $row['emp_name'] ." </td><td>" . $row['emp_username']. "</td><td>". $row['emp_password'] . "</td> <td>" . $row['emp_address'] . "</td><td>". $row['phone'] ."</td></tr>";
			echo "<br>";
	}
	
} else{
	echo "No Records Found";
	echo "<br>";  
	}

//close connection
$connection->close();
?>