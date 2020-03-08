<?php

include 'config.php';

	$id = $_POST['id'];
	$qty = $_POST['quantity'];
	$price = $_POST['price'];
	
	$total = 0;
	$total = $qty * $price;
	
	$sql = "UPDATE `cart` SET `Quantity`='$qty',`Total_Price`='$total' WHERE Item_id='$id' ";

	if(mysqli_query($conn,$sql))
	{
	//echo '<script>alert("Sucessfully Updated the qty!!!")</script>';
	echo '<script>location.href="cart.php"</script>';
	} 
    else
    {
	  echo '<script>alert("Error in updating qty")</script>';        
	  echo '<script>location.href="cart.php"</script>';
    }
	
?>