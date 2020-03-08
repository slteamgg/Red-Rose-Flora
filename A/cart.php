<?php
session_start();

//<!--------Connect to the database----------------->

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error)
{
 die("Database Connection failed " . $conn->connect_error);
}

//<!--------end Connect to the database----------------->

if(isset($_GET['RId']))
{
	$reId = $_GET['RId'];
	//echo $recordId;
	
 foreach($_SESSION['cart'] as $key=>$value)
 {
	if($value["product_id"]== $reId)
	{
		unset($_SESSION['cart'][$key]);
		echo "<script> alert('Item Removed From the Cart')</script>";
		//echo "<script>window.location='cart.php'</script>";
		
// Also remove item form db-----------------------------------------------------------------------------------------------------------
	$sql3 = "DELETE FROM cart WHERE Item_id = '$reId'";
	
	if(mysqli_query($conn, $sql3)){

		echo "<script> alert('Item Deleted successfully from db!!!!')</script>";
		echo '<script>location.href="cart.php"</script>';
	} 
	else{
        echo "<script> alert('ERROR: Could not able to execute)</script>" ;
		echo '<script>location.href="cart.php"</script>';
	}
	 
	//Close connection
	mysqli_close($conn);

	
// End remove item form db-----------------------------------------------------------------------------------------------------------
		
	}
	
 }
	
}
	
else
{
//-----------------------------------------------------
}

//session_destroy();
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
 font-family: Arial;
 }

td
{
 padding: 0px 30px 0px 0px;
 text-align:left;
 font-size: 18px;
 border: 0px;
}

td button
{
    background-color: #F3EDED;
    border:0;
}


#cart_count
{
	font-size: 26px;
	text align: center;
	padding :0 0px 0.9px 0.9px;
	border-radius:3px;
	background: #f00;
}

.Incr_button input[type=number]
{
width: 35%;
padding: 10px 10px 10px 10px;
border:1px solid #AA5A9E;
border-radius: 5px;
font-size: 20px;
}

.button
{
	background-color: #D71C1C  ;
	padding: 9px 9px;
	text-align: center;
	font-size: 20px;
	cursor: pointer;
	border-radius: 50%;
}

.plus,.minus
{
	background-color: #D71C1C ;
	color: black;
}

.plus:hover, .minus:hover
{
	background-color: #4caf50;
	color: #fff;

}

/*display item details*/

*{
box-sizing: border-box;
}

.row
{
	display: flex;
}

.col1
{
	flex: 70%;
}

.col2
{
	flex: 30%;
}

.col1 , .col2
{
	padding: 0px 5px;
}

.contain
{
	background-color:#F3EDED;
	padding: 5px 10px 10px 10px;
	border: 1px #F3EDED;
	border-radius: 5px;
	font-family: Arial;
	font-size: 20px;
}

span.price {
  float: right;
  color: grey;
}

hr
{
 border: 3px solid black;
}

/*end display item details*/

a.cardbutton
{
background-color:rgb(43, 12, 78);
border-radius: 25px;
margin:5px;
overflow: hidden;
color:white;
text-align:center;
font-size:20px;
padding: 10px 40px 10px 40px;
text-decoration: none;
}

a.cardbutton3
{
background-color:rgb(43, 12, 78);
border-radius: 25px;
margin:5px;
overflow: hidden;
color:white;
text-align:center;
font-size:30px;
padding: 5px 40px 5px 40px;
text-decoration: none;
}

a.cardbutton1
{
background-color:rgb(43, 12, 78);
border-radius: 25px;
margin: 5px;
overflow: hidden;
color:white;
text-align:center;
font-size:20px;
padding: 10px 10px 10px 10px;
text-decoration: none;
}

