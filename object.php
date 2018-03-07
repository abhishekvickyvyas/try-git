<?php
$name;
    $branch;
    $age;
class Car {
    function vyas() {
    	global $name;
    	global $branch;
    	global $age;

       $this->name="abhishek";
    $this->branch="cs";
    $this->age=34;
    }
   function hello()
   {

   	echo "ram";
   }
  
}

// create an object




$abhi = new car();
$abhi->vyas();
echo $abhi->age."</br>";
echo $abhi->branch."</br>";
echo $abhi->name."</br>";
?>