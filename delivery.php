<html>
<head>

<script type="text/javascript">
 <!--
 function calculate()
 {
     // store the checkboxes in an array
     //var checkboxes = document.getElementsByName("ck"); 
  
     // store the dropdowns in an array
     var dropdowns = document.getElementsByName("db"); 
  
     // set a value to the total, or else it's "undefined"
     var total = 0; 
  
     // loop through the checkboxes sequentially using semicolon to separate declarations
     for(var i = 0; i < dropdowns.length; i++) 
     {
         // use two equal signs to test if particular checkbox is checked
        // if(checkboxes[i].checked == true)
         //{
             // use eval() to make dropdown value a number instead of a string
             // accumulate sum to total
             total = total + eval(dropdowns[i].value);
         //}
     }
         
         alert(total);
		 
 }
 //-->
 </script>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>DELIVERY RATES</title>
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
		<li><a href="news.php">NEWS</a></li>
        <li><a href="operations.php">OPERATIONS</a></li>
		</ul></center>
</div>
<div id="page">
	<div style='background-color:WHITE'>
	<BR><BR><BR>
	
	<form name="sayyedform">
	<center>
	<b><font  size=2 >Package/Document Type:</font></b>
     <select name="db">
	 <option value="250">Small Pouch = Dimensions: 14x1 x 7.5 cm
	 <option value="450">Large Pouch = Dimensions: 19x1 x 12 cm
	 <option value="896">5kg Box
	 <option value="1792">10kg Box
	 <option value="3584">20kg Box
     </select><br><br>
	 
     <b><font  size=2 >From:</font></b> 
     <select name="db">
     <option value="195">Metro Manila
     <option value="215">Luzon
     <option value="290">Visayas
     <option value="305">Mindanao
     </select>	
     
	 <b><font  size=2 >&nbsp;&nbsp;&nbsp;To:</font></b>
	 <select name="db">
	 <option value="195">Metro Manila
	 <option value="215">Luzon
	 <option value="290">Visayas
	 <option value="305">Mindanao
	 </select>
	 </center>
	
	  <br><br><center><button type="submit" style="width:200;background-color:SpringGreen;" onclick="calculate()">CALCULATE</button></center>
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