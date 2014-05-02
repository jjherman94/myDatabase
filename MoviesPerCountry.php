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




	$query  = "Country, Count(MName) AS TotalMovies
FROM Movie
GROUP BY Country
ORDER BY Count(MName) DESC";
    $result = mysql_query($query);
    $row    = mysql_fetch_assoc($result);
	
	if (!mysql_query($query,$con))
	  {
	  die('Error: ' . mysql_error());
	  }

	  	if (!$result) { 
    die('Invalid query: ' . mysql_error());
    }
        echo "<table border ='1'>";
	echo "<tr>";
	echo "<th>Country</th>";
        echo "<th>Number of Movies Produced</th>";
	echo "</tr>";
        
	echo "<tr>";
  	echo "<th>$row[Country]</th>";
        echo "<th>$row[NumberMovies]</th>";
	echo "</tr>";
              while ($row = mysql_fetch_array($result))  {
		echo "<tr>";
		echo "<th>$row[AName]</th>";
                echo "<th>$row[TotalMovies]</th>";
		echo "</tr>";

    }
 echo "</table>";
mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>