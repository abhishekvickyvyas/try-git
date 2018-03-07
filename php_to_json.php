<?php
$you->name="abhishek";
$you->lname="vyas";
$you->age=23;
$myarray=array("hello","rahul");
$myjson=json_encode($you);
$myjson1=json_encode($myarray);
echo $myjson1."</br>";
echo $myjson;
?>