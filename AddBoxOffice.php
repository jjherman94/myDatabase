<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  


mysql_select_db("Flixnet", $con);



if ($_POST['Title']!=""){
	$sql="INSERT INTO BoxOffice (Mname2, DayofWeek, MonthofYear, YearRelease,
        Budget, GrossIncome)
	VALUES
	('$_POST[Title]','$_POST[Day]','$_POST[Month]','&_POST[Year]',
        '&_POST[Budget]','&_POST[GrossIncome]')";
	
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