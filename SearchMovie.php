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

	$query  = "SELECT M.MName, Rating, Synopsis, Weekday, MonthYear, YearMade,
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
                echo "<td>$row[Genres]</td>";
		echo "</tr>";
      }
                if (!$result2) {
    die('Invalid query: ' . mysql_error());
    }
        echo "<table>";
        echo "<tr>";
        echo "<td> Genre</td>";
        while ($row = mysql_fetch_array($result2)) {
                echo "<tr>";
                echo "<td>$row[Genres]</td>";
		echo "</table>";
      } 

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>