.Subbutton
{
background-color:rgb(43, 12, 78);
border-radius: 25px;
margin: 5px;
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

a.cardbutton1:hover , .Subbutton:hover ,a.cardbutton3:hover 
{
background-color:rgb(31, 155, 0);

.disabled
{
	opacity: 0.5;
	cursor: not-allowed;
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
<div class="activeHome">
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

<h1><center>Cart Items</center></h1>


<div class="row">
 <div class="col1">
 
	<div class="contain">
	
<?php

if(isset($_SESSION['cart']))
{
	
 $item_array_id = array_column($_SESSION['cart'],'product_id');	
 //print_r($item_array_id);		
		
 for($i = 0;$i < $count1; $i++)
 {
  //print_r($item_array_id[$i]);
  //echo "<br>";
 
 $sql = "SELECT * FROM `item` WHERE Item_id = '$item_array_id[$i]' ";

 $result = $conn->query($sql);
 
  if($result -> num_rows > 0)
  {
	
    while($row = $result -> fetch_assoc())
  	{
	$id = $row["Item_id"];
    $name = $row["Item_name"];
    $price = $row["Item_price"];
    $qty = $row["Quantity"];
    $des = $row["description"];
    $picName = $row["Item_Picture_Name"];
	}


	//echo "<form method='post' action='AddToCart.php'>";

	echo "<table border = '0' width='100%' height='100%'>";
	echo "<tr><td>";
    echo"<img src='uploads/".$picName."' width='260' height='260'></td>";

	echo "<td><h1>".$name."</h1>";
	//echo "<input type='hidden' name='name' value=".$name.">";

	echo "<h4>".$des."</h4>";
	//echo "<input type='hidden' name='des' value=".$des.">";
    //echo "<h4>".$id."</h4>";

//-------------------retreve data from db-------------------------------------------------------------------------------------------

 $sql1 = "SELECT * FROM cart WHERE Item_id='$id'";
 $result1 = $conn->query($sql1);
 
 if($result1-> num_rows > 0)
 {
 while($row = $result1 -> fetch_assoc())
	{
    $Tprice = $row['Total_Price'];
	$Nqty = $row['Quantity'];
	}
 }
else
	{
	echo '<script>alert("Error Retreving results from cart & db")</script>';
	echo '<script>location.href="cart.php"</script>';	
	}	
//-------------------end retreve data from db-------------------------------------------------------------------------------------------

	
	echo "<h2>Quantity</h2>";	
//+/-button -----------------------------------------------------------------------------------------
	echo "<div class='Incr_button'>";
	//echo "<button class='button plus' id='sub".$count2."' onclick='add(".$count2.")'><i class='fas fa-plus'></i></button>";

	echo "<form method='post' action='UpdateCart.php'>";
	echo "<input type='hidden' name='id' value='$id'>";
	echo "<input type='number' name='quantity' id='val' value ='".$Nqty."' min='1' max ='".$qty."'>";
	echo "<input type='hidden' name='price' value='$price'> ";
	echo "<input type ='Submit' name='qty' class='Subbutton' value='Change Quantity'></form>";
	echo "</form>";
	
	//echo "<button class='button minus' id='add".$count2."' onclick='sub(".$count2.")'><i class='fas fa-minus'></button>";
	
	echo "</div>";

//End +/-button -------------------------------------------------------------------------------------	

	echo "<td>";
	echo "<font face='cursive' color='#B10202' size='6px'> Price: Rs.".$Tprice."</font>";

	//echo"<br><br><button type = 'submit' name = 'submit'><a class='cardbutton1' href ='order.php'>SAVE</a></button>";
	//echo"<br><br><button type = 'submit'><a class='cardbutton' href ='payment.php?ItmId=$item_array_id[$i]'>Buy <i class='fas fa-dollar-sign'></i></a></button>";
	
	echo"<br><br><a class='cardbutton' href ='Cart.php?RId=$id'>REMOVE <i class='fas fa-trash-alt'></i></a></td>";
	echo"</tr>";

	echo "</table>"; 
	
	echo "</form>"; 
	
	echo "<hr>";
	
   }
   
   else{
	  echo "Error in data retreiveing";
   }
 }
 
 /*
		echo "<form method ='POST' action='AddToCart.php'>";
		echo "<input type='hidden' name='id' value='$id'>";
		echo "<input type='hidden' name='price' value='$price'> ";
		echo "<input type='hidden' name='qty' value='1'> ";
		echo"<input type ='Submit' name='submit' class='Subbutton' value='Add To Cart'></form>";
 */
 
 //check cart is empty--------------------------------------------------------------------
	if($count1 == 0)
	{
	 echo "<h2>Cart is Empty</h2>";
	 echo "</div>";
	 echo "</div>";
	 echo "</div>";
	 echo "</div>";
	 echo "</div>";
		}
//check cart if ends------------------------------------------------------------------------
//-------------------------------caeck cart empty else part	begins----------------
	else
	{
 
?>
	</div>
 </div>
 
	<div class="col2">
     <div class="contain">
	
	<h2>Cart-Bill<span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $count1;?></b></span></h2>

<?php

 $totalPrice = 0;

 for($i = 0;$i < $count1; $i++)
 {
  //print_r($item_array_id[$i]);
  //echo "<br>";
 
 $sql1 = "SELECT * FROM `item` WHERE Item_id = '$item_array_id[$i]' ";

 $result1 = $conn->query($sql1);
 
  if($result1 -> num_rows > 0)
  {
    while($row = $result1 -> fetch_assoc())
  	{
    $name = $row["Item_name"];
    }
	
	$sql = "SELECT * FROM cart WHERE Item_id='$item_array_id[$i]'";
	$result = $conn->query($sql);
  
	if($result-> num_rows > 0)
	{
	while($row = $result -> fetch_assoc())
	{
    $Tprice = $row['Total_Price'];

	$totalPrice = $totalPrice + $Tprice; 
	}
	
	}
	
//Display bill details---------------------------------------------------------
	echo "<p>".$name."<span class='price'>Rs.".$Tprice."</span></p>";

//EndDisplay bill details---------------------------------------------------------
  
  }
  else
  {
	echo "Error in data retreiveing";
  }
 
 }
 
//-------------------------------caeck cart empty else part	  

      echo "<hr>";
      echo "<p><font color='red'>Total</font> <span class='price' style='color:#C80202' ><b>Rs.$totalPrice</b></span></p>";
      echo "<center><br><a class='cardbutton3' href ='payment.php?'>Place Order<i class='fab fa-shopify'></i></a></center>";
	
	  echo "</div>";
	 echo "</div>";
echo "</div>";
	}

} 

else
{
	echo "<h2>Error in session</h2>";
	echo "</div>";
	//echo "</table>"; 
}  
  
  //session_destroy();

?>
 
<!--------retreve data & display from database ends----------------->

<!-----
<script>
var a;

function add(a)
{
	var no,no1,no2;
	
	no = document.getElementById("val").value;
	no2 = 1;
	no1 = parseInt(no);
	
	if(no1 > 0 && no1 < 10)
	{
	no1++;
	document.getElementById("val").value = no1;
	
	}
	else
	{

	}
}

function sub()
{
	var no,no1,no2;

	no = document.getElementById("val").value;
	no2 = 1;
	no1 = parseInt(no);
	
	if(no1 >= 2)
	{
	no1--;
	document.getElementById("val").value = no1;
	}
	else
	{
	
	}

}
</script>

----->

</br>
<hr>
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
<li class="list2"><a class="nav" href="AboutUs.php">ABOUT US</a></li>
<li class="list2"><a class="nav" href="contactus.php">CONTACT US</a></li>
</ul>

</footer>

<!--footer End--->
	
</body>
</html>