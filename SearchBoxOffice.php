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

	$query  = "SELECT Mname2, DayofWeek, MonthofYear, YearRelease, Budget,
        GrossIncome
        FROM BoxOffice
        WHERE Mname2 = '$_POST[Title]'";

    $result = mysql_query($query);
	if (!mysql_query($query,$con))
	  {
	  die('Error: ' . mysql_error());
      }
	  
	  	if (!$result) { 
    die('Invalid query: ' . mysql_error());
    }
	echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>Title</th>";
	echo "<th>Release Day</th>";
	echo "<th>Release Month</th>";
        echo "<th>Release Year</th>";
        echo "<th>Budget</th>";
        echo "<th>Gross Income</th>";
	echo "</tr>";
	while ($row = mysql_fetch_array($result))  {
		echo "<tr>";
		echo "<th>$row[Mname2]</th>";
		echo "<th>$row[DayofWeek]</th>";
		echo "<th>$row[MonthofYear]</th>";
                echo "<th>$row[YearRelease]</th>";
         	echo "<th>$row[Budget]</th>";
                echo "<th>$row[GrossIncome]</th>";
    }
echo "</table>";

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>