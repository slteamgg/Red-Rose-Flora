
<!DOCTYPE HTML>
<html>
<head>
<title>Red Rose Flora</title>

<link rel="icon" href="pictures/logo.jpg">

<link rel="stylesheet" type="text/css" href="styles/Home.css">

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
	
table
 {
 font-weight: bold;
 background-color: rgb(196, 196, 255);  
 margin-top: 15px;
 margin-bottom: 10px;
 margin-left: 10px;
 margin-right: 10px;
 border-style: groove;
 border-color: blue;
 padding: 3px;
 }

th
{
border: 4px solid blue;
}

td
{
 text-align: center;
 font-size: 20px;
 border: 2px solid blue;
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
    text-decoration: none;
    background-color: rgb(189, 4, 4);
    padding: 10px 25px;
    margin-left: 5px;
    color:#fff;
    font-size: 15px;
}

a:hover
{
    background-color:#ff0; 
    color:#000;
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
<li class="list1"><a class="nav" href="addItem.php">ADD PRODUCT</a></li>
<li class="list1"><div class="activeHome"><a class="nav" href="displayItem.php">UPDATE PRODUCT DETAILS</a></div></li>
<li class="list1"><a class="nav" href="report.php">SALES REPORT</a></li>

</ul>

<!---Sub Menue(Cart,Profile and Search-bar)--->
<div class="Text1">
<a class="Text2" href="logout.php"><i class="fas fa-sign-out-alt fa-2x"></i></a>
</div>

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

<h1><center>Stored Items</center></h1>


<!--Display Item Details begin--->


<table border = '4' width = '95%' height = '100%'>

 <th class ="a">Item_Id</th>
 <th class="a">Item Name</th>
 <th class="a">Item Price</th>
 <th class="a">Quantity</th>
 <th class="a">Description</th>
 <th class = "a">Item Picture</th>
 <th class = "a">Edit</th>
 <th class = "a">Delete</th>


<!--------Connect to the database----------------->
<?php

include_once 'config.php';

 $sql = "SELECT * FROM item";
 $result = $conn->query($sql);
 
 if($result-> num_rows > 0)
 {
 while($row = $result -> fetch_assoc())
	{
    $id = $row['Item_id'];
	echo "<tr><td>".$row['Item_id']."</td>";
    echo "<td>".$row['Item_name']."</td>";
    echo "<td>".$row['Item_price']."</td>";
    echo "<td>".$row['Quantity']."</td>";
    echo "<td>".$row['description']."</td>";

    echo "<td>";
    echo"<img src='uploads/".$row['Item_Picture_Name']."' width='100' height='50'>";
    echo "</td>";	

	echo"<td><button type = 'submit'><a href ='editItem.php?ItmId=$id'>Edit</a></button></td>";
	echo"<td><button type = 'submit'><a href = 'deleteItem.php?ItmId=$id'>Delete</a></button></td></tr>";
	}
	
}
else
	{
	echo "Error Displaying results";
	}
echo "</table>";

?>

<!--------retreve data & display from database ends----------------->



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
<li class="list1"><a class="nav" href="addItem.php">ADD PRODUCT</a></li>
<li class="list1"><div class="activeHome"><a class="nav" href="displayItem.php">UPDATE PRODUCT DETAILS</a></div></li>
<li class="list1"><a class="nav" href="report.php">SALES REPORT</a></li>

</ul>

</footer>

<!--footer End--->
	
</body>
</html>

