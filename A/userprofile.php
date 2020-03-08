<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Red Rose Flora</title>

<link rel="icon" href="pictures/logo.jpg">

<link rel="stylesheet" type="text/css" href="styles/UsHome.css">
<link rel="stylesheet" type="text/css" href="styles/userProfile.css">

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
<li class="list1"><a class="nav" href="index.php">HOME</a></li>
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
</a></div>

<div class="profile">

<div class= "dropboxprof">

<div class="profile1"><div class="activeHome"><i class="fas fa-user-circle fa-2x"></i></div></div>

<div class = "droplistprof">
<!------
<a href="login.php">Sign In</a>
<a href="registration.php">Sign Up</a>

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

<h1><center>User Details</center></h1>

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

 $sql = "SELECT * FROM user";
 $result = $conn->query($sql);
 
 if($result-> num_rows > 0)
 {
 while($row = $result -> fetch_assoc())
  {
    $name = $row['Username'];
    $email = $row['Email'];
	$phone = $row['ContactNo'];
  }

 }

?>

<!---begin of user profile--->


<div class="uname">
<button class="userpic">
<i class = "fas fa-user-circle fa-9x"></i>
</button>

</div>


<font size="20px"><?php echo $name; ?></font></br>
<font face="arial">
Post:User</font></br>
<h6>Can view and edit some parts of page only.</h6>



</br>

<div class="row">

    <div class="col1">
	
		

	<h1>INTRODUCTION</h1>

	<font face="arial" size="3px">
 
	<label><i class="fas fa-user fa-2x"></i><b> Contact Name</b>:A.B.C.Silva</label>

	<label><i class="fas fa-at fa-2x"></i><b> Contact Email:</b><?php echo $email; ?></label>

	<label><i class="fas fa-phone-alt fa-2x"></i><b> Contact Number</b>:<?php echo $phone; ?></label>

	<label><i class="fas fa-user fa-2x"></i><b> Gender</b>:Male</label>

	<label><i class="fas fa-address-card fa-2x"></i><b> Shipping Address</b>:No.123,Street,Country.</label>

	<label></i><b>Zip Code</b>:11111</label>

	<label><i class="fas fa-address-book fa-2x"></i><b> About Me</b>:</br>------------------------------------------------------------------------------------------------------</br>
	------------------------------------------------------------------------------------------------------</br>------------------------------------------------------------------------------------------------------</br>
	------------------------------------------------------------------------------------------------------</br>------------------------------------------------------------------------------------------------------</br>
	------------------------------------------------------------------------------------------------------
			</label>
			</font>
		
		
    </div>


    <div class="col1">

		
	<h1>Edit Profile</h1>

	<font face="arial" size="3px">
	
	<a href="editProfile.php" class="button1">Edit Profile <i class="fas fa-user-edit"></i></a>
	<br>
	<a href="CusPayment.php" class="button1">Edit Payment Details <i class="fas fa-info-circle"></i></a>
	<br>
	<a href="CuspreviousOrders.php" class="button1">Previous Orders <i class="fas fa-shopping-cart"></i></a>
	<br>
	<a href="logout.php" class="button1">Log Out <i class="fas fa-power-off"></i></a>

	</font>
			
		
   
	</div>

 
</div>


<!-----end of user profile------->

</br>

<!---shopping card end---->

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
<li class="list2"><a class="nav" href="index.php">HOME</a></li>
<li class="list2"><a class="nav" href="accessories.php">ACCESSORIES</a></li>
<li class="list2"><a class="nav" href="AboutUs.php">ABOUT US</a></li>
<li class="list2"><a class="nav" href="contactus.php">CONTACT US</a></li>
</ul>

</footer>

<!--footer End--->
	
</body>
</html>

