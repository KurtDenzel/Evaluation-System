<?php 
include 'init.php';

// Insert Data
if (isset($_POST['poll'], $_POST['choice'])) {

  $poll = $_POST['poll'];
  $choice = $_POST['choice'];

  $voteQuery = $db->prepare("
    INSERT INTO tbl_answers (user, poll, choice)
      SELECT :user, :poll, :choice
      FROM tbl_poll

      WHERE EXISTS (
        SELECT id
        FROM tbl_poll 
        WHERE id = :poll
        AND DATE(NOW( )) BETWEEN starts AND ends
      )

      AND EXISTS (
        SELECT id
        FROM tbl_choices
        WHERE id = :choice
        AND poll = :poll
      )

      AND NOT EXISTS (
          SELECT id
          FROM tbl_answers
          WHERE user = :user
          AND poll = :poll
        )
      
      LIMIT 1
  ");

  $voteQuery->execute([
    'user' => $_SESSION['user_id'],
    'poll' => $poll,
    'choice' => $choice 
  ]);

  header('Location: questionindex.php?poll='.$poll.'');
}



?>

<head>
	<title>
		Evaluation Report | Student
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
        <a class="nav-link active p-2" href="#">
        <span><img src="images/svgicons/evaluate.svg" style="width: 6vh" class="px-2"></span>          
        Evaluation</a>
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


<!-- View / Read Data -->
<div class="container-fluid  text-white p-5 px-5 table-responsive">

 </div>


</div>

</body>
</html>