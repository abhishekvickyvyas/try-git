<?php
$cars = array(12, 55,60,78,13);
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

?>