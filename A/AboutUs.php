<?php

session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Red Rose Flora</title>

<link rel="icon" href="pictures/logo.jpg">

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

.container {
  position: relative;
  text-align: center;
  color: white;
}


/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

/*Paragaphs*/

p{
	font-family:verdana;
	color:#000;
	font-size:18px;
}

h1{
	font-family:verdana;
	color: #99448C;
	font-size:35px;
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
<li class="list1"><a class="nav" href="index.php">HOME</a></li>
<li class="list1"><a class="nav" href="accessories.php">ACCESSORIES</a></li>
<li class="list1"><div class="activeHome"><a class="nav" href="AboutUs.php">ABOUT US</a></div></li>
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

<h1><center>About US</center></h1>

<div class="container">
<img src="pictures/about.jpg" alt="Snow" style="width:100%;">
  
<div class="top-left">
  
<h1>The Story about Mom's Choice</h1>
<p>
Mom's Choice was founded in Colombo, Sri Lanka in 2007 by Gehan Blok and Dino Corera. They began by selling toys, apparel and accessories before deciding that apparel had the most growth potential.
By the early 2010s, Mom's Choice was repositioned as a specialty retailer of children's apparel for newborns to pre-teens and began offering private label merchandise as well as branded product.
In 2013, Ushitha Perera took the helm as President & Chief Executive Officer. Ushitha quickly established four Strategic Growth Initiatives for the company to maximize our long-term potential: Superior Product, Business Transformation through Technology, Alternate Channels of Distribution and Fleet Optimization. In order to support our key strategic initiatives, Ushitha also established a best in class management team and a foundation of operational excellence. Our successful execution of these four Strategic Growth Initiatives have transformed Mom's Choice from what was a predominately Brick and Mortar home-grown retailer when Ushitha arrived, to the Global Best in Class Omni Channel Kids Specialty Retailer that we are today!
<br></p>

<h1>Our Mission</h1>
<p>Mom's Choice is not just a children's boutique, but a fresh take on kid’s retail. Our goal is to make our store as interactive and accessible as possible, for adults and especially for kids. We strive to make our store a place for you to find the most unique gifts, clothing, and toys possible for your little special someone.
At Mom's Choice, we have a strong sense of community and a reputation of excellent customer service. We continuously seek to give back to our customers and our community, just as much as they provide for us<br></p>

<h1>Our Vision</h1>
<p>Our aim is to present a well-curated, chemical free space, that helps promote a healthy baby and happy parents.<br></p>

</div>

</div>

<hr>


</br>

<!---shopping card end---->

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
<li class="list2"><a class="nav" href="index.php">HOME</a></li>
<li class="list2"><a class="nav" href="accessories.php">ACCESSORIES</a></li>
<li class="list2"><div class="activeHome"><a class="nav" href="AboutUs.php">ABOUT US</a></div></li>
<li class="list2"><a class="nav" href="contactus.php">CONTACT US</a></li>
</ul>

</footer>

<!--footer End--->
	
</body>
</html>