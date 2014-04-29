<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  


mysql_select_db("Flixnet", $con);




	$query  = "SELECT Sum(MName) AS TotalMovies
FROM Movie";
    $result = mysql_query($query);
    $row    = mysql_fetch_assoc($result);
	
	if (!mysql_query($query,$con))
	  {
	  die('Error: ' . mysql_error());
	  }

	  	if (!$result) { 
    die('Invalid query: ' . mysql_error());
    }
	echo "<table>";
	echo "<tr>";
	echo "<td>Total Movies</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($result))  {
		echo "<tr>";
		echo "<td>$row[TotalMovies]</td>";
		echo "</tr>";
	}
		echo "</table>";

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>