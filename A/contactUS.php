<?php
 session_start();
 
 $_SESSION['ID'] = '100';

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

table
 {
 font-weight: bold;
 background-color: rgb(196, 196, 255);  
 }

th
{
border: none;
background-color: #fff;
}

td
{
 text-align: center;
 font-size: 20px;
 border: none;
}

th.a
{
 font-size: 25px;
 text-align: center;
}

td button
{
    background-color: rgb(196, 196, 255);
    border:0;
}

td a
{
	border-radius: 8px;
    text-decoration: none;
    background-color: rgb(189, 4, 4);
    padding: 8px 8px 8px 8px;
    margin-left: 5px;
    color:#fff;
    font-size: 15px;
}

a:hover
{
    background-color:#ff0; 
    color:#000;
}

/*-------------------------------------*/
.contactUsForm input[type=text],textarea
{
padding: 12px;
width:100%;
margin-top: 6px;
margin-bottom: 16px;
border: 1 px solid #AA2697;
}

.contactUsForm  input[type=submit]
{
background-color: #4A0B41;
color: white;
padding:12px 20px;
border: none;
cursor: pointer;
}
.contactUsForm  input[type=submit]:hover
{
background-color: #FF56E7;
}
.contactUsForm
{
font-family:Arial;
border-radius: 5px;
background-color: #F4D1EF; 
padding: 10px;
}


.contactUsCol
{
padding: 20px;
float: left;
margin-top: 6px;
width: 45%;
}

.contactUsRow:after
{
content:"";
display: table;
clear: both;
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
<li class="list1"><div class="activeHome"><a class="nav" href="contactus.php">CONTACT US</a></div></li>


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

<!---------------------------------
<a href="userLogin.php.php">Sign In</a>
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
<br>
<!-----------begin contact us form------------------>

<div class="contactUsForm">
 <div style="text-align-center">
  <center>
  <i class="fas fa-phone-volume fa-2x">
   <font size="6px" face="cursive"><b>Contact us</b> </i></font
   <br>
   
	<h3>Any question about Choise?</h3>
	 </center>
	</div>
	
  <div class="contactUsRow">
		<div class="contactUsCol">
			<img src="pictures/cont3.jpg" width="600px" height="400px">
		</div>
		
	<div class="contactUsCol">
	
	<form method="POST" action="comment.php">
		<label>Username</label>
		<input Type="text" name="name" placeholder="Userame" required>
		<label>Email</label>
		<input Type="text" name="email" placeholder="Email" required>
		<label>Comment</label>
		<textarea name="des" placeholder="Comment" required style="height:170px"></textarea>
	<input type="submit" value="Submit">
	</form>
	</div>
	
   </div>
   
   <i class="fas fa-phone fa-2x"></i>
   
   <font face="cursive">
   <b>Corporate Office</b></font><br>
   <font face="arial">
	No.123,Temple Road,Colombo11,Sri Lanka.</br>
	Call:+(94)112 222 486</br>
	Hotline:+(94)778 081 081</br>
    Fax:+(94)112 222 487</br>
	info@momschoise.lk
   </font>
   
   </br>
   <i class="fas fa-phone fa-2x"></i>
   
   <font face="cursive">
   <b>Online Store</b></font><br>
   <font face="arial">
	Hotline:+(94)771 181 181</br>
	online@momschoise.lk
   </font>
   
  </div>

<!---------------end of contact us form-------------------->


<h1>Comments <i class="far fa-comments"></i></h1>

<table border = '0' width = '95%' height = '100%'>

 <th class ="a"></th>
 <th class ="a">Customer</th>
 <th class="a">Comment</th> 
 <th class="a">Delete Comment</th>

<!--------Connect to the database------------->
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

//-------- End Connect to the database-------------

 $sql = "SELECT * FROM contact";
 $result = $conn->query($sql);
 
 if($result-> num_rows > 0)
 {
 while($row = $result -> fetch_assoc())
	{
	$id = $_SESSION['ID'];
    echo "<tr><td><i class='far fa-comment fa-3x'></i><br></td>";
	echo "<td>".$row['Username']."<br>";
    echo "".$row['Email']."</td>";
    echo "<td>".$row['Description']."</td>";
	//echo"<td><button type = 'submit'><a href = 'deleteComment.php?'>Delete</a></button></td></tr>";
	echo"<td><button type = 'submit'><a href = 'deleteComment.php?id=$id'>Delete</a></button></td></tr>";
	echo "</table>";
	}
	
}
else
	{
	echo "<br>No Displaying results";
	}


?>

<!------retreve data & display from database ends----------------->


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
<li class="list2"><div class="activeHome"><a class="nav" href="contactus.php">CONTACT US</a></div></li>
</ul>

</footer>

<!--footer End--->
	
</body>
</html>
