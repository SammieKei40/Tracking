<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>NEWS UPDATE</title>
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
		<li><a href="corporate.php">CORPORATE</a></li>
		<li><a href="delivery.php">DELIVERY RATES</a></li>
		<li><a href="operations.php">OPERATIONS</a></li>
	</ul></center>
</div>
<div id="page">
	<div style='background-color:WHITE'>
	<br>
<CENTER><td width=150 align=center><font face=Tahoma size=5 color=black><b>Region XII PhilPostCorp News</b></font></td></CENTER>

<br><br>



<?
	mysql_connect("localhost","root","");
	mysql_select_db("barangay");


	if($_GET['title']!="" && $_GET['headline']!="" && $_GET['content']!="" && $_GET['date']!=""){
		 $title=$_GET['title'];
		 $headline=$_GET['headline'];
		 $content=$_GET['content'];
		 $date=$_GET['date'];
		  mysql_query("INSERT INTO news (title,headline,content,date) VALUES('$title','$headline','$content','$date');");
		  //mysql_query("INSERT INTO archive1 (title,headline,content,date) VALUES('$title','$headline','$content','$date');");
		}
		//if($_GET['action']=="del")
		//{
		//mysql_query("DELETE FROM news WHERE id={$_GET['id']};");
		//}
	 
	 $result=mysql_query("SELECT newsid,title,date,headline,content FROM news;");
	 
	   
	   //echo "<i><b><font size=3 face=verdana>Title:</i></b></font>"; 
	 while( $row=mysql_fetch_array($result) ){
	   echo "<center><p><b><font color=black size=3 face=verdana>".$row['title']."&nbsp;".$row['date']."&nbsp;</p></b></font></center>";
	   echo "<center><p><font color=black size=3 face=verdana>*** ".$row['headline']."&nbsp;***</p></font></center>";
	   echo "<center><p><font color=black size=3 face=verdana align=>".$row['content']."&nbsp;</p></font></center>";	   
	}
	echo"</table>";
?>

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