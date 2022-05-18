<html>
 <body>
<?
	mysql_connect("localhost","root","");
	mysql_select_db("sampledatabase");
	 
	 
	 
	 
	 	if($_GET['username']!="" && $_GET['password']!="" ){
		 
		 $username=$_GET['username'];
		 $password=$_GET['password'];
		  mysql_query("INSERT INTO admintable (username,password) VALUES('$username','$password');");
		}
		if($_GET['action']=="del")
		{
		mysql_query("DELETE FROM admintable WHERE id={$_GET['id']};");
		}
	 
	 $result=mysql_query("SELECT id,username,password FROM admintable;");
	 
	 echo"<table border=1>";
	   echo "<td width=150 align=center><font face=impact size=6 color=yellow><b>username</b></font></td>";
	   echo "<td width=350 align=center><font face=impact size=6 color=yellow><b>password</b></font></td>";
	   echo "<td width=150 align=center><font face=impact size=6 color=yellow><b>DELETE</b></font></td>";
	 while( $row=mysql_fetch_array($result) ){
	  echo "<tr valign=center>";
	   echo "<td><font color=black>".$row['username']."&nbsp;</td></font>";
	   echo "<td><font color=black>".$row['password']."&nbsp;</td></font>";
	   echo "<td><a onclick=\"return confirm('are you sure?');\" href=./admin.php?action=del&id=".$row['id']."><span class=red>delete</span></a></td>";
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
  <b>for admin<b>
  <b><font color=yellow>ADD RECORD</font><bR>
  <form action="./admin.php" method=get>
  <table border=0 cellpadding=0 cellspacing=0>
  <tr><td><b><font color=yellow>username:</td><td> <input type=text size=30 name=username></td></tr></font></b>
  <tr><td><b><font color=yellow>password:</td><td> <input type=text size=30 name=password></td></tr></font></b>
  <tr><td></td><td><input type=submit border=0 value="SAVE"></td></tr>
  </b></table>
  </form>
</td> 
</tr>  

  
</table> 
</div> 
</body>
</html>