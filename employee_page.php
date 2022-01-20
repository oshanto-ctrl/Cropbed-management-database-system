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



// crob bed info function
$sql = "SELECT * from cropbed";
$result = $connection-> query($sql);

echo "<h1>CROP BED INFORMATIONS</h1>";

if($result-> num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "<tr><td> " . $row['cb_id'] .
		"	</td><td>". $row['bed_no'] ." </td><td>" . $row['crop_name']. "	</td><td>". $row['ph_level']."	</td><td>". $row['n_level']. "	</td><td>" . $row['p_level'] . "	</td><td>" . $row['k_level'] . "	</td><td>".
			$row['cb_temp']."	</td><td>"
			. $row['t_id'] . "	</td></tr>";
			echo "<br>";
	}
	
} else{
	echo "No Records Found";
	echo "<br>";  
	}

 

//	crop_bed_info();

echo "<br/><br/>";


// Green house info function


$sql = "SELECT * FROM greenhouse";
$result = $connection-> query($sql);

echo "<h1>Green House Informations </h1>";

if($result-> num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "<tr><td> " . $row['gh_no'] . "</td><td>" . $row['gh_name'] . "</td><td>" . $row['cb_count'] . "</td><td>" . $row['fan_status'] . "</td><td>" . $row['light_status'] . "</td><td>" . $row['water_pump'] . "</td></tr>";
		echo "<br>";
	}
}else{
	echo "No Records Found" . "<br>";
}




// closing the connection
$connection-> close();

?>