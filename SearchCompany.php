<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  


mysql_select_db("Flixnet", $con);

	$query1  = "SELECT CName, City, Country
FROM Company
WHERE CName='$_POST[name]'";
    $result1 = mysql_query($query1);
	if (!mysql_query($query1,$con))
	  {
	  die('Error: ' . mysql_error());
      }

    echo "<table>";
	echo "<tr>Company</tr>";
	echo "<tr>";
	echo "<td>Name</td>";
        echo "<td>City Origin:</td>";
        echo "<td>Country Origin</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($result1))  {
		echo "<tr>";
		echo "<td>$row[CName]</td>";
                echo "<td>$row[City]</td>";
                echo "<td>$row[Country]</td>";
		echo "</tr>";
	}
		echo "</table>";

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>