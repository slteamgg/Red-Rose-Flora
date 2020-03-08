<!----Connect to the database---->

<?php
include_once 'config.php';

	$recordId = $_GET['id'];
    
    
	$sql = "DELETE FROM contact WHERE UserId = '$recordId'";
	
	if(mysqli_query($conn, $sql))
	{
		echo "<script> alert('Records Deleted successfully!!!!')</script>";
		echo '<script>location.href="contactUS.php"</script>';
	} 
	else
	{
		echo "<script> alert('Error:could not able to execute')</script>";
		echo '<script>location.href="contactUS.php"</script>';
	}
	 
	//Close connection
	mysqli_close($conn);

?>