<html>
<body>
<form action="./login.php" method=POST>
<table width="730" border="0" cellpadding="0" cellspacing="20" bgcolor="white" align="left">
<tr>
<td>
username

		<input type='text' name='username'>
</td>
</tr>
<tr>
<td>
password
		<input type='password' name='password'><input type='submit' value='Log in'>
	  


</td>
</tr>
<?
	mysql_connect("localhost","root","");
	mysql_select_db("sampledatabase");
	 
	 
	 
	 
	 	if($_GET['username']!="" && $_GET['password']!="" ){
		 
		 $username=$_GET['username'];
		 $password=$_GET['password'];
		  mysql_query("INSERT INTO admintable (username,password) VALUES('$username','$password');");
		}
		
	 
	 $result=mysql_query("SELECT id,username,password FROM admintable;");
	 
	 echo"<table border=1>";
	   echo "<td width=150 align=center><font face=impact size=6 color=yellow><b>username</b></font></td>";
	   echo "<td width=350 align=center><font face=impact size=6 color=yellow><b>password</b></font></td>";
	  
	 while( $row=mysql_fetch_array($result) ){
	  echo "<tr valign=center>";
	   echo "<td><font color=black>".$row['username']."&nbsp;</td></font>";
	   echo "<td><font color=black>".$row['password']."&nbsp;</td></font>";
	   
	   echo "<td></td>";
	  echo "</tr>";
	}
	echo"</table>";
?>


</body>
</html>    
