<head>
  <title>
    Dashboard
  </title>
  <link rel="icon" type="image/x-icon" href="images/svgicons/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
  <link rel="stylesheet" type="text/css" href="css/styles.css">

  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>

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
          <img src="images/svgicons/favicon.png" alt="Avatar Logo" width="63vh" class="d-inline-block  align-top" style="padding-left: 15px;">                       
        </a> 
      </li>

      <li class="nav-item p-1 text-center">
        <b>
          <a class="nav-link active p-2" href="#">Dashboard</a>
        </b>
      </li>

      <li class="nav-item p-1 text-center">
        <b>
          <a class="nav-link p-2" href="login.php">
            <span><img src="images/svgicons/right-from-bracket-solid.svg" style="width: 5vh" class="px-2"></span>
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


<div class="container-fluid d-flex p-5" style="background-color:#9B2E2E ;">
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
  <div class="container-fluid px-5 pb-3 text-white table-responsive">
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
<div class="p-4 shadow-4 rounded-3" style="background-color: hsl(0, 0%, 94%);">
    <form action="evaluation.php" method="post">
      <div class="form-group px-5 pt-5 pb-5">

       
        <label for="exampleFormControlTextarea1"><h4>
          1.  How do you rate the condition and appearance of your building's interior?
        </h4>
        </label><br>

        <hr class="my-4" />

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>
      </div>
</div>
<!-- Jumbotron -->
</div>


<div class="container-fluid d-flex px-5 pb-5 justify-content-center" style="background-color: #9B2E2E; text-align: justify;">
  <div class="container-fluid px-5 text-white">    
    <form action="evaluation.php" method="post">
      <div class="form-group px-5">

       <!-- Question 01 -->
        <label for="exampleFormControlTextarea1">
          1.  How do you rate the condition and appearance of your building's interior?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


       <!-- Question 02 -->
        <label for="exampleFormControlTextarea2">
          2.  How do you rate the condition and appearance of your building's exterior?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
          <label class="form-check-label" for="inlineRadio2">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>



       <!-- Question 03 -->
        <label for="exampleFormControlTextarea1">
          3.  How do you rate the timeliness of maintenance repairs?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


       <!-- Question 04 -->
        <label for="exampleFormControlTextarea1">
          4.  How do you rate the professionalism and expertise of maintenance personnel?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


       <!-- Question 05 -->
        <label for="exampleFormControlTextarea1">
          5.  How do you rate the attitude, courtesy and appearance of maintenance personnel?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


       <!-- Question 06 -->
        <label for="exampleFormControlTextarea1">
          6.  How do you rate the attitude, professionalism and courtesy of administrative personnel?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


       <!-- Question 07 -->
        <label for="exampleFormControlTextarea1">
          7.  How do you rate the timeliness and professionalism of administrative response to customer inquiries?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


       <!-- Question 08 -->
        <label for="exampleFormControlTextarea1">
          8.  How do you rate the appearance and cleanliness of Hendrix College's lawns, landscaping and walkways?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


       <!-- Question 09 -->
        <label for="exampleFormControlTextarea1">
          9.  How do you rate the attitude, professionalism and courtesy of the Facilities Maintenance help desk?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


        <!-- Question 10 -->
        <label for="exampleFormControlTextarea1">
          10.  How do you rate your familiarity with and user-friendliness of Facilities Management's web-based application that allows customers to request work 24 hours a day using your computer?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


        <!-- Question 11 -->
        <label for="exampleFormControlTextarea1">
          11.  How do you rate the other information available on the Facilities Management website?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


        <!-- Question 12 -->
        <label for="exampleFormControlTextarea1">
          12.  Custodial services employs the use of team cleaning concepts and matrix based cleaning standards established by the Association of Physical Plant Administrators to establish tasks and frequencies for each type of space (office, classroom, lab, hallway, restroom, etc.), commensurate with available funding.  How do you rate the appearance and cleanliness of the office areas, classrooms, common areas, and restrooms in your facility?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


        <!-- Question 13 -->
        <label for="exampleFormControlTextarea1">
          13.  How do you rate the condition and adequacy of indoor lighting and electrical systems within your building?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


        <!-- Question 14 -->
        <label for="exampleFormControlTextarea1">
          14.  How do you rate the lighting conditions for all outdoor areas around your facility?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>

        <br><br>


        <!-- Question 15 -->
        <label for="exampleFormControlTextarea1">
          15.  How do you rate your familiarity with, user-friendliness and effectiveness of Facilities Management's recycling program?
        </label><br>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
          <label class="form-check-label" for="inlineRadio1">2</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
          <label class="form-check-label" for="inlineRadio1">3</label>
        </div>        

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option4">
          <label class="form-check-label" for="inlineRadio1">4</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option5">
          <label class="form-check-label" for="inlineRadio1">5</label>
        </div>        

        <br><br>

        <label for="exampleFormControlTextarea1"><b>Feedback:</b></label>
        <br>
        <textarea class="form-control" placeholder="Type something..." id="exampleFormControlTextarea1" rows="5"></textarea>

        <div class="d-flex justify-content-start">
          <button type="submit" class="btn btn-success px-5 " name="evaluation" value="Register">
            Submit Evaluation
          </button>
        </div>
      </div>
    </form>
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