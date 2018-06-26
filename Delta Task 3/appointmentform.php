<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="appointcreate.php" method="POST">
	
	<input type="text" name="title" placeholder="Title"><br>
	<input type="text" name="descrip" placeholder="Description"><br>
	<input type="text" name="adate" placeholder="Date in YYYYMMDD"><br>
	<input type="text" name="stime" placeholder="Start time in hhmm"><br>
	<input type="text" name="etime" placeholder="End time in hhmm"><br>
	<button type="submit">Add</button>
</form>




</body>
</html>