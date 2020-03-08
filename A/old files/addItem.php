<!DOCTYPE HTML>
<html>
<head>
<title>Red Rose Flora</title>

<link rel="icon" href="pictures/logo.jpg">

<link rel="stylesheet" type="text/css" href="styles/home.css">

<link rel="stylesheet" type="text/css" href="styles/AdminaddItem.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

<style>
#theme1
	{
	background: url(pictures/flo3.jpg);
	}

#footer1
	{
	background: url(pictures/theme2.jpg);
	}

	.checked
	{
		color:rgba(255, 187, 0, 0.801);
	}

</style>

</head>

<body>

<div id = "theme1">
<center>
<img src="pictures/logo1.png" width="350" height="80"></center>
</div>

<hr>

<!--Start of menue bar-->
<!--Main Menue bar-->

<div class="nav1">
<ul class="nav2">
<li class="list1"><a class="nav" href="main.php">HOME</a></li>

<li class="list1"><div class="activeHome"><a class="nav" href="addItem.php">ADD PRODUCT</a></div></li>
<li class="list1"><a class="nav" href="displayItem.php">UPDATE PRODUCT DETAILS</a></li>
<li class="list1"><a class="nav" href="report.php">SALES REPORT</a></li>

</ul>

<!---Sub Menue(Cart,Profile and Search-bar)--->

<div class="cart">

<a class="cart1" href="cart.html"><i class="fas fa-shopping-cart fa-2x"></i></a>

</div>

<div class="profile">

<div class= "dropboxprof">

<div class="profile1"><i class="fas fa-user-circle fa-2x"></i></div>

<div class = "droplistprof">

<a href="userprofile.php">View Profile</a>
<a href="logout.php">Log Out</a>

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


<!--From begin--->
<div class="row1">

<div class="form1">
    
    <div class="form2">

    <b><center><font size="10px">Add Item</font></center></b>

  <form method="POST" action="uploadItemDetails.php" enctype="multipart/form-data">
    
    <font size="6px">Item ID </font><i class="fas fa-passport fa-2x"></i>
    <input type="text" name="id"  placeholder="id" required>

    <font size="6px">Item Name </font><i class="fas fa-file-signature fa-2x"></i>
    <input type="text" name="name" placeholder="name"required>

    <font size="6px">Item Price </font><i class="fas fa-dollar-sign fa-2x"></i></i>
    <input type="text" name="price" placeholder="price" required>

    <font size="6px">Item Quantity </font><i class="far fa-arrow-alt-circle-down fa-2x"></i>
    <input type="text" name="qty" placeholder="quantity" required>
    
  <font size="6px">Item Description</font>
  <input type="text" name="des" placeholder="Description" required>
   
  
  <b><center><font size="6px">Upload Item Image</font></center></b>
  <input type="file" name="image" class="button1" required>
    
  <input type="submit" name="upload" value="Upload Details" class="button1">
    
  </form>

</div>
</div>

</div>

<!--Form ends--->

<hr>
<marquee><b><font color="#f00">Red Rose Flora</font></marquee>
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
<li class="list2"><a class="nav" href="main.php">HOME</a></li>
<li class="list2"><div class="activeHome"><a class="nav" href="addItem.php">ADD PRODUCT</a></div></li>
<li class="list1"><a class="nav" href="displayItem.php">UPDATE PRODUCT DETAILS</a></li>
<li class="list1"><a class="nav" href="report.php">SALES REPORT</a></li>

</ul>

</footer>

<!--footer End--->
	
</body>
</html>
