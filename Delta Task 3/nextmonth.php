<?php

session_start();

if((integer)$_SESSION['month']==12)
{
	$_SESSION['month']="01";

	$temp = (integer)$_SESSION['year']+1;

	$_SESSION['year'] = (string)$yemp;
}
else
{
	$temp = (integer)$_SESSION['month'] +1;

	if($temp>9)
	{
		$_SESSION['month'] = (string)$temp;
	}
	else
	{
		$_SESSION['month'] = "0".(string)$temp;
	}
}

//echo $_SESSION['year'].$_SESSION['month'];

header("Location: calender.php");

?>