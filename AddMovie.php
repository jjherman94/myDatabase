<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  

 
mysql_select_db("Flixnet", $con);



if ($_POST['Title']!=""){
	$sql="INSERT INTO Movie (MName, Rating, CityFilm, CountryFilm,
	Weekday, MonthYear, YearMade, Synopsis)
	VALUES
	('$_POST[Title]','$_POST[Rating]','$_POST[CityFilmed]',
	'&_POST[CountryFilmed]','&_POST[ReleaseDay]','&_POST[ReleaseMonth]',
	'&_POST[ReleaseYear]','&_POST[Synopsis]')";
	
	if (!mysql_query($sql,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	echo $_POST['Title']." is added";
	}
else echo "The provided information is not correct!";

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>