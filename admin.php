<? session_start(); 
  if($_SESSION['utype']!='Primary'){
			die("<head><meta http-equiv='content-type' content='text/html; charset=utf-8'/><title>LOG IN</title><meta name='keywords' content=''/><meta name='description' content=''/><link href='style.css' rel='stylesheet' type='text/css' media='screen'/></head><body><div id='header'></div><div id='menu'><center><ul>
		<li class='first'><a href='home.php'>HOME</a></li>
		<li><a href='#'>ABOUT US</a></li>
		<li><a href='delivery.php'>DELIVERY CHARGES</a></li>
		<li><a href='news.php'>NEWS</a></li>
		<li><a href='operations.php'>OPERATIONS</a></li>
	</ul></center>
</div><div id='page'>
	<div style='background-color:WHITE'>
	
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
<CENTER><td width=150 align=center><u><font face=Tahoma size=5 color=blue><b>PRIMARY ADMINISTRATOR CONTROL</u></b></font></td></CENTER>
<br> 
 <?
 echo "<CENTER><td width=150 align=center><font face='BankGothic Md BT' size=5 color=black><b>Welcome, ".$_SESSION['username'],"!</b></font></td></CENTER> ";
 ?>
 
 <!--<br>
<tr><td></td><td><input type=submit border=0 value="LOG OUT" ONCLICK=window.location.href="./lagawt.php"></td></tr>-->

 <BR><BR>

<table border="1" align="center" bordercolor="green">
<tr>
<table border="1" align="center" bordercolor="green">

<tr><td>
 
<?

   // ADMINTABLE TABLE
   
	mysql_connect("localhost","root","");
	mysql_select_db("sampledatabase");
	 
	 
	 
	 
	 	if($_GET['username']!="" && $_GET['password']!=""  & $_GET['utype']!=""){
		
		 $username=$_GET['username'];
		 $password=$_GET['password'];
		 $utype=$_GET['utype'];
		  mysql_query("INSERT INTO admintable (username,password,utype) VALUES('$username','$password','$utype');");
		}
		if($_GET['action']=="del")
		{
		mysql_query("DELETE FROM admintable WHERE id={$_GET['id']};");
		}
	 
	 $result=mysql_query("SELECT id,username,password,utype FROM admintable;");
	 
	 echo"<table border=1>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Username</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Password</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Type</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Delete</b></font></td>";
	    echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Edit</b></font></td>";
	
	while( $row=mysql_fetch_array($result) ){
	  echo "<tr valign=center>";
	   echo "<td><font color=black>".$row['username']."&nbsp;</td></font>";
	   echo "<td><center><font color=black>".$row['password']."&nbsp;</td></center></font>";
	    echo "<td><center><font color=black>".$row['utype']."&nbsp;</td></center></font>";
	   
	   echo "<td><CENTER><img src='delete.png'><a onclick=\"return confirm('are you sure?');\" href=./admin.php?action=del&id=".$row['id']."><span class=red>delete</span></a></td></CENTER>";
	   echo"<td><CENTER><img src='edit.png'><a onclick=\"return confirm('ARE YOU SURE');\"href=editpassword.php?id=".$row['id']."><span class=red>edit</span></a></td></CENTER>";
	   echo "<td></td>";
	  echo "</tr>";
	}
	echo"</table>";
?>


</td>
</tr>
<tr>
<td colspan="4">
  <br><br>
  
  <b><font color=black face="Bookman Old Style">ADD PRIMARY USER:</font><bR><br>
  <form action="./admin.php" method=get>
  <table border=0 cellpadding=0 cellspacing=0>
  <tr><td><b><font color=black>username:</td><td> <input type=text size=30 name=username></td></tr></font></b>
  <tr><td><b><font color=black>password:</td><td> <input type=text size=30 name=password></td></tr></font></b>
  
  <td><b><font color=black>type:</font></td>
			<td><select name=utype>
			<option value="Primary" SELECTED >Primary Administrator</option>
			<option value="Secondary" >Secondary Administrator</option>
			
   
	
  <tr><td></td><td><br><input type=submit value="SAVE" style="background-color:SpringGreen;height:20;width:160;color:Black;" ONMOUSEOVER="this.style.border='5px solid #87CEEB'" ONMOUSEOUT="this.style.border='2px solid #708090'"></td></tr>
  </b></table>
  </form>
</td> 
</tr>  
</table>
</table>
<br><br>















<table border="1" align="center" bordercolor="green">
<tr>
<table border="1" align="center" bordercolor="green">
<tr><td>
<?

    // TRACKADMIN TABLE

	mysql_connect("localhost","root","");
	mysql_select_db("sampledatabase");
	 
	 
	 
	 
	 	if($_GET['track']!="" && $_GET['location']!="" ){
		 
		 $track=$_GET['track'];
		 $location=$_GET['location'];
		  mysql_query("INSERT INTO trackadmin (id,track,location) VALUES('$id','$track','$location');");
		}
		if($_GET['action']=="del")
		{
		mysql_query("DELETE FROM trackadmin WHERE id={$_GET['id']};");
		}
	 
	 $result=mysql_query("SELECT id,track,location FROM trackadmin;");
	 
	   echo"<table border=1>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Tracking #</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Location</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Delete</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Edit</b></font></td>";
	   $date=date("D-M-Y"); echo' DATE TODAY:  ';echo $date;

	 while( $row=mysql_fetch_array($result) ){
	   echo "<tr valign=center>";
	   echo "<td><font color=black>".$row['track']."&nbsp;</td></font>";
	   echo "<td><font color=black>".$row['location']."&nbsp;</td></font>";
	  
	   
	   
	   echo "<td><CENTER><img src='delete.png'><a onclick=\"return confirm('are you sure?');\" href=./admin.php?action=del&id=".$row['id']."><span class=red>delete</span></a></td></CENTER>";
	   echo"<td><CENTER><img src='edit.png'><a onclick=\"return confirm('ARE YOU SURE');\"href=edittrack.php?id=".$row['id']."><span class=red>edit</span></a></td></CENTER>";
	   echo "<td></td>";
	   echo "</tr>";
	}
	echo"</table>";
?>


</td>
</tr>

<tr>
<td colspan="4">
  <br><br>
  
  <b><font color=black>ADD TRACKING RECORD:</font><bR><br>
  <form action="./admin.php" method=get>
  <table border=0 cellpadding=0 cellspacing=0>
  <tr><td><b><font color=black>tracking number:</td><td> <input type=text size=30 name=track></td></tr></font></b>
  <tr><td><b><font color=black>location:</td><td>         <input type=text size=30 name=location></td></tr></font></b>
  <!--<tr><td><b><font color=black>signature:</td><td>         <input type=file size=30 name="sign"></td></tr></font></b>-->

  
  <tr><td></td><td><input type=submit value="SUBMIT" style="background-color:SpringGreen;height:20;width:160;color:Black;" ONMOUSEOVER="this.style.border='5px solid #87CEEB'" ONMOUSEOUT="this.style.border='2px solid #708090'"></td></tr>
  </b></table>
  </form>
</td> 
</tr>  
 
</table>
</table> 
<br><br>











<table border="1" align="center" bordercolor="green">
<tr>
<table border="1" align="center" bordercolor="green">
<tr><td>
<?

    // PROOF TABLE

	mysql_connect("localhost","root","");
	mysql_select_db("sampledatabase");
	 
	 
	 
	 
	 	
		if($_GET['name']!="" && $_GET['address']!="" && $_GET['signature']!="" && $_GET['track']!=""){
		 
		 $name=$_GET['name'];
		 $address=$_GET['address'];
		 $signature=$_GET['signature'];
		 $track=$_GET['track'];
		  mysql_query("INSERT INTO proof (proofid,track,name,address,signature) VALUES('$proofid','$track','$name','$address','$signature');");
		}
		if($_GET['action']=="del")
		{
		mysql_query("DELETE FROM proof WHERE proofid={$_GET['proofid']};");
		}
	 
	 $result=mysql_query("SELECT proofid,track,name,address,signature FROM proof;");
	 
	   echo"<table border=1>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Tracking No.</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Name</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Address</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Signature</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Delete</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Edit</b></font></td>";
	  

	 while( $row=mysql_fetch_array($result) ){
	   echo "<tr valign=center>";
	   echo "<td><font color=black>".$row['track']."&nbsp;</td></font>";
	   echo "<td><font color=black>".$row['name']."&nbsp;</td></font>";
	   echo "<td><font color=black>".$row['address']."&nbsp;</td></font>";
	   echo "<td><br><img src='./picture/".$row['signature']."' width='155' height='100' style='border:2px solid #FF0000;'></td>";
	   
	   
	
	    echo "<td><CENTER><img src='delete.png'><a onclick=\"return confirm('ARE YOU SURE?');\" href=./admin.php?action=del&proofid=".$row['proofid']."><span class=red>delete</span></a></td></CENTER>";
	   echo"<td><CENTER><img src='edit.png'><a onclick=\"return confirm('ARE YOU SURE');\"href=editproof.php?proofid=".$row['proofid']."><span class=red>edit</span></a></td></CENTER>";
	   echo "<td></td>";
	   echo "</tr>";
	}
	echo"</table>";
?>


</td>
</tr>

<tr>
<td colspan="4">
  <br><br>
  
  <b><font color=black>PROOF OF DELIVERY:</font><bR><br>
  <form action="./admin.php" method=get>
  <table border=0 cellpadding=0 cellspacing=0>
  <tr><td><b><font color=black>tracking number:</td><td> <input type=text size=30 name=track></td></tr></font></b>
  <tr><td><b><font color=black>name:</td><td> <input type=text size=30 name=name></td></tr></font></b>
  <tr><td><b><font color=black>address:</td><td>         <input type=text size=30 name=address></td></tr></font></b>
  <tr><td><b><font color=black>signature:</td><td>         <input type=file size=30 name="signature"></td></tr></font></b>
  

  
  <tr><td></td><td><input type=submit value="SUBMIT" style="background-color:SpringGreen;height:20;width:160;color:Black;" ONMOUSEOVER="this.style.border='5px solid #87CEEB'" ONMOUSEOUT="this.style.border='2px solid #708090'"></td></tr>
  </b></table>
  </form>
</td> 
</tr>  
 
</table>
</table> 
<br><br>


















<br><br>
<table border="1" align="center" bordercolor="green">
<tr>
<table border="1" align="center" bordercolor="green">

<tr><td>
<?

   // NEWS TABLE

	mysql_connect("localhost","root","");
	mysql_select_db("sampledatabase");


	if($_GET['title']!="" && $_GET['headline']!="" && $_GET['content']!="" && $_GET['date']!=""){
		 $title=$_GET['title'];
		 $headline=$_GET['headline'];
		 $content=$_GET['content'];
		 $date=$_GET['date'];
		  mysql_query("INSERT INTO news (title,headline,content,date) VALUES('$title','$headline','$content','$date');");
		  //mysql_query("INSERT INTO archive1 (title,headline,content,date) VALUES('$title','$headline','$content','$date');");
		}
		if($_GET['action']=="del")
		{
		mysql_query("DELETE FROM news WHERE newsid={$_GET['newsid']};");
		}
	 
	 $result=mysql_query("SELECT newsid,title,date,headline,content FROM news;");
	 
	   echo"<table border=1>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Title</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Date</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Headline</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Content</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Delete</b></font></td>";
	   echo "<td width=150 align=center><font face=Tahoma size=3 color=black><b>Edit</b></font></td>";
	 while( $row=mysql_fetch_array($result) ){
	   echo "<tr valign=center>";
	   echo "<td><p><font color=black face=Times New Roman>".$row['title']."&nbsp;</td></p></font>";
	   echo "<td><i><font color=black face=Times New Roman>".$row['date']."&nbsp;</td></font>";
	   echo "<td><li><font color=black face=Times New Roman>".$row['headline']."&nbsp;</td></li></font>";
	   echo "<td><p><font color=black face=Times New Roman>".$row['content']."&nbsp;</td></p></font>";	   
	   echo "<td><CENTER><img src='delete.png'><a onclick=\"return confirm('are you sure?');\" href=./admin.php?action=del&newsid=".$row['newsid']."><span class=red>delete</span></a></td></CENTER>";
	   echo"<td><CENTER><img src='edit.png'><a onclick=\"return confirm('ARE YOU SURE');\"href=editnews.php?newsid=".$row['newsid']."><span class=red>edit</span></a></td></CENTER>";
	   echo "<td></td>";
	   echo "</tr>";
	}
	echo"</table>";
?>
</td>
</tr>
<tr>
<td colspan="4">
  <br><br>
  
  <b><font color=black>NEWS UPDATE:</font><br><br>
  <form action="./admin.php" method=get>
  <table border=0 cellpadding=0 cellspacing=0>
  <tr><td><b><font color=black>Title:</td><td> <input type=text size=35 name=title></td></tr></font></b>
  <tr><td><b><font color=black>Date:</td><td> <input type=text size=35 name=date></td></tr></font></b>
  <tr><td><b><font color=black>Headline: </td><td><br> <textarea  type=text rows="5" cols="50" name=headline ></textarea>
  <tr><td><b><font color=black>Content: </td><td><br> <textarea  type=text rows="20" cols="50" name=content ></textarea><BR><BR>
  <!--<tr><td></td><td><input type=submit border=0 value="UPDATE"></td></tr>-->
  <tr><td></td><td><input type=submit value="UPDATE" style="background-color:SpringGreen;height:20;width:160;color:Black;" ONMOUSEOVER="this.style.border='5px solid #87CEEB'" ONMOUSEOUT="this.style.border='2px solid #708090'"></td></tr>
  </b></table>
  </form>
</td> 
</tr>  
 
</table>
</table> 




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