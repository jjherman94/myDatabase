<!-- Group 10
     Joshua Herman
     Douglas Steiert-->
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  


mysql_select_db("Flixnet", $con);



if ($_POST['Movie']!="" and $_POST['Company']!=""){
	$sql="INSERT INTO Technical (Cname, Mname, Runtime, Sound, Aspect)
	VALUES
	('$_POST[Company]','$_POST[Movie]','$_POST[Runtime]','$_POST[Sound]','$_POST[Aspect]')";
	
	if (!mysql_query($sql,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	echo $_POST['Movie']." is added";
	}
else echo "The provided information is not correct!";

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>