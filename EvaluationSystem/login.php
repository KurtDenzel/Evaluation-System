<head>
	<title>
		Credential Login
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
 						<img src="images/logo.png" class="img-fluid mx-auto d-block" style="width: 11vh;">
	            		<br>

	            		<form action="login.php" method="post">
	            			<div class="container">

	            				<label for="StudentName" class="text-white"><b>Student Name:</b></label>
	            				<input type="text" style="outline: 0;" placeholder="Enter Student Name" name="StudentName" required>


	            				<label for="StudentPassword" class="text-white"><b>Student Password:</b></label>
	            				<input type="password" style="outline:0" placeholder="Enter Password" name="StudentPassword" required>

	            				<br><br>

	            				<div class="d-flex justify-content-center">
	            					<button type="submit" class="btn btn-secondary btn-block px-5 " name="submit" value="Register">
	            						Login
	            					</button>
	            				</div>
	            				<br>
	            				
	            				<div class="d-flex justify-content-center">
		            				<p>
		            					<a href="register.php" class="link-info">Don't have an account?</a>
		            				</p>
		            				<!-- Floating Action -->
		            				<br>

									
	            				</div>

	            				<div class="d-flex justify-content-center">
		            				<div class="px-4">
										<a href="adminlogin.php">
											<img src="images/svgicons/key-solid.svg" style="width: 4vh" data-bs-toggle="tooltip" title="Admin User?">
										</a>	
									</div>	
								</div>

								<script>
									var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
									var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
									  return new bootstrap.Tooltip(tooltipTriggerEl)
									})
								</script>


	            					            				

	            				<?php
									if(isset($_POST['submit'])) //Include Student Name First
									{
										include ("connection.php"); //External Connection Require()

										//Addition of Record
										$a=$_POST['StudentName'];
										$b=$_POST['StudentPassword'];

										$id = 1;
										
										//Search record
										$search="SELECT StudentName from tbl_student where 
										(StudentName='$a' and StudentPassword='$b')";
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
											header ('Location: Questionindex.php');
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