<?php 
include 'connection.php';
?>

<head>
	<title>
		Manage Students | Admin
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





 <div class="container d-flex justify-content-start pt-5 text-white">
  <button type="button" class="btn btn-success px-5">     
    <a href="admincreate.php" style="text-decoration: none; color: white;">
      Insert New Student 
    </a>
  </button>
 </div>



<!-- View / Read Data -->
<div class="container-fluid  text-white p-5 px-5 table-responsive">
  <div class="container">


    <table class="table table-striped table-hover table-bordered table-light text-center">
      <thead>
        <tr>
          <th scope="col">StudentID</th>
          <th scope="col">StudentName</th>
          <th scope="col">StudentNumber</th>
          <th scope="col">StudentPassword</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>

      <?php 

      $sql = "SELECT * FROM tbl_student";
      $result = mysqli_query($con,$sql);

      if ($result){
      	while ($row=mysqli_fetch_assoc($result)) {
    		$id=$row ['StudentID'];
    		$name=$row ['StudentName'];
    		$number = $row ['StudentNumber'];
    		$password = $row ['StudentPassword'];

      		echo ' 
      		<tr>
    	  		<th scope = "row"> ' .$id. ' </th>
    	  		<td> ' .$name. ' </td>
    	  		<td> ' .$number. ' </td>
    	  		<td> ' .$password. ' </td>
    	  		<td>
    			  	<button class="btn btn-primary">
    			  	<a href="adminupdate.php?updateid='.$id.'"
    			  	style="text-decoration: none; color: white;">
    			  		Update
    			  	</a></button>
    			  	
    			  	<button class="btn btn-danger">
    			  	<a href="admindelete.php?deleteid='.$id.'" 
    			  	style="text-decoration: none; color: white;">
    			  		Delete
    			  	</a></button>
    		  	</td>
      		</tr> 
      		';
      	}
      }

      ?>

      </tbody>

    </table>
  </div>
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