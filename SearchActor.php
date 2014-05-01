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

	$query1  = "SELECT AName, NumberMovies
FROM ActorActress
WHERE AName='$_POST[name]'";
    $result1 = mysql_query($query1);
	if (!mysql_query($query1,$con))
	  {
	  die('Error: ' . mysql_error());
      }

        echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>Actor/Actress</th>";
        echo "<th>Number of Movies Starred In:</th>";
	echo "</tr>";
	while ($row = mysql_fetch_array($result1))  {
		echo "<tr>";
		echo "<th>$row[AName]</th>";
                echo "<th>$row[NumberMovies]</th>";
		echo "</tr>";
	}
		echo "</table>";

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>