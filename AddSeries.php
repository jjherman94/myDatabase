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



if ($_POST['Movie']!="" AND $_POST['SeriesName']!=""){
	$sql="INSERT INTO Series (MName, SeriesName)
	VALUES
	('$_POST[Movie]','$_POST[SeriesName]')";
	
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