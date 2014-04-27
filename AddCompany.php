<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  


mysql_select_db("Flixnet", $con);



if ($_POST['Company']!=""){
	$sql="INSERT INTO Company (CName, City, Country)
	VALUES
	('$_POST[Company]','$_POST[City]','$_POST[Country]')";
	
	if (!mysql_query($sql,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	echo $_POST['Company']." is added";
	}
else echo "The provided information is not correct!";

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>