<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Red Rose Flora</title>

<link rel="icon" href="pictures/logo.jpg">

<link rel="stylesheet" type="text/css" href="styles/payment.css">
<link rel="stylesheet" type="text/css" href="styles/UsHome.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

<style>
#theme1
	{
	background: url(pictures/theme1.png);
	}

#footer1
	{
	background: url(pictures/theme2.jpg);
	}

.sideshownumText1
{
color: #000;
font-size: 20px;
position: absolute;
top: 0;
right: 300px;
}

#cart_count
{
	font-size: 26px;
	text align: center;
	padding :0 0px 0.9px 0.9px;
	border-radius:3px;
	background: #f00;
}
</style>

</head>

<body>
<div id = "theme1">
<center><img src="pictures/logo2.png" width="450" height="120"></center>
<div class="sideshownumText1"><h2>User:</h2></div>

</div>

<!--Start of menue bar-->
<!--Main Menue bar-->

<div class="nav1">
<ul class="nav2">
<li class="list1"><div class="activeHome"><a class="nav" href="index.php">HOME</a></div></li>
<li class="list1"><a class="nav" href="accessories.php">ACCESSORIES</a></li>
<li class="list1"><a class="nav" href="AboutUs.php">ABOUT US</a></li>
<li class="list1"><a class="nav" href="contactus.php">CONTACT US</a></li>


</ul>

<!---Sub Menue(Cart,Profile and Search-bar)--->
<div class="Text1">
<a class="Text2" href="admininterface.php"><i class="fas fa-sign-out-alt fa-2x"></i></a>
</div>

<div class="cart">

<a class="cart1" href="cart.php"><i class="fas fa-shopping-cart fa-2x"></i>
<?php

if(isset($_SESSION['cart']))  
{
 $count1 = count($_SESSION['cart']);

 echo "<span id='cart_count' class='cartText'>$count1</span>";
}

else
{
	echo "<span id='cart_count' class='cartText'>0</span>";
}


?>
</a>

</div>

<div class="profile">

<div class= "dropboxprof">

<div class="profile1"><i class="fas fa-user-circle fa-2x"></i></div>

<div class = "droplistprof">

<a href="userLogin.php">Sign In</a>
<a href="registration.php">Sign Up</a>
<!---------------------------------

<a href="logout.php">Log Out</a>

---------------------------------------->

</div>

</div>

</div>


<div class = "search-bar">

<form action ="action.php">
<input type="text" placeholder="Search for product..." name="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>

</div>

</div>

<!--end of Sub Menue(Cart,Profile and Search-bar)-->

<!--end of menue bar-->

</br>

<!--Begin payment-->

<h1><font size="10px">Payment Details</font></h1>

<div class="pay">

<div class = "col1"> 
    <div class="payDetails">
 
 <form method='post' action="AddPayDetails.php">
 
 
 <div class = "row">
 <div class = "col2"> 

   <font size="6px">Billing Details</font>
   </br>
   <label><i class="fas fa-user"></i>Full Name</label>
   <input type="text" id="name" placeholder="Name with initials" required>
   </br>
   <label><i class="fas fa-address-card"></i>Address</label>
   <input type="text" id="address" placeholder="123,A.B.Street" required>
   <label><i class="fas fa-city"></i>City</label>
   <input type="text" id="city" placeholder="city" required>
   <label><i class="fas fa-globe"></i>Country</label>
   <input type="text" id="country" placeholder="country" required>
   
   <div class = "row">
    <div class = "col2">
	<label><i class="fas fa-building"></i>Province / State</label>
   <input type="text" id="state" placeholder="Province / State" required>
   </div>
   
  <div class = "col2">  
	<label>Zip Code</label>
   <input type="text" id="zipcode" placeholder="zipCode" required>
    </div>
   </div>
  </div>  
  
  <div class = "col2">  
    <font size="6px">Payment</font>
	</br>
  <label>Accepted Methods</label>
  <div class="paycards">
	<i class="fab fa-cc-visa fa-2x" style="color:#0F0B6F"></i>
	<i class="fab fa-cc-amex fa-2x" style="color:#3DBDE8;"></i>
	<i class="fab fa-cc-mastercard fa-2x" style="color:#D12727;"></i>
	<i class="fab fa-cc-discover fa-2x" style="color:#F77903;"></i>
  </div>
  
  <label>Card Holder's Name</label>
  <input type="text" id=cardname" placeholder="Card Holder's Name" required>
  <label>Credit Card Number</label>
  <input type="text" id="cardnumber" placeholder="1111-1111-1111-1111" required>
  <label>Expire Month</label>
  <input type="text" id="expmonth" placeholder="Month" required>
  
  <div class = "row">
  <div class = "col2">
  <label>Expire Year</label>
  <input type="text" id="expyear" placeholder="Year" required>
   </div>
   
   <div class = "col2">
   <label>CVV</label>
   <input type="text" id="cvv" placeholder="cvv" required>
   </div>
  </div> 
 </div>
   
</div>   

 <label><input type="checkbox" checked" name="checkAddress">Shipping Address same as billing</label>
 
 </br>
 <center>
 <input class="confirmPay" type="submit" value="Confirm Payment" onclick= "validate()">
 </center>
 
   </form>
   
   </div>
 </div> 

</div> 
   
 <!--end payment-->

<hr>
<marquee><b><font color="#691360">Red Rose Flora - 'Cause little things matter... </font></marquee>
<hr>

<!--footer begin--->

<footer id='footer1'>

<div class="socialmedia">
<a class="socialmedia1" href="https://www.facebook.com"><i class="fab fa-facebook-square fa-2x"></i></a>

<a class="socialmedia1" href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
<a class="socialmedia1" href="https://twitter.com/login"><i class="fab fa-twitter-square fa-2x"></i></a>
<a class="socialmedia1" href="https://www.google.com/intl/si/gmail/about/#"><i class="fab fa-google-plus-square fa-2x"></i></i></a>
<a class="socialmedia1" href="https://www.whatsapp.com"><i class="fab fa-whatsapp-square fa-2x"></i></a>
</div>

<ul class="nav3">
<li class="list2"><div class="activeHome"><a class="nav" href="index.php">HOME</a></div></li>
<li class="list2"><a class="nav" href="accessories.php">ACCESSORIES</a></li>
<li class="list2"><a class="nav" href="AboutUs.php">ABOUT US</a></li>
<li class="list2"><a class="nav" href="contactus.php">CONTACT US</a></li>
</ul>

</footer>

<!--footer End--->
	
</body>
</html>
