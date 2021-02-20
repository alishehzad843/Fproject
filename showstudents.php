<?php
include_once "conn.php";


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

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="logo.png"><image style="height:50px; width:50px;"  src="logo.png"/></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="showstudents.php">Applicants</a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="adduser.php">Add user</a>
      </li>
	  
	  
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



 <div class="container-fluid" style="background-color:ghostwhite; height:590px;">
 <div class="row" style="margin-top:0px;">
 
 <div class="col-md-12">
 <h1 style="margin-left:150px;"><center>Applicant Data<center></h1>
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