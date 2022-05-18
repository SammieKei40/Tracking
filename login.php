<?php
session_start();
//if($_SESSION['username'])
	//echo "<script>setTimeout(location.href='./admin.php',0);</script>";
require("connect.php");	 
$post_username = $_POST['username'];
$post_password = $_POST['password'];
$post_utype = $_POST['utype'];
if($post_username&&$post_password&&$post_utype)
{

     $login = sprintf("SELECT * FROM admintable WHERE username = '%s' AND password = '%s' AND utype = '%s'", mysql_real_escape_string($post_username),mysql_real_escape_string($post_password),mysql_real_escape_string($post_utype));
     $rowcount = mysql_num_rows(mysql_query($login));
	 if ($rowcount==1)
	 {
	 
	 
		if($_POST['utype']=='Primary')
			{
		
			        $_SESSION['username']=$post_username;
			        $_SESSION['utype'] = 'Primary';
			       
			echo "<head><meta http-equiv='content-type' content='text/html; charset=utf-8'/><title>LOG IN</title><meta name='keywords' content=''/><meta name='description' content=''/><link href='style.css' rel='stylesheet' type='text/css' media='screen'/></head><body><div id='header'></div><div id='menu'><center><ul>
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
			<center><font color=blue face=verdana><p><b> ACCESS GRANTED! </font></center>
			</td>
			</table>
			<br>
			<br><center><a href=./admin.php><font face=verdana size=3 color=blue>Click Here To Enter Primary Administrator Page.</font></a></center>
			<br><br><br>

			</div>
			</div>
			</div>

			<center>
			<div id='footer'>
			<b><p>Copyright © 2009  PhilPostCorp.freehostia.com Created by Ekis Boys</p></b>
			</div>
			</center>";  
			
			
			}

       else
	        {
			
			$_SESSION['utype'] = 'Secondary';
			
	        }
	   
	   
	  if($_POST['utype']=='Secondary')
			{
		
			$_SESSION['username']=$post_username;
			$_SESSION['utype'] = 'Secondary';
			
		
			echo "<head><meta http-equiv='content-type' content='text/html; charset=utf-8'/><title>LOG IN</title><meta name='keywords' content=''/><meta name='description' content=''/><link href='style.css' rel='stylesheet' type='text/css' media='screen'/></head><body><div id='header'></div><div id='menu'><center><ul>
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
			<center><font color=blue face=verdana><p><b> ACCESS GRANTED! </font></center>
			</td>
			</table>
			<br>
			<br><center><a href=./branch.php><font face=verdana size=3 color=blue>Click Here To Enter Secondary Administrator Page.</font></a></center>
			<br><br><br>

			</div>
			</div>
			</div>

			<center>
			<div id='footer'>
			<b><p>Copyright © 2009  PhilPostCorp.freehostia.com Created by Ekis Boys</p></b>
			</div>
			</center>";
			
			}

       else
	   {
			$_SESSION['utype'] = 'Primary';
			
	   }
	 
	 
	 
	 }
	 
	 
	 else
	   die("<head><meta http-equiv='content-type' content='text/html; charset=utf-8'/><title>LOG IN</title><meta name='keywords' content=''/><meta name='description' content=''/><link href='style.css' rel='stylesheet' type='text/css' media='screen'/></head><body><div id='header'></div><div id='menu'><center><ul>
		<li class='first'><a href='home.php'>HOME</a></li>
		<li><a href='#'>ABOUT US</a></li>
		<li><a href='delivery.php'>DELIVERY RATES</a></li>
		<li><a href='news.php'>NEWS</a></li>
		<li><a href='operations.php'>OPERATIONS</a></li>
	</ul></center>
</div><div id='page'>
	<div style='background-color:WHITE'>
	<br><table border='1' align='center' bordercolor='green'>
<td>
	<center><font color=red face=verdana><p><b> INCORRECT USERNAME OR PASSWORD! </font></center>
	</td>
	</table>
	<br>
	
<form action='./login.php' method=POST>
<center><font color=black size=5 face=impact>SERVER ACCESS</font></center>

<br>
<table width='730' border='0' cellpadding='0' cellspacing='20' bgcolor='white' align='left'>

<center><font color=black size=4 face=impact>Type : </font>
		<select name='utype' width='1'>
			<option value='Primary' SELECTED >Primary Administrator</option>
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
	else
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
	<center><font color=red face=verdana><p><b> USERNAME AND PASSWORD REQUIRED! </font></center>
	</td>
	</table>
	<br>
	
<form action='./login.php' method=POST>
<center><font color=black size=5 face=impact>SERVER ACCESS</font></center>

<br>
<table width='730' border='0' cellpadding='0' cellspacing='20' bgcolor='white' align='left'>

<center><font color=black size=4 face=impact>Type : </font>
		<select name='utype' width='1'>
			<option value='Primary' SELECTED >Primary Administrator</option>
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
	
	
	
?>
