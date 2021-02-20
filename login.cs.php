<?php 
	session_start();
	require_once "conn.php";
	
	if(isset($_POST['login']))
	{
			//getting the values from the form which user enter for login
			$email=$_POST['usrname'];
			$password=$_POST['password'];
			
			//by using mysql query checking the user credentials for authetification
			$loginquery="select email from usertbl where email='$email' && password='$password'";
			
			//executing the query
			$loginqueryRes=mysqli_query($conn, $loginquery);
			
			if( mysqli_num_rows($loginqueryRes)>0)
			{
				$loginId=mysqli_fetch_assoc($loginqueryRes);
				header("Location:sigup.php");
			}
			else
			{
				echo "login failed";
			}
			
			
	}
	
	
	
	
	
	
	



?>