<?

$error = "error in connecting to database";
$connect = mysql_connect("localhost","root","") or die($error);
mysql_select_db("sampledatabase") or die($error);

?>