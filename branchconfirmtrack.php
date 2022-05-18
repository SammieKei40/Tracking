<? session_start(); 
  if($_SESSION['utype']!='Secondary'){
		die("<head><meta http-equiv='content-type' content='text/html; charset=utf-8'/><title>LOG IN</title><meta name='keywords' content=''/><meta name='description' content=''/><link href='style.css' rel='stylesheet' type='text/css' media='screen'/></head><body><div id='header'></div><div id='menu'><center><ul>
		<li class='first'><a href='home.php'>HOME</a></li>
		<li><a href='#'>ABOUT US</a></li>
		<li><a href='delivery.php'>DELIVERY CHARGES</a></li>
		<li><a href='news.php'>NEWS</a></li>
		<li><a href='operations.php'>OPERATIONS</a></li>
	</ul></center>
</div><div id='page'>
	<div style='background-color:WHITE'>
	<br><table border='1' align='center' bordercolor='green'>
<td>
	<center><font color=red face=verdana><p><b> YOU MUST BE LOGGED IN! </font></center>
	</td>
	</table>
	<br>

	<form action='./login.php' method=POST>
<center><font color=blue size=5 face=impact>SERVER ACCESS</font></center>

<br>
<table width='730' border='0' cellpadding='0' cellspacing='20' bgcolor='white' align='left'>

<center><font color=black size=4 face=impact>Type : </font>
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
	</center>");
	}
	  ?>

	  
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>SERVER ACCESS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" /> 
</head>

<body>
<div id="header">
	<!--<h1>SERVER ACCESS</h1>-->
</div>
<div id="menu">
	<center><ul>
		<li class="first"><a href="home.php">HOME</a></li>
		<li><a href="#">ABOUT US</a></li>
		<li><a href="lagawt.php">LOG OUT</a></li>
		<li><a href="delivery.php">DELIVERY RATES</a></li>
		<li><a href="news.php">NEWS</a></li>
		<li><a href="operations.php">OPERATIONS</a></li>
	</ul></center>
</div>
<div id="page">
	<div style='background-color:WHITE'>
	<br>
<!--<CENTER><td width=150 align=center><font face=Tahoma size=6 color=blue><b>ADMINISTRATOR CONTROL PANEL</b></font></td></CENTER>-->

<br><br>


<?php 

    mysql_connect("localhost","root","");
	mysql_select_db("sampledatabase");
    //$result=mysql_query("SELECT * FROM trackadmin WHERE id={$_GET['id']};");
	//$row=mysql_fetch_array($result);
    
	$track=$_POST['track'];
	$location=$_POST['location'];
	$id=$_GET['id'];
	
		$sql = "UPDATE trackadmin
			   SET track='$track',location='$location' 
			   WHERE id=$id";
		mysql_query($sql);		
	  
	     echo "<table border='1' align='center' bordercolor='GREEN'><td width=300 align=center><p><b><font face='verdana' color='BLUE'><center> RECORD SUCCESSFULLY SAVED!.   <br></center></td></b></font></table>";


	  
	  
	  
?>

<br><br><br>
	<center>
	<input type=button value="BACK" style="background-color:SpringGreen;height:20;width:160;color:Black;"ONMOUSEOVER="this.style.border='5px solid #87CEEB'"ONMOUSEOUT="this.style.border='2px solid #708090'"ONCLICK="window.location.href='./branch.php'">
    </center>


<br><br><br>

	</div>
  </div>
</div>

	<center>
	 <div id="footer">
	<center><b><p>Copyright © 2009  PhilPostCorp.freehostia.com Created by Ekis Boys</p></b></center>
	</div>
	</center>
</body>
</html>

