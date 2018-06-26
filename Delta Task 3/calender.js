function createCookie(x)
{
	
	console.log(x.innerHTML);

	y="day="+x.innerHTML;

	console.log(y)

	document.cookie = y;

	/*switch(y)
	{
		case 1 : document.cookie = "day = 1";
		break;
		case 2 : document.cookie = "day = 2";
		break;
		case 3 : document.cookie = "day = 3";
		break;
		case 4 : document.cookie = "day = 4";
		break;
		case 5 : document.cookie = "day = 5";
		break;
		case 6 : document.cookie = "day = 6";
		break;
		case 7 : document.cookie = "day = 7";
		break;
		case 8 : document.cookie = "day = 8";
		break;
		case 9 : document.cookie = "day = 9";
		break;
		case 10 : document.cookie = "day = 10";
		break;
		case 11 : document.cookie = "day = 11";
		break;
		case 12 : document.cookie = "day = 12";
		break;
		case 13 : document.cookie = "day = 13";
		break;
		case 14 : document.cookie = "day = 14";
		break;
		case 15 : document.cookie = "day = 15";
		break;
		case 16 : document.cookie = "day = 16";
		break;
		case 17 : document.cookie = "day = 17";
		break;
		case 18 : document.cookie = "day = 18";
		break;
		case 19 : document.cookie = "day = 19";
		break;
		case 20 : document.cookie = "day = 20";
		break;
		case 21 : document.cookie = "day = 21";
		break;
		case 22 : document.cookie = "day = 22";
		break;
		case 23 : document.cookie = "day = 23";
		break;
		case 24 : document.cookie = "day = 24";
		break;
		case 25 : document.cookie = "day = 25";
		break;
		case 26 : document.cookie = "day = 26";
		break;
		case 27 : document.cookie = "day = 27";
		break;
		case 28 : document.cookie = "day = 28";
		break;
		case 29 : document.cookie = "day = 29";
		break;
		case 30 : document.cookie = "day = 30";
		break;
		case 31 : document.cookie = "day = 31";
		break;

	}*/

	window.location = "appointment.php";


	
}

function addAppoint()
{
	window.location = "appointmentform.php";
}

function goBack()
{
	window.location = "calender.php";
}

function nextMonth()
{
	window.location = "nextmonth.php";
}

function prevMonth()
{
	window.location = "prevmonth.php";
}

function logout()
{
	window.location = "logout.php";
}