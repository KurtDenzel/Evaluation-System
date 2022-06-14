<head>
	<title>
		Administrator Login
	</title>
	<link rel="icon" type="image/x-icon" href="images/svgicons/favicon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


	<link rel="stylesheet" type="text/css" href="css/styles.css">



	<style type="text/css">
		body {
			font-family: Segoe UI;
			background-image: url('images/credentials.jpg');
    		background-size: cover;
    		background-repeat: no-repeat;  
		}
	</style>


</head>

<body>


 <div class="container d-flex w-100 h-100 mx-auto flex-column py-5">
 	<div class="row">
 		<div class="col-sm p-5" style="width: 75vh;">

 			<div class="card border-0 shadow-lg bg-dark" style="border-radius: 20px; height: 75vh;">

 				<div class="card-body">
 					<p class="card-test text-white">
 						<br>
 						<img src="images/logo.png" class="img-fluid mx-auto d-block" style="width: 12vh;">
	            		<br>

	            		<form action="adminlogin.php" method="post">
	            			<div class="container">

	            				<label for="AdminName" class="text-white form-label">
	            					<b>Admin Name:</b></label>
	            				<input type="text" style="outline: 0;" class="form-control"  placeholder="Enter Admin Name" name="AdminName" required>


	            				<label for="AdminPassword" class="text-white form-label">
	            					<b>Admin Password:</b></label>
	            				<input type="password" style="outline:0" class="form-control" placeholder="Enter Password" name="AdminPassword" required>


	            				<div class="d-flex justify-content-center py-4">
	            				<button type="submit" class="btn btn-secondary px-5 " name="submit" value="Register">
	            					Login
	            				</button>
	            				</div>
	            				
	            				<div class="d-flex justify-content-center">
		            				<p>
		            					<a href="login.php" class="link-info">Go Back</a>
		            				</p>
	            				</div>


	            					            				

	            				<?php
									if(isset($_POST['submit'])) //Include Student Name First
									{
										include ("connection.php"); //External Connection Require()

										//Addition of Record
										$a=$_POST['AdminName'];
										$b=$_POST['AdminPassword'];
										
										//Search record
										$search="SELECT AdminName from tbl_admin where 
										(AdminName='$a' and AdminPassword='$b')";
										$result=mysqli_query($con,$search);
										$bilang=mysqli_num_rows($result);
										
										// Location Evaluation
										if ($bilang==0)
										{															
											echo '
												<div class="d-flex justify-content-center">
												<span style="color:white; text-align:center"<b>
												Name and Password are inccorect. 
												';
										}
										else
											header ("Location:admindisplay.php");
									}
								?>	
	            			</div>
	            		</form>	            	
 					</p>
 				</div> 			
 			</div> 			 			
 		</div>		 		
				
 	</div>
 </div>


</body>
</html>