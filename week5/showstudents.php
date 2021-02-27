<?php
include_once "conn.php";

include_once "deluser.php";

?>
<!DOTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
	<title>Show Data</title>
	
</head>
<body>
<?php
<include_once "header.php";

?>

 <div class="container-fluid" id="container" style="background-color:ghostwhite; height:590px;">
 <div class="row" id="row" style="margin-top:0px;">
 
 <div class="col-md-12">
 <h1 id="h1" style="margin-left:150px;"><center>Applicant Data<center></h1>
 <table class="table">
    	<tr>
        	<th>ID</th>
            
			<th>Name</th>
            
			<th>FName</th>
            
			<th>Image</th>
			
			<th>DOB</th>
            
			<th>Gender</th>
			
			<th>CNIC</th>
			
			<th>Email</th>
			
			<th>Phone</th>
			
			<th>City</th>
			
			<th>Postal Address</th>
			
			<th>Permanent address</th>
			
			<th>Program</th>
			
			<th>Matric</th>
			
			<th>Roll no</th>
			
			<th>Inter</th>
			
			<th>Roll no</th>
			
			<th colspan="2">Action</th>
        </tr>
        
        <?php
		
			$showdata="select * from user";
			$res=mysqli_query($conn, $showdata);
			while($row=mysqli_fetch_assoc($res)){
				
		
		 ?>
        
        <tr>
        	<td><?php echo $row['studentid']; ?></td>
            
			<td><?php echo $row['studentname']; ?></td>
            
			<td><?php echo $row['fathername']; ?></td>
            
			<td><?php echo $row['studentimage']; ?></td>
            
			<td><?php echo $row['dob']; ?></td>
			
			<td><?php echo $row['gender']; ?></td>
			
			<td><?php echo $row['cnic']; ?></td>
			
			<td><?php echo $row['email']; ?></td>
			
			<td><?php echo $row['phone']; ?></td>
			
			<td><?php echo $row['city']; ?></td>
			
			<td><?php echo $row['postal address']; ?></td>
			
			<td><?php echo $row['permanent address']; ?></td>
			
			<td><?php echo $row['program']; ?></td>
			
			<td><?php echo $row['matricmarks']; ?></td>
			
			<td><?php echo $row['matricrollno']; ?></td>
			
			<td><?php echo $row['intermarks']; ?></td>
			
			<td><?php echo $row['interrollno']; ?></td>
			
			
			<td> 
				<form action="adminusercredentials.php" method="post">
				<input type="submit" name="delete" value="DELETE">
				<input type="hidden" value="<?php echo $row['studentid'];?>" name="delID">
				</form>
					
			</td>
			<td> 
				<form action="adminusercredentials.php" method="post">
				<input type="submit" name="update" value="UPDATE">
				<input type="hidden" value="<?php echo $row['studentid'];?>" name="updateID">
				</form>
					
			</td>
        </tr>
        <?php } ?>
    </table>
	</div>
	</div>
	</div>
</body>
</html>