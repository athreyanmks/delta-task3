<?php

session_start();
?>


<!DOCTYPE html>
<html>

<body>


<?php

//echo "ham";echo "ham";
//$uname = ;$pword =;

include 'dbh.php';

function valInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uname = valInput($_POST['uname']);
  $pword = valInput($_POST['pword']);
}

$sql = "SELECT id FROM userinfo WHERE uname ='$uname' AND pword = '$pword'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

if($row['id'])
{
	$_SESSION['id'] = $row['id'];

	$_SESSION['month'] = date('m');
	$_SESSION['year'] = date('Y');

	echo $_SESSION['month'];

	header("Location: calender.php");

	echo $row['id'];

}

else
{
	echo "Login failed";
}





//echo $uname."<br>";
//echo $pword;
//echo "ham";
?>


</body>
</html>
