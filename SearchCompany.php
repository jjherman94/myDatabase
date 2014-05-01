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

	$query1  = "SELECT CName, City, Country
FROM Company
WHERE CName='$_POST[name]'";
    $result1 = mysql_query($query1);
	if (!mysql_query($query1,$con))
	  {
	  die('Error: ' . mysql_error());
      }

    echo "<table border = '1'>";
	echo "<th>Company</th>";
        echo "<th>City Origin:</th>";
        echo "<th>Country Origin</th>";
	echo "</tr>";
	while ($row = mysql_fetch_array($result1))  {
		echo "<tr>";
		echo "<th>$row[CName]</th>";
                echo "<th>$row[City]</th>";
                echo "<th>$row[Country]</th>";
		echo "</tr>";
	}
		echo "</table>";

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>