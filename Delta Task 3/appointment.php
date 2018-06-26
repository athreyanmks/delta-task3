<?php

session_start();

include 'dbh.php';

$uid = $_SESSION['id'];

$day = $_COOKIE['day'];

//echo $day;

if($day>9)
{
	$adate = $_SESSION['year'].$_SESSION['month'].(string)$day;
}
else
{
	$adate = $_SESSION['year'].$_SESSION['month']."0".(string)$day;
}

//echo $adate;

if($day>9)
{

}

if(!$conn->query("SHOW TABLES LIKE 'appointinfo'")->num_rows)
{
	//echo "flag";

	$sql = "CREATE TABLE appointinfo (
aid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
uid INT(6) UNSIGNED,
title VARCHAR(30) NOT NULL,
descrip VARCHAR(30) NOT NULL,
adate VARCHAR(30) NOT NULL,
stime VARCHAR(50) NOT NULL,
etime VARCHAR(50) NOT NULL
)";
}

$sql = "SELECT * FROM appointinfo WHERE uid = '$uid' AND adate = '$adate' ORDER BY stime";

$result = $conn->query($sql);

if(!$result->num_rows)
{
	echo "No appointments<br>";
}

while($row = $result->fetch_assoc())
{
	echo "Title: ".$row['title']." Description: ".$row['descrip']." Date: ".$row['adate']." Start time: ".$row['stime']." End time: ".$row['etime']."<br>";
}




?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="calender.js"></script>
</head>
<body>

<button type="button" onclick="goBack();">Back</button>


</body>
</html>