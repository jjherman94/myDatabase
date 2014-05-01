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

	$query  = "SELECT Mname, Cname, Runtime, Sound, Aspect
        FROM Technical
        WHERE Mname = '$_POST[Title]'";

    $result = mysql_query($query);
	if (!mysql_query($query,$con))
	  {
	  die('Error: ' . mysql_error());
      }
	  
	  	if (!$result) { 
    die('Invalid query: ' . mysql_error());
    }
	echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>Title</th>";
	echo "<th>Production Company</th>";
	echo "<th>Runtime</th>";
        echo "<th>Sound</th>";
        echo "<th>Aspect</th>";
	echo "</tr>";
	while ($row = mysql_fetch_array($result))  {
		echo "<tr>";
		echo "<th>$row[Mname]</th>";
		echo "<th>$row[Cname]</th>";
		echo "<th>$row[Runtime]</th>";
                echo "<th>$row[Sound]</th>";
         	echo "<th>$row[Aspect]</th>";
    }
echo "</table>";

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>