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

    echo "<table>";
	echo "<tr>Actor/Actress</tr>";
	echo "<tr>";
	echo "<td>Name</td>";
        echo "<td>Number of Movies Starred In:</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($result1))  {
		echo "<tr>";
		echo "<td>$row[AName]</td>";
                echo "<td>$row[NumberMovies]</td>";
		echo "</tr>";
	}
		echo "</table>";

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>