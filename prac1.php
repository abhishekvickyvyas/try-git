<?php
$x = 5;
$y = 10;
$z = 0;

function myTest() {
    global $y;
  global  $x;
    $y = $x + $y;
   global  $z=20;
    echo $y."</br>";
    //$GLOBALS['y'] = $GLOBALS['y'] *2;;
}

myTest();
echo $y; // outputs 15
echo $z;
?>