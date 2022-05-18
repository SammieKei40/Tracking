<html>
<head>

<script type="text/javascript">
	function validate()
	{
		submitOK="true";
	if (mytrack.trackmail.value=="")
	{
 	alert("PLEASE INPUT TRACKING NUMBER");
 	
	submitOK="false";
 	}
	if (submitOK=="false")
 	{
 	return false;
 	}
	}
</script>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>OPERATIONS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" /> 
</head>

<body>
<div id="header">
	<!-- <h1>EKIS BOYS</h1> -->
</div>
<div id="menu">
	<center><ul>
		<li class="first"><a href="home.php">HOME</a></li>
		<li><a href="#">ABOUT US</a></li>
		<li><a href="corporate.php">CORPORATE</a></li>
		<li><a href="delivery.php">DELIVERY RATES</a></li>
		<li><a href="news.php">NEWS</a></li>
	</ul></center>
</div>
<div id="page">
	<div style='background-color:WHITE'>
	<BR>
	
<form action="./tracklogin.php" method=POST name="mytrack" onsubmit="return validate()">
<!--<center><font color=black size=5 face=impact>MAIL TRACKER</font></center>-->
<CENTER><img src="trace.jpg"></CENTER>
<br><BR>
<table width="730" border="0" cellpadding="0" cellspacing="20" bgcolor="white" align="left">



<center><font color=black size=4 face=impact>TRACKING NUMBER : </font>
		<input type='text' name='trackmail'>
		
		
	  <br><br><center><button type="submit" style="width:200;background-color:SpringGreen;">SUBMIT</button></center>
</table>
</form>

<br><br><br>

	</div>
  </div>
</div>


	<center>
	 <div id="footer">
	<b><p>Copyright © 2009  PhilPostCorp.freehostia.com Created by Ekis Boys</p></b>
	</div>
	</center>
	
 
 


</body>
</html>