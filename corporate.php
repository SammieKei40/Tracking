<? session_start();


if($_SESSION['utype']=='Primary')
{
require("admin.php");
}

else
{
require("branch.php");
}


?>

<html>
<head>
<meta http-equiv='content-type' content='text/html; charset=utf-8'/><title>LOG IN</title>
<meta name='keywords' content=''/><meta name='description' content=''/>

<link href='style.css' rel='stylesheet' type='text/css' media='screen'/>

</head>
<body>
<div id='header'>
</div>

<div id='menu'>
		
		<center><ul>

		<li class='first'><a href='home.php'>HOME</a></li>
		<li><a href='file:///C:/xampp/htdocs/xampp/THESIS/index.php'>ABOUT US</a></li>
		<li><a href='delivery.php'>DELIVERY RATES</a></li>
		<li><a href='news.php'>NEWS</a></li>
		<li><a href='operations.php'>OPERATIONS</a></li>

		</ul></center>

</div>

<div id='page'>
	<div style='background-color:WHITE'>

	<br>
	
<form action='./login.php' method=POST>

<center><font color=blue size=5 face=impact>SERVER ACCESS</font></center>

<br>

<table width='730' border='0' cellpadding='0' cellspacing='20' bgcolor='white' align='left'>


<center><font color="DarkOliveGreen" size=4 face=impact>Type : </font>
		<select name='utype' width='1'>
			<option value='Primary' SELECTED>Primary Administrator</option>
			<option value='Secondary'><b>Secondary Administrator</option></select>


<center><br><font color=black size=4 face=impact>username : </font>
			<input type='text' name='username'>

<center><font color=black size=4 face=impact>password : </font>
		<input type='password' name='password'>
		

		
	  <br><br><center><button type='submit' style='width:200;background-color:SpringGreen;'>SUBMIT</button></center>

	  </table>
</form>

<br><br><br>

	</div>
  </div>
</div>

	<center>
	 <div id='footer'>
	<b><p>Copyright © 2009  PhilPostCorp.freehostia.com Created by Ekis Boys</p></b>
	</div>
	</center>
	
</html>