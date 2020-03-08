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

/*Shopping Cards begins*/

*{
box-sizing: border-box;
}

.Column1
{
 float: left;
 width: 25%;
 padding:20px 20px 20px 20px;
}

.card1
{
box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
padding: 15px ;
text-align: center;
background-color: #f1f1f1;
}

.card1:hover
{
background-color:rgb(145, 186, 233);
}

/*--------------------------*/

a.cardbutton
{
background-color:rgb(43, 12, 78);
border-radius: 25px;
margin:5px;
overflow: hidden;
color:white;
text-align:center;
font-size:20px;
padding: 10px 30px 10px 30px;
text-decoration: none;
}

a.cardbutton:hover
{
background-color:rgb(255, 47, 20);
}

#cart_count
{
	font-size: 26px;
	text align: center;
	padding :0 0px 0.9px 0.9px;
	border-radius:3px;
	background: #f00;
}

/* end of shopping card*/

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


<!--silde show begins-->

<div class="slideshow">

<!--silde show image 1-->

<div class="webSlides">
 <div class="slideshownumText">1/4</div>
 <img src ="pictures/sl4.jpg" style="width:100%" width="1000px" height="400"> 
<div class="slideundertxt">Your Needs</div>
</div>

<!--silde show image 2-->

<div class="webSlides">
 <div class="slideshownumText">2/4</div>
 <img src ="pictures/sl1.jpg" style="width:100%" width="1000px" height="400"> 
<div class="slideundertxt">Our Creations</div>
</div>

<!--silde show image 3-->

<div class="webSlides">
 <div class="slideshownumText">3/4</div>
 <img src ="pictures/sl2.jpg" style="width:100%" width="1000px" height="400"> 
<div class="slideundertxt">Choises</div>
</div>

<!--silde show image 4-->

<div class="webSlides">
 <div class="slideshownumText">4/4</div>
 <img src ="pictures/sl5.jpg" style="width:100%" width="1000px" height="400"> 
<div class="slideundertxt">New Styles</div>
</div>

<a class="preweiw" onclick="nextSlides(-1)">&#10094;</a>
<a class="nextslide" onclick="nextSlides(1)">&#10095;</a>

</div>

<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
</div>

<script src="js/slideShow.js">
</script>

</br>

<!--silde show ends-->

<h1><center>Top Sales</center></h1>

<hr>
<!--------Connect to the database----------------->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";


$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error)
{
 die("Database Connection failed " . $conn->connect_error);
}

 $sql = "SELECT * FROM item";
 $result = $conn->query($sql);
 
 $count = 0;
 
 if($result-> num_rows > 0)
 {
 while($row = $result -> fetch_assoc())
  {
    $id = $row['Item_id'];
    $name = $row['Item_name'];
    $price = $row['Item_price'];
    $quantity = $row['Quantity'];
	$des = $row['description'];
	$picName = $row['Item_Picture_Name'];
	
	if($count < 4)
	{
  	echo"<div class='Column1'>";
   	echo" <div class='card1'>";
   		echo"<img src='uploads/".$row['Item_Picture_Name']."' width='300' height='250'>";
		echo" </br> ";
	
		echo" <b>";
	 	echo"<font size='5px' face='cursive'>".$name."</font></b>";
		 echo"</br>";
		echo" <font size='3px' face='cursive'>".$des."</font>";
		 echo"</br>";

		 echo"<font size='4px' color='red'>Rs.".$price."</font>";
	
		echo"</br>";
		echo"</br>";
		echo"<a class='cardbutton' href='accessories.php'>Shop Item <i class='fas fa-store'></i></i></a>";

	echo"</div>";
 	echo"</div>";
	
	$count = $count + 1;
	
	}
	
	else if($count == 5)
	{
		break;
	}

  }

 }

?>

</br>

<!---shopping card end---->

<marquee><b><font color="#691360">Red Rose Flora - 'Cause little things matter... </font></marquee>
<hr>

<!--footer begin--->

<footer id='footer1'>

<div class="foot">
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
</div>

</footer>

<!--footer End--->
	
</body>
</html>