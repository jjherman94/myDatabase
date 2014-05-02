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



if($_POST['Title'] != "" AND $_POST['NewIncome'] != ""){
	$query  = "UPDATE BoxOffice
SET GrossIncome = '$_POST[NewIncome]'
WHERE Mname2 = '$_POST[Title]'";
	
	if (!mysql_query($query,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
          
	echo $_POST['Title']." is updated";
	}
else echo "The provided information is not correct!";

mysql_close($con)

?>
<html>

<br />
<a href="Home.html">Back</a>

</html>