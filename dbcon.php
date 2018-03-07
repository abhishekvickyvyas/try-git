<?php
$servername="localhost";
$username="root";
$password="123456";

$conn=mysqli_connect($servername,$username,$password);
if($conn)
{
echo "connected";

}
else
echo "not connected".mysqli_connect_error();
?>