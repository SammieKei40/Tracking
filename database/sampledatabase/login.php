<?php
session_start();
require("connect.php");	 
$post_username = $_POST['username'];
$post_password = $_POST['password'];
if($post_username&&$post_password)
{

     $login = sprintf("SELECT * FROM admintable WHERE username = '%s' AND password = '%s'", mysql_real_escape_string($post_username),mysql_real_escape_string($post_password));
     $rowcount = mysql_num_rows(mysql_query($login));
	 if ($rowcount==1)
	 {
	  $_SESSION['username']=$post_username;
	  echo $_SESSION['username'],", you have been logged in!<a href='admin.php'>click here</a> to enter admin";
	 }
	 else
	    die ("incorrect username or password");
	
}
else
      die("  username and password required");
?>