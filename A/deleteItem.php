<!----Connect to the database---->

<?php
include_once 'config.php';

	$recordId = $_GET['ItmId'];
    
	$sql = "SELECT * FROM item WHERE Item_id = '$recordId'";
	$result = $conn->query($sql);
 
	while($row = $result -> fetch_assoc())
	{
	$picName = $row['Item_Picture_Name'];
	}
	
    
	$sql1 = "DELETE FROM item WHERE Item_id = '$recordId'";
	
	if(mysqli_query($conn, $sql1)){
		unlink("uploads/$picName");
		echo "<script> alert('Records Deleted successfully!!!!')</script>";
		echo '<script>location.href="displayItem.php"</script>';
	} 
	else{
        echo "<script> alert('ERROR: Could not able to execute)</script>" ;
	}
	 
	//Close connection
	mysqli_close($conn);

?>