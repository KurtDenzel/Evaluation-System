<?php 
	include 'connection.php';

	if (isset($_GET['deleteid'])) {
		$id= $_GET['deleteid'];

		$sql = "DELETE FROM tbl_student WHERE StudentID=$id";
		$result = mysqli_query ($con, $sql);

		if ($result) {
			header('Location: admindisplay.php');
			// echo "Deleted Succesfullly.";
		}else {
			die(mysqli_error($con));
		}
	}
?>