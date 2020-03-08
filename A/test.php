<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: flex;

}

.col-25 {
  flex: 25%;
}

.col-75 {
  flex: 75%;
}

.col-25,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}


hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}



</style>
</head>
<body>
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

//<!--------end Connect to the database----------------->

   
?>
   
<div class="row">
  <div class="col-75">
    <div class="container">

	  
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
    $name = $row["Item_name"];
    $price = $row["Item_price"];
    $qty = $row["Quantity"];
    $des = $row["description"];
    $picName = $row["Item_Picture_Name"];
	}

	//echo"<div class='row'>"; 	

	echo "<table border = '0' width='100%' height='100%'>";
	echo "<tr><td>";
    echo"<img src='uploads/".$picName."' width='260' height='260'>";

    echo "<td><h2><left>".$name."</h2>";
    echo "<h3>Description : ".$des."</h3>";
	echo "<font face='cursive' color='#B10202' size='6px'> Price: $".$price."</font>";
	echo"<br><br><button type = 'submit'><a class='cardbutton' href ='payment.php?ItmId=$item_array_id[$i]'>SAVE</a></button>";
	//echo"<br><br><button type = 'submit'><a class='cardbutton' href ='payment.php?ItmId=$item_array_id[$i]'>Buy <i class='fas fa-dollar-sign'></i></a></button>";
	echo"<button class='cardbutton1' type = 'submit'><a class='cardbutton' href = 'removeItemCart.php?ItmId=$item_array_id[$i]'>REMOVE</a></button></td>";
	
//Increment button -------------------------------------
	echo "<td>";
	echo "<h2>Quantity</h2>";
	echo "<div class='Incr_button'>";
	echo "<button class='button plus' id='sub' onclick='add()'><i class='fas fa-plus'></i></button>";
	echo " ";
	echo "<input type='number' id='val' value =".$qty.">";
	echo " ";
	echo "<button class='button minus' id='add' onclick='sub()'><i class='fas fa-minus'></button>";
	echo "</div>";
	echo"</td></tr>";
	
//End--- Increment button -------------------------------------	
	
	echo "</table>"; 

	
   }
 }
}

        ?>
		
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$151</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  
  </div>
</div>

</body>
</html>