<?php
$cookie_name="abhi";
$cookie_value="55 vyas";
setcookie($cookie_name,$cookie_value,time()+(60));

$server="localhost";
$user="root";
$pass="123456";
$db="myDB";

$conn=mysqli_connect($server,$user,$pass,$db);
if(!$conn)
{
die("connection not created".mysqli_connect_error($conn));

}
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


?>
