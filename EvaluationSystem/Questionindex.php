<?php
  include 'init.php'
?>

<head>
  <title>
    Question Index
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


<div class="container-fluid d-flex p-5 px-5" style="background-color:#9B2E2E;">
  <div class="container-fluid px-5 text-white">
    <p>As part of Varchar's commitment on this program, we request your participation in evaluating the University Facility Services.</p>

    <ul>
      <li>This evaluation is CONFIDENTIAL. There is NO WAY that the facility services can trace the identity of the rater.</li>
      <li>The results of this evaluation will be used by the Management to formulate strategies for continuing improvement of its services.</li>
    </ul>

    <p><b>Directions:</b> Using the descriptive rating and scale below, click the appropriate grade that reflects the university facility services performance as indicated by each statement.</p>

    <p>The highest possible rating is 5 and the lowest rating is 1. Please take note of the descriptive rating such as Outstanding, Very Good, Good, Fair and Poor and their corresponding values.</p>
  </div>
</div>


<div class="container-fluid d-flex px-5 pb-3" style="background-color: #9B2E2E">
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
          <td>5</td>
          <td>4</td>
          <td>3</td>
          <td>2</td>
          <td>1</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>



<div class="container-fluid pt-3 pb-5 d-flex" style="background-color: #9B2E2E">
  <div class="row justify-content-center px-5">

    <div class="col-sm p-5">

      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">1. How do you rate the condition and appearance of your building's interior?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=1" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>


    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">2. How do you rate the condition and appearance of your building's exterior?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=2" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>


    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">3. How do you rate the timeliness of maintenance repairs?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=3" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>    




    <!-- Second Row -->
    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">4. How do you rate the professionalism and expertise of maintenance personnel?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=4" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>    



    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">5. How do you rate the attitude, courtesy and appearance of maintenance personnel?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=5" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>    



    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">6. How do you rate the attitude, professionalism and courtesy of administrative personnel?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=6" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>   



    <!-- Third Row -->          
    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">7. How do you rate the timeliness & professionalism of administrative response to customer inquiries?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=7" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>          


    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">8. How do you rate the appearance and cleanliness of the  College's lawns, landscaping and walkways?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=8" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>              


    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">9. How do you rate the attitude, professionalism and courtesy of the Facilities Maintenance help desk?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=9" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>   


    <!-- Fourth Row -->
    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">10. How do you rate your familiarity with and user-friendliness of Facilities in the University?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=10" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>       



    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">11. How do you rate the other information available on the Facilities Management website?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=11" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>   



    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">12. How do you rate the appearance & cleanliness of the office areas, classrooms, common areas, & restrooms in your facility?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=12" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>           



    <!-- Fifth Row -->
    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">13. How do you rate the condition and adequacy of indoor lighting and electrical systems within your building?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=13" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>     


    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">14. How do you rate the lighting conditions for all outdoor areas around your facility?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=14" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
        </div>
      </div>

    </div>      


    <div class="col-sm p-5">
      
      <div class="card px-3 py-3">
        <div class="card-body">
          <h5 class="card-title">15. How do you rate your familiarity with, user-friendliness & effectiveness of Facilities Management's recycling program?</h5>
          <hr class="my-4" />
          <button type="button" class="btn btn-success w-100 px-5" name="evaluate">
            <a href="Question.php?poll=15" style="color: white; text-decoration: none;">
              Evaluate
            </a>
          </button>
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