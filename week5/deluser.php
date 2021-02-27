<?php
include_once "conn.php";
// to delete the data of specific user from database
if(isset($_POST['delete']))
{
	$sid=$_POST['delID'];
	$delQuery="Delete from user where studentid=$sid";
	$delRES=mysqli_query($conn,$delQuery);
	if($delRES)
	{
		echo " Data deleted";
		
	}
	else
	{
		echo " Data not deleted";
	}
	
}

?>