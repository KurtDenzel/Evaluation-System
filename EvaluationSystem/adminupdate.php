<?php 
	include 'connection.php';
	$id=$_GET['updateid'];
	$sql = "SELECT * FROM tbl_student WHERE StudentID=$id";
	$result=mysqli_query($con, $sql);
	$row=mysqli_fetch_assoc($result);

	$name=$row ['StudentName'];
  $number = $row ['StudentNumber'];
  $password = $row ['StudentPassword'];	

	if (isset($_POST['save'])) {

		$StudName = $_POST['StudentName'];
		$StudNum = $_POST['StudentNumber'];
		$StudPass = $_POST['StudentPassword'];													

		$sql = "UPDATE tbl_student SET StudentID = $id, 
		StudentName = '$StudName',
		StudentNumber = '$StudNum', 
		StudentPassword = '$StudPass' 
		WHERE StudentID=$id";

		$result = mysqli_query($con,$sql);

		if ($result){
			header('Location: admindisplay.php');
			// echo "Deleted Succesfullly.";
		}else {
			echo "Data not inserted";
		}
	}											
?>	

<head>
	<title>
		Admin Update
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

<nav class="navbar navbar-expand-sm bg-dark navbar-dark text-center p-1 justify-content-center" style="padding-left: 25px; padding-right: 25px;"> 
  <ul class="navbar-nav">


    <li class="nav-item p-2">
      <b>
        <a class="nav-link active p-2" href="admindisplay.php">
        <span><img src="images/svgicons/manage.svg" style="width: 7vh" class="px-2"></span> 
        Manage Students
        </a>
      </b>
    </li>    

    <li class="nav-item p-2">
      <b>
        <a class="nav-link p-2" href="login.php">
          <span><img src="images/svgicons/right-from-bracket-solid.svg" style="width: 6vh" class="px-2"></span>
          Logout
        </a>
      </b>
    </li>

    </ul>
  </li>      
  </ul>
</nav>

<div class="container-fluid p-5">
	<form method="post" class="row px-5 py-4 mx-5">
		<div class="container bg-dark p-5" style="border-radius: 15px">

			<label for="StudentName" class="text-white form-label"><b>Student Name:</b></label>
			<input type="text" style="outline: 0;" class="form-control" placeholder="Enter Student Name" name="StudentName" value="<?php echo $name; ?>" required>

			<label for="StudentNumber" class="text-white form-label"><b>Student Number:</b></label>
			<input type="text" style="outline: 0;" class="form-control" placeholder="Enter Student Number" name="StudentNumber" value="<?php echo $number; ?>" required>

			<label for="StudentPassword" class="text-white form-label"><b>Student Password:</b></label>
			<input type="password" style="outline:0" class="form-control" placeholder="Enter Password" name="StudentPassword" value="<?php echo $password; ?>" required>


			<div class="d-flex justify-content-start">
			<button type="submit" class="btn btn-success px-5 " name="save" value="Save">
				Update
			</button>
			</div>

		</div>

	</form>
</div>	

<!-- Footer -->
<footer class="bg-dark text-center text-white">  
  <!-- Copyright -->
  <div class="text-center py-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2022 VarChar Gang: All Rights Reserved.
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</body>
</html>
