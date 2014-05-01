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
	echo "<table>";
	echo "<tr>";
	echo "<td>Title</td>";
	echo "<td>Production Company</td>";
	echo "<td>Runtime</td>";
        echo "<td>Sound</td>";
        echo "<td>Aspect</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($result))  {
		echo "<tr>";
		echo "<td>$row[Mname]</td>";
		echo "<td>$row[Cname]</td>";
		echo "<td>$row[Runtime]</td>";
                echo "<td>$row[Sound]</td>";
         	echo "<td>$row[Aspect]</td>";
    }


mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>