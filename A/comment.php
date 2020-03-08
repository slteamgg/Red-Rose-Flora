<?php
 session_start();
 
//upload details

include 'config.php';

//if(isset($_POST['upload']))

$id = $_SESSION['ID'];
$name = $_POST["name"];
$email = $_POST["email"];
$des = $_POST["des"];

$sql = "INSERT INTO `contact`(`UserId`, `Username`, `Email`, `Description`) VALUES('$id','$name', '$email', '$des')"; 
 
if(mysqli_query($conn,$sql))
{
 echo "<script> alert('Sucessfully added Comment !!')</script>";
 echo '<script>location.href="contactUS.php"</script>';
}

else
{
echo "<script> alert('Error:could not able to execute')</script>";
echo '<script>location.href="contactUS.php"</script>';
}

//}

?>