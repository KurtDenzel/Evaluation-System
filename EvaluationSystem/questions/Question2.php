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

  // Testing Phase
  // echo '<pre>', print_r($choices), '</pre>';
?>

<head>
  <title>
    Question 1
  </title>
  <link rel="icon" type="image/x-icon" href="../images/svgicons/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../js/bootstrap.min.js">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>

  <style type="text/css">
    body {
      font-family: Segoe UI;
    }
  </style>


</head>

<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center p-2" style="padding-left: 25px; padding-right: 25px;"> 
    <ul class="navbar-nav">

      <li>
      <a class="navbar-brand" href="#" >
          <img src="../images/svgicons/favicon.png" alt="Avatar Logo" width="63vh" class="d-inline-block  align-top" style="padding-left: 15px;">                       
        </a> 
      </li>

      <li class="nav-item p-1 text-center">
        <b>
          <a class="nav-link active p-2" href="#">Dashboard</a>
        </b>
      </li>

      <li class="nav-item p-1 text-center">
        <b>
          <a class="nav-link active p-2" href="#">Evaluation Reports</a>
        </b>
      </li>      
      

      <li class="nav-item p-1 text-center">
        <b>
          <a class="nav-link p-2" href="../login.php">
            <span><img src="../images/svgicons/right-from-bracket-solid.svg" style="width: 5vh" class="px-2"></span>
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
      height: 75vh;
      background-image: url('../images/notice.png');
      background-size: cover;
      background-repeat: no-repeat; 
  ">

    <div class="container-fluid px-5">        
      <img src="../images/logo.png" class="img-fluid mx-auto d-block" style="width: 15vh;">
      <h1 class="jumbotron-heading" style="font-size: 55px;color: white;">UNIVERSITY OF THE EAST</h1>
      <p class="lead text-white">University Facility Services Evluation System.</p>
    </div>
  </div>
</section>


<div class="container-fluid d-flex p-5 px-5" style="background-color:#9B2E2E;">
  <div class="container-fluid px-5 text-white">
    <p>As part of Varchar's commitment on this program, we request your participation in evaluating the University Facility Services.</p>

    <ul>
      <li>This evaluation is CONFIDENTIAL. There is NO WAY that the facility services can trace the identity of the rater.</li>
      <li>The results of this evaluation will be used by the Management to formulate strategies for continuing improvement of its services.</li>
    </ul>

    <p><b>Directions:</b> Using the descriptive rating and scale below, click the appropriate grade that reflects the university facility services performance as indicated by each statement.</p>

    <p>The highest possible rating is 1 and the lowest rating is 5. Please take note of the descriptive rating such as Outstanding, Very Good, Good, Fair and Poor and their corresponding values.</p>
  </div>
</div>


<div class="container-fluid d-flex px-5 pb-5" style="background-color: #9B2E2E">
  <div class="container-fluid px-5 pb-3 text-white">
    <table class="table table-striped table-hover table-borderless text-center table-light">
      <thead>
        <tr>
          <th scope="col">Outstanding</th>
          <th scope="col">Very Good</th>
          <th scope="col">Good</th>
          <th scope="col">Fair</th>
          <th scope="col">Poor</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
          <td>4</td>
          <td>5</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>




<!-- Jumbotron -->
<!-- Question 01 -->

<div class="container-fluid p-5 px-5" style="background-color: #9B2E2E">
  <div class="row px-5">
<div class="p-4 shadow-4 rounded-3" style="background-color: hsl(0, 0%, 94%);">





    <form action="Question1.php" method="post" id="poll_form">
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




        <div class="d-flex justify-content-end">
          <input type="submit" class="btn btn-success px-5 " name="next" value="Next Question">
          </input>
          <input type="hidden" name="poll" value="<?php echo $id ?>">
        </div>

        <?php
          if(isset($_POST['next']))
          {
            $secondid = 2;
            header ('Location: Question2.php?poll='.$secondid.'');
          }
        ?>
      </div>
</div>
</div>
</div>




<!-- Footer -->
<footer class="page-footer font-small blue bg-dark text-white">
  <div class="footer-copyright text-center py-3">
      © 2022 VarChar Gang. All Rights Reserved.
  </div>
</footer>


</body>
</html>