<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="calender.css">
	<script type="text/javascript" src="calender.js"></script>
</head>
<body>

<div>

</p>


<ul style="position: absolute; left: 10px; top: 75px;" >
	<li style="display: inline-block;">MON</li>
	<li style="display: inline-block;">TUE</li>
	<li style="display: inline-block;">WED</li>
	<li style="display: inline-block;">THU</li>
	<li style="display: inline-block;">FRI</li>
	<li style="display: inline-block;">SAT</li>
	<li style="display: inline-block;">SUN</li>

</ul>

<div style=" position : absolute; left: 50px;top : 125px;">
<button class="button" id="but1" onclick="createCookie(this)">X</button>
<button class="button" id="but2" onclick="createCookie(this)">X</button>
<button class="button" id="but3" onclick="createCookie(this)">X</button>
<button class="button" id="but4" onclick="createCookie(this)">X</button>
<button class="button" id="but5" onclick="createCookie(this)">X</button>
<button class="button" id="but6" onclick="createCookie(this)">X</button>
<button class="button" id="but7" onclick="createCookie(this)">X</button>
<br><br>

<button class="button" id="but8" onclick="createCookie(this)">X</button>
<button class="button" id="but9" onclick="createCookie(this)">X</button>
<button class="button" id="but10" onclick="createCookie(this)">X</button>
<button class="button" id="but11" onclick="createCookie(this)">X</button>
<button class="button" id="but12" onclick="createCookie(this)">X</button>
<button class="button" id="but13" onclick="createCookie(this)">X</button>
<button class="button" id="but14" onclick="createCookie(this)">X</button>
<br><br>

<button class="button" id="but15" onclick="createCookie(this)">X</button>
<button class="button" id="but16" onclick="createCookie(this)">X</button>
<button class="button" id="but17" onclick="createCookie(this)">X</button>
<button class="button" id="but18" onclick="createCookie(this)">X</button>
<button class="button" id="but19" onclick="createCookie(this)">X</button>
<button class="button" id="but20" onclick="createCookie(this)">X</button>
<button class="button" id="but21" onclick="createCookie(this)">X</button>
<br><br>

<button class="button" id="but22" onclick="createCookie(this)">X</button>
<button class="button" id="but23" onclick="createCookie(this)">X</button>
<button class="button" id="but24" onclick="createCookie(this)">X</button>
<button class="button" id="but25" onclick="createCookie(this)">X</button>
<button class="button" id="but26" onclick="createCookie(this)">X</button>
<button class="button" id="but27" onclick="createCookie(this)">X</button>
<button class="button" id="but28" onclick="createCookie(this)">X</button>
<br><br>

<button class="button" id="but29" onclick="createCookie(this)">X</button>
<button class="button" id="but30" onclick="createCookie(this)">X</button>
<button class="button" id="but31" onclick="createCookie(this)">X</button>
<button class="button" id="but32" onclick="createCookie(this)">X</button>
<button class="button" id="but33" onclick="createCookie(this)">X</button>
<button class="button" id="but34" onclick="createCookie(this)">X</button>
<button class="button" id="but35" onclick="createCookie(this)">X</button>
<br><br>

<button class="button" id="but36" onclick="createCookie(this)">X</button>
<button class="button" id="but37" onclick="createCookie(this)">X</button>
<button class="button" id="but38" onclick="createCookie(this)">X</button>
<button class="button" id="but39" onclick="createCookie(this)">X</button>
<button class="button" id="but40" onclick="createCookie(this)">X</button>
<button class="button" id="but41" onclick="createCookie(this)">X</button>
<button class="button" id="but42" onclick="createCookie(this)">X</button>
<br><br>

</div>





</div>

<button type="button" onclick="addAppoint();" style="position: absolute;top:400px;">Add appointment</button>

<button type="button" onclick="nextMonth();" style="position: absolute;left: 175px">Next month</button>

<button type="button" onclick="prevMonth();">Previous month</button>

<button type ="button" onclick="logout();" style="position: absolute;left: 1000px;">Logout</button>

<?php 

echo "          ".$_SESSION['month'].'/'.$_SESSION['year'];

$k = 1; 

$Y = (integer)$_SESSION['year'];


if((integer)$_SESSION['month']>2)
{
	$m = (integer)$_SESSION['month']-2;
	$d = ((integer)$_SESSION['year'])%100;
	$c = (integer)(((integer)$_SESSION['year'])/100);

}

else
{
	$m = (integer)$_SESSION['month']-2+12;
	$d = ((integer)$_SESSION['year']-1)%100;
	$c = (integer)(((integer)$_SESSION['year']-1)/100);
}

$f = $k + (integer)((13*$m-1)/5) + $d + (integer)($d/4) + (integer)($c/4) - 2*$c;

if($f>=0)
{
	$r = $f%7;

	if($r === 0)
	{
		$r = 7;
	}
}

else
{

	$f = -$f;

	$r = 7-($f%7);
}

if($m === 4 || $m === 2 || $m === 9 ||$m === 7)
{
	$max = 30;
}

else if($m === 12)
{
	if(($Y%4 == 0 && $Y%100 != 0)||$Y%400 == 0)
	{
		$max = 29;
	}
	else
	{
		$max = 28;
	}
}
else
{
	$max = 31;
}

for($x = 0;$x<$max;$x++)
{
	//echo $x+$r;
	if(($x+1)>9)
	echo "<script type='text/javascript'>document.getElementById('but'+".($x+$r).").innerHTML = ".($x+1).";</script>";

	else
		echo "<script type='text/javascript'>document.getElementById('but'+".($x+$r).").innerHTML = ".($x+1).";</script>";
}

//echo $m;



//echo $y;


?>



</body>
</html>