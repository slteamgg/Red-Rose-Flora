<?php
/*
session_start();

//----------add sessions--------------------------
if(isset($_SESSION["user"]))
{
	echo "<script>location.href='home.php'</script>";
	
}

else
{
	*/
//-----------------------connect db------------------------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";


$conn = new mysqli($servername, $username, $password,$dbname);


	if ($conn->connect_error)
	{
	die("Database Connection failed " . $conn->connect_error);
	}

//----------------------------------------------------------------

$un = $_POST["username"];
$pwd = $_POST["password"];


$sql = "SELECT `Username`, `Password` FROM `user` WHERE Username='$un' AND Password='$pwd'";       

$result_set = mysqli_query($conn,$sql);

		if($result_set)
		{
		//query succesfull
		if(mysqli_num_rows($result_set) == 1)
		{
		//$_SESSION["user"]= $un;
		//$_SESSION['last_login_timestamp'] = time();
		
		echo "<script>location.href='index.php'</script>";
		//include('main.php');
		
		//valid user found
			//$user = mysqli_fetch_assoc($result_set);
			//echo $user;
		//redirect to users.php
		//header('Location: main.php');
			
		}
		else
		{
		//user name and password invalid
			echo '<script>alert("Error:Invalid UN or PWD.plese re enter UN and PWD.Please re enter.")</script>';
			echo '<script>location.href="userLogin.php"</script>';
		}		
		}
		else
		{
			echo "<script>location.href='userLogin.php'</script>";
		}
		

?>
