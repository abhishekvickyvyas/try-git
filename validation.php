<html>

<head>
<style >
  .error{color: #FF0000;}


</style>
</head>
<body>
<?php
$nameErr = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($_POST["name"]))
{$nameErr="write name";
}else 
{$name=check($_POST["name"]);
}

}


function check($data)
{$data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;

}

?>


<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
NAME:<input type="text" name="name"><span class="error">*<?php echo $nameErr; ?></span>
</br>
</br>

<input type="submit" name="submit" value="submit">
</form>
<?php
echo $name;
echo "<br>";

?>

</body>
</html>