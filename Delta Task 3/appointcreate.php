<?php
session_start();

include 'dbh.php';

$title = $_POST['title'];
$descrip = $_POST['descrip'];
$adate = $_POST['adate'];
$stime = $_POST['stime'];
$etime = $_POST['etime'];

$uid = $_SESSION['id'];

echo $title;
echo $descrip;
echo $adate;
echo $stime;
echo $etime;





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


if ($conn->query($sql) === TRUE) {
    echo "Table userinfo created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

}

$sql = "INSERT INTO appointinfo(uid,title,descrip,adate,stime,etime)
VALUES ('$uid','$title','$descrip','$adate','$stime','$etime')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: calender.php")


?>