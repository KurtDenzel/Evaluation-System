<?php
  include 'init.php'

?>

<?php 
  $id = (int)$_GET['poll'];

  // Get General Evaluation Information
  $pollQuery = $db -> prepare ("
    SELECT id, question
    FROM tbl_poll
    WHERE id = :poll
    AND DATE(NOW()) BETWEEN starts AND ends
  ");

  $pollQuery-> execute([
    'poll' => $id
  ]);

  $poll = $pollQuery-> fetchObject();

             
  // Get the user answer for this Evaluation
  $answerQuery = $db->prepare("

    SELECT tbl_choices.id AS choice_id, tbl_choices.name AS choice_name
    FROM tbl_answers
    JOIN tbl_choices
    ON tbl_answers.choice = tbl_choices.id
    WHERE tbl_answers.user = :user
    AND tbl_answers.poll = :poll

  ");

  $answerQuery->execute([

    'user' => $_SESSION['user_id'],
    'poll' => $id

  ]);


  // Has the user completed the evaluation?
  $completed = $answerQuery->rowCount() ? true : false;


  // Testing Phase
  // echo '<pre>', print_r($answerQuery->fetchObject())  '</pre>';

  if ($completed) {
    // Get All Answers
   $answersQuery = $db->prepare("

    SELECT 
    tbl_choices.name,
    COUNT(tbl_answers.id) * 100 / (
      SELECT COUNT(*)
      FROM tbl_answers
      WHERE tbl_answers.poll = :poll ) AS percentage
    FROM tbl_choices
    LEFT JOIN tbl_answers
    ON tbl_choices.id = tbl_answers.choice
    WHERE tbl_choices.poll = :poll
    GROUP BY tbl_choices.id

    "); 


    $answersQuery->execute([

      'poll' => $id

    ]);

  // Extract Answers
  WHILE($row = $answersQuery->fetchObject()) {

    $answers[] = $row;

  }


  } else {
    // Get Evaluation Choices
    $choicesQuery = $db->prepare ("
      SELECT tbl_poll.id, tbl_choices.id AS choice_id, tbl_choices.name

      FROM tbl_poll
      JOIN tbl_choices

      ON tbl_poll.id = tbl_choices.poll
      WHERE tbl_poll.id = :poll 
      AND DATE(NOW()) BETWEEN tbl_poll.starts AND tbl_poll.ends
    ");

    $choicesQuery->execute([
      'poll' => $id
    ]);

    // print_r($choicesQuery->fetchObject());

    // Extract the Choices
    while ($row = $choicesQuery->fetchObject()){
      $choices[] = $row;
    }    
  }

  // Testing Phase
  // echo '<pre>', print_r($choices), '</pre>';
?>

<head>
  <title>
    Question | Student
  </title>
  <link rel="icon" type="image/x-icon" href="images/svgicons/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
  <link rel="stylesheet" type="text/css" href="css/styles.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>

  <style type="text/css">
    body {
      font-family: Segoe UI;
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




<section class="jumbotron jumbotron-fluid text-center px-5 text-dark img-fluid d-flex align-items-center" 
  
  style="
      height: 65vh;
      background-image: url('images/notice.png');
      background-size: cover;
      background-repeat: no-repeat; 
  ">

    <div class="container-fluid px-5">        
      <img src="images/logo.png" class="img-fluid mx-auto d-block" style="width: 15vh;">
      <h1 class="jumbotron-heading" style="font-size: 55px;color: white;">UNIVERSITY OF THE EAST</h1>
      <p class="lead text-white">University Facility Services Evluation System.</p>
    </div>
  </div>
</section>




<!-- Jumbotron -->
<div class="container-fluid p-5 px-5 " style="background-color: #9B2E2E">
  <div class="row px-5">
    <div class="d-flex justify-content-center">
    <div class="p-4 shadow-4 rounded-3" style="background-color: hsl(0, 0%, 94%); width: 150vh;">


<!-- If Completed -->
<?php if($completed): ?>
  <p>You have already completed this Evaluation, choose another question.</p>

  <ul>
    <?php foreach($answers AS $answer):  ?>
      <li><?php echo $answer->name; ?> 
      (<?php echo number_format($answer->percentage, 3); ?>%) </li>
    <?php endforeach; ?>
  </ul>  


  <button type="button"  onclick="window.location.href='questionindex.php'" class="btn btn-success w-100 px-5" name="evaluate">
      Go Back
  </button>
<?php else: ?>
  <form action="adminreport.php" method="post">
    <div class="form-group px-5 pt-5 p-3">

      <label><h4>
        <?php echo $poll->question?>
        </h4>
      </label><br>

      <hr class="my-4" />

      <!-- Looping Choices -->
      <?php foreach($choices as $index=>$choice): ?>
        <div class="form-check radio">            
          <input class="form-check-input" type="radio" name="choice" value="<?php echo $choice->choice_id ?>" id="c<?php echo $index; ?>">
          
          <label for="<?php $index; ?>" class="form-check-label">
          <?php echo $choice->name; ?>
          </label>
        </div>

      <?php endforeach; ?>


      <div class="d-flex justify-content-start py-3">
        <input type="submit" class="btn btn-success w-100 px-5 " name="next" value="Submit Vote">
        </input>
        <input type="hidden" name="poll" value="<?php echo $id ?>">
      </div>
    </form>
<?php endif; ?>    

      </div>
    </div>

</div>
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