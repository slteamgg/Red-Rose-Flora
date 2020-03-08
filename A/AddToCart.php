<?php

include 'config.php';

	$id = $_POST['id'];
	$price = $_POST['price'];
	$qty = $_POST['qty'];
	
	$sql = "INSERT INTO `cart`(`Item_id`, `Quantity`, `Total_Price`) VALUES('$id', '$qty', '$price')";

	if(mysqli_query($conn,$sql))
	{
	//echo '<script>alert("Sucessfully Uploaded to db!!!")</script>';
	echo '<script>location.href="accessories.php?ItmId='.$id.'"</script>';
	} 
    else
    {
	  echo '<script>alert("Error in uploading.Item Already Saved in db")</script>';        
	  echo '<script>location.href="accessories.php?ItmId='.$id.'"</script>';
    }
	
?>