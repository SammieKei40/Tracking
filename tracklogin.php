<html>
<head>


<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>TRACK RESULT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" /> 
</head>

<body onload validate>
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
	<br>
	
	<?php


	 mysql_connect("localhost","root","");
	 mysql_select_db("sampledatabase");
   
	 
	//$result=mysql_query("SELECT * FROM	trackadmin WHERE track={$_POST['trackmail']};");

	
	  $query = "SELECT trackadmin.*, proof.* ".
               "FROM proof INNER JOIN trackadmin ".
	           "ON proof.track = trackadmin.track WHERE trackadmin.track={$_POST['trackmail']} ";
     $result = mysql_query($query) or die(mysql_error());

		
	
	while( $row=mysql_fetch_array($result)){
	   echo "<br><table border='1' align='center' bordercolor='green'>
     <td>
       <center><font color=blue face=verdana size=2><p><b> YOUR TRACKING NUMBER HAS BEEN FOUND! </font></center>
	</td>
	</table>
	<br><br>";
	
	   echo "<tr valign=center>";
	   
	   echo "<center><td><font face=Tahoma color=black size=3><b>Tracking Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ".$row['track']."&nbsp;</td></font><br></center>";
	   echo "<center><td><font face=Tahoma color=black size=3><b>Your package is now on the:&nbsp;&nbsp;&nbsp;&nbsp;  ".$row['location']."&nbsp;</td></font><br><br><br></center>";
	  
	  echo"<center><font face=Tahoma color=blue size=4>Proof of Delivery: <br></center>";
	  echo "<center><td><font face=Tahoma color=black size=3>Name:&nbsp;&nbsp;  ".$row['name']."&nbsp;</td></font><br></center>";
	  echo "<center><td><font face=Tahoma color=black size=3>Address:&nbsp;&nbsp;  ".$row['address']."&nbsp;</td></font><br></center>";
	  
	  echo "<center><br><font face=Tahoma color=black size=3><b>Signature:&nbsp;&nbsp;  <img src='./picture/".$row['signature']."' width='150' height='100' style='border:2px solid #131212;'></center>";
	 
	}
	
	
   ?>
   
   
	

			
			
			
			
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