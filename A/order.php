<?php

Include_once 'config.php';

if(isset($_POST['submit']))
{
$id = $_POST['Itemid'];
$price = $_POST['Itemprice'];
$qty = $_POST['qty'];

/*
$imagefiletype = strtolower(pathinfo($target,PATHINFO_EXTENSION));

//check file type
if($imagefiletype != "jpg" && $imagefiletype != "jpeg" && $imagefiletype != "gif" && $imagefiletype != "png")
{
    echo "<script> alert('Sorry:Only JPG,JPEG,PNG,GIF are Allowed')</script>";
	echo '<script>location.href="addItem.php"</script>';
    $uploadOk = 0;
}

//check file already exsist
if(file_exists($target))
{
    echo "<script> alert('Error:File Already Exsist')</script>";
	echo '<script>location.href="addItem.php"</script>';
    $uploadOk = 0;
}

//upload file
if($uploadOk == 1)
{
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target ))
    {
    
    $sql = "INSERT INTO `item`(`Item_id`, `Item_name`, `Item_price`, `Quantity`, `description`, `Item_Picture_Name`) 
	VALUES('$id','$name','$price','$qty','$des','$image')";

    mysqli_query($conn,$sql);

    //echo "<script> alert('Image Uploaded Sucessfully!!')</script>"; 
	echo '<script>alert("Sucessfully Uploaded !!!")</script>';
	echo '<script>location.href="main.php"</script>';
	//header('Location: main.php');
    }

    else
    {
    echo "<script> alert('Error:could not able to execute')</script>";
	echo '<script>location.href="addItem.php"</script>';
    }

}

else
{
echo "<script> alert('Error uploading')</script>";
echo '<script>location.href="addItem.php"</script>';
}

}
*/
?>