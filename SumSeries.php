<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  


mysql_select_db("Flixnet", $con);




	$query  = "SELECT COUNT(*) AS TotalMovies
FROM Series
WHERE SeriesName = '$_POST[seriesName]'
GROUP BY SeriesName";
    $result = mysql_query($query);
    $row    = mysql_fetch_assoc($result);
	
	if (!mysql_query($query,$con))
	  {
	  die('Error: ' . mysql_error());
	  }

	  	if (!$result) { 
    die('Invalid query: ' . mysql_error());
    }
	echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>Total Movies in this Series</th>";
	echo "</tr>";
		echo "<tr>";
		echo "<th>$row[TotalMovies]</th>";
		echo "</tr>";
		echo "</table>";

mysql_close($con)

?>
<html>
  
<br/>
<a href="Home.html">Back</a>

</html>