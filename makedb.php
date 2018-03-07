<?php
$servername="localhost";
$user="root";
$pass="123456";

$conn=mysqli_connect($servername,$user,$pass);

if(!$conn)
{
	echo "not connected".mysqli_connect_error();
}
else
	echo "connectetion created</br>";
$sql="CREATE DATABASE myDB";

if(mysqli_query($conn,$sql))
{
echo "Database is created";

}

else
	echo "not created";



mysqli_close($conn);

?>