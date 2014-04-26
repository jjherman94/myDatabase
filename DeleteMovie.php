<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  


mysql_select_db("Flixnet", $con);



if ($_POST['Title']!=""){
	$sql="DELETE FROM Movie
	Where
	(MName = '$_POST[Title]')";
	
	if (!mysql_query($sql,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	echo $_POST['Title']." has been deleted.";
	}
else echo "The provided information is not correct!";

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>