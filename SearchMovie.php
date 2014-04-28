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

	$query  = "SELECT MName, Rating, Synopsis, Weekday, MonthYear, YearMade,
        CountryFilm, CityFilm, Genre
        FROM Movie M
        WHERE (Movie.MName = '$_POST[Title]'" and
        (Select Genre
          FROM Genre G
          WHERE M.MName = G.MName);
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
	echo "<td>Rating</td>";
	echo "<td>Synopsis</td>";
	echo "<td>Release Day</td>";
        echo "<td>Release Month</td>";
        echo "<td>Release Year</td>";
        echo "<td>Country Filmed In</td>";
        echo "<td>City Filmed In</td>";
        echo "<td>Genre</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($result))  {
		echo "<tr>";
		echo "<td>$row[MName]</td>";
		echo "<td>$row[Rating]</td>";
		echo "<td>$row[Synopsis]</td>";
		echo "<td>$row[Weekday]</td>";
                echo "<td>$row[MonthYear]</td>";
         	echo "<td>$row[YearMade]</td>";
                echo "<td>$row[CountryFilm]</td>";
                echo "<td>$row[CityFilm]</td>";
                echo "<td>$row[Genre]</td>";
		echo "</tr>";
	}
		echo "</table>";
	 

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>