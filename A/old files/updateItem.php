<?php
include_once 'config.php';

//--------------------get image id & data--------------------------

if(isset($_POST['upload']))
{
$target = "uploads/".basename($_FILES['image']['name']);
$uploadOk = 1;

$image = $_FILES['image']['name'];

//--------------------get image id--------------------------

$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$quantity = $_POST["qty"];
$des = $_POST["des"];

$imagefiletype = strtolower(pathinfo($target,PATHINFO_EXTENSION));

//check file type
if($imagefiletype != "jpg" && $imagefiletype != "jpeg" && $imagefiletype != "gif" && $imagefiletype != "png")
{
    echo "<script> alert('Sorry !! Only JPG,JPEG,PNG,GIF are Allowed')</script>";
	echo '<script>location.href="displayItem.php"</script>';
    $uploadOk = 0;
}

//check file already exsist
if(file_exists($target))
{
    echo "<script> alert('Error Uploading File Already Exsist')</script>";
	echo '<script>location.href="displayItem.php"</script>';
    $uploadOk = 0;
}

//upload file
if($uploadOk == 1)
{
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target ))
    {

   //--------------------update records-------------------------- 

    $sql = "UPDATE `item` SET `Item_name`='$name',`Item_price`='$price',
    `Quantity`='$quantity',`description`='$des',`Item_Picture_Name`='$image' WHERE Item_id='$id' ";
        

    mysqli_query($conn,$sql);

    //echo "<script> alert('Updated Sucessfully!!')</script>";
	echo '<script>alert("Sucessfully Updated !!!")</script>';
	echo '<script>location.href="main.php"</script>';	
    //header("Location:main.php");
    }

    else
    {
    echo "<script> alert('Error:could not able to Update')</script>";
	echo '<script>location.href="displayItem.php"</script>';
    }

}

else
{
echo "<script> alert('Error updating and uploading')</script>";
echo '<script>location.href="displayItem.php"</script>';

}

}

mysqli_close($conn);

?>






