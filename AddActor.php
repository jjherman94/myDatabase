<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  


mysql_select_db("Flixnet", $con);



if ($_POST['Name']!=""){
	$sql="INSERT INTO Actor (AName, MoneyEarned)
	VALUES
	('$_POST[Name]','$_POST[MoneyEarned]')";
	
	if (!mysql_query($sql,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	echo $_POST['Name']." is added";
	}
else echo "The provided information is not correct!";

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>