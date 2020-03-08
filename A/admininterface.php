<!DOCTYPE HTML>
<html>
<head>
<title>Red Rose Flora Interface</title>

<link rel="icon" href="pictures/logo.jpg">
<link rel="stylesheet" type="text/css" href="styles/Int.css">

<script>
function linkpages1()
{
	location.href="index.php";
}

function linkpages2()
{
	location.href="adminLogin.php";
}
</script>

</head>

<body background="pictures/background.jpg">

<img src="pictures/logo2.png" width="550" height="100">

<div class="row1">
 
 <div class="Column1">
 
   <div class="card1" onclick="linkpages1()">
   
    <b>
	 <font size="8px" face="cursive">View Store</font></b>
	
	 <img src="pictures/cart.jpg" width="300px" height="300px">
	 </br>

	</div>
 </div>
 
<div class="Column1">

   <div class="card2" onclick="linkpages2()">
   
    <b>
	 <font size="8px" face="cursive">Administration</font>
	 </b>
    <img src="pictures/monitor.jpg" width="450px" height="300px">
	 </br>
	 
	
	
	</div>
 </div>
 </div>

</body>
</html>