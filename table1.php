<?php
$server="localhost";
$user="root";
$pass="123456";
$dbname="myDB";

$conn=mysqli_connect($server,$user,$pass,$dbname);
if(!$conn)
{
	die("connection not created".mysqli_connect_error());
}

$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";


if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


?>