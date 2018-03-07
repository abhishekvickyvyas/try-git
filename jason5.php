
<?php
$myArr = array("John", "Mary", "Peter", "Sally");

$myJSON = json_encode($myArr);
$myJSON = json_decode($myJSON);

echo ($myJSON[0]);
?>


