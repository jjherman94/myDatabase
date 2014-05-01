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

	$query  = "SELECT M.MName, Rating, Weekday, MonthYear, YearMade,
        CountryFilm, CityFilm
        FROM Movie M
        WHERE M.MName = '$_POST[Title]'";
        $query2 = "SELECT Genres
        FROM Genre
        WHERE MName = '$_POST[Title]'";
    $result = mysql_query($query);
	if (!mysql_query($query,$con))
	  {
	  die('Error: ' . mysql_error());
      }
    $result2 = mysql_query($query2);
        if (!mysql_query($query2,$con))
	  {
	  die('Error: ' . mysql_error());
      }
	  
	  	if (!$result) { 
    die('Invalid query: ' . mysql_error());
    }
	echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>Title</th>";
	echo "<th>Rating</th>";
	echo "<th>Release Day</th>";
        echo "<th>Release Month</th>";
        echo "<th>Release Year</th>";
        echo "<th>Country Filmed In</th>";
        echo "<th>City Filmed In</th>";
        echo "<th>Genre</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($result))  {
		echo "<tr>";
		echo "<th>$row[MName]</th>";
		echo "<th>$row[Rating]</th>";
		echo "<th>$row[Weekday]</th>";
                echo "<th>$row[MonthYear]</th>";
         	echo "<th>$row[YearMade]</th>";
                echo "<th>$row[CountryFilm]</th>";
                echo "<th>$row[CityFilm]</th>";
                                if (!$result2) {
    die('Invalid query: ' . mysql_error());
    }
        while ($row = mysql_fetch_array($result2)) {
                echo "<th>$row[Genres]</th>";
      } 
		echo "</tr>";
      }
echo "</table>";

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>