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
        Gross Income
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
	echo "<table>";
	echo "<tr>";
	echo "<td>Title</td>";
	echo "<td>Release Day</td>";
	echo "<td>Release Month</td>";
        echo "<td>Release Year</td>";
        echo "<td>Budget</td>";
        echo "<td>Gross Income</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($result))  {
		echo "<tr>";
		echo "<td>$row[MName2]</td>";
		echo "<td>$row[DayofWeek]</td>";
		echo "<td>$row[MonthofYear]</td>";
                echo "<td>$row[YearRelease]</td>";
         	echo "<td>$row[Budget]</td>";
                echo "<td>$row[GrossIncome]</td>";
    }


mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>