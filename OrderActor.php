<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  


mysql_select_db("Flixnet", $con);




	$query  = "SELECT *
FROM ActorActress
ORDER BY NumberMovies DSC";
    $result = mysql_query($query);
    $row    = mysql_fetch_assoc($result);
	
	if (!mysql_query($query,$con))
	  {
	  die('Error: ' . mysql_error());
	  }

	  	if (!$result) { 
    die('Invalid query: ' . mysql_error());
    }
    	while ($row = mysql_fetch_array($result))  {
	echo "<table>";
	echo "<tr>";
	echo "<td>Actor/Actress</td>";
        echo "<td>Number of Movies Starred in</td>";
	echo "</tr>";
		echo "<tr>";
		echo "<td>$row[AName]</td>";
                echo "<td>$row[NumberMovies]</td>";
		echo "</tr>";
		echo "</table>";
    }

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>