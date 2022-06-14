<head>
	<title>
		Register Account
	</title>
	<link rel="icon" type="image/x-icon" href="images/svgicons/favicon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
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

 <div class="container d-flex w-100 h-100 mx-auto flex-column">
 	<div class="row">
 		<div class="col-sm p-5" style="width: 75vh;">
 			<div class="card border-0 shadow-lg bg-dark" style="border-radius: 20px; height: 86vh;">
 				<div class="card-body">
 					<p class="card-test text-white">
 						<br>
 						<img src="images/logo.png" class="img-fluid mx-auto d-block" style="width: 11vh;">
	            		<br>

	            		<form action="register.php" method="post">
	            			<div class="container">

								<label for="StudentName" class="text-white form-label"><b>Student Name:</b></label>
								<input type="text" style="outline: 0;" class="form-control" placeholder="Enter Student Name" name="StudentName" required>

								<label for="StudentNumber" class="text-white form-label"><b>Student Number:</b></label>
								<input type="text" style="outline: 0;" class="form-control" placeholder="Enter Student Number" name="StudentNumber" required>

								<label for="StudentPassword" class="text-white form-label"><b>Student Password:</b></label>
								<input type="password" style="outline:0" class="form-control" placeholder="Enter Password" name="StudentPassword" required>

	            				<div class="d-flex justify-content-center pt-2">
	            				<button type="submit" class="btn btn-secondary px-5 " name="submit" value="Register">
	            					Register
	            				</button>
	            				</div>
	            				<br>

	            				<div class="d-flex justify-content-center">
		            				<p>
		            					<a href="login.php" class="link-info">Have an account already?</a>
		            				</p>
	            				</div>

	            				<?php
									if(isset($_POST['submit'])) //Include Student Name First
									{
										include ("connection.php"); //External Connection Require()

										//Addition of Record
										$a=$_POST['StudentName'];
										$b=$_POST['StudentNumber'];
										$c=$_POST['StudentPassword'];
										
										//Search record
										$search="SELECT StudentName from tbl_student where (StudentName='$a')";
										$result=mysqli_query($con,$search);
										$bilang=mysqli_num_rows($result);
										
										// Insert Record
										if ($bilang==0)
										{			
											$insert="INSERT into tbl_student (StudentName,StudentNumber,StudentPassword) values ('$a','$b','$c')";
											mysqli_query($con,$insert);
											echo '
												<div class="d-flex justify-content-center">
												<span style="color:white; text-align:center"<b>Record Saved. 
												';
										}
										else
											echo '												
												<div class="d-flex justify-content-center">
												<span style="color:white; text-align:center"<b>User already exist. 
												
											';
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