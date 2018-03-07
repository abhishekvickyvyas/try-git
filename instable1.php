<?php
$server="localhost";
$user="root";
$pass="123456";
$database="myDB";

$conn=mysqli_connect($server,$user,$pass,$database);
if(!$conn)
{
	die("connection NOt CREATED".mysqli_connect_error());
}
$sql = "INSERT INTO `MyGuests`(`firstname`, `lastname`, `email`) VALUES ('abhishek2','vyas','abhishek.vikcy001@gmail.com');";
$sql .= "INSERT INTO `MyGuests`(`firstname`, `lastname`, `email`) VALUES ('abhishek3','vyas','abhishek.vikcy001@gmail.com');";
$sql .= "INSERT INTO `MyGuests`(`firstname`, `lastname`, `email`) VALUES ('abhishek4','vyas','abhishek.vikcy001@gmail.com')";

if(mysqli_multi_query($conn,$sql))
{
	
	echo "data is inserted ";

}


 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>