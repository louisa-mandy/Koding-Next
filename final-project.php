<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $password = "";

    $db = mysqli_connect($host, $user, $password, 'final_project');
?>


<html>

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 <title> My Final Project </title>

</head>

<body>

  <div class="container" style="margin-top: 30px;">
    <div style="text-align: center;">
        <?php
            if(isset($_SESSION['username'])){
                echo "<h3>Welcome, ".$_SESSION['username']."</h3>";
                echo "<h4><a href='logout.php'>Logout</a></h4>";
            }
            else {
            echo "<p>Welcome to my website!</p>";
            echo "<p>Click <a href='register.php'>Register</a> or <a href='login.php'>Login</a> to login and register </p>";
        }
        ?>
        <br>
    </div>
  </div>

  <center>

    <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="one.png" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="two.png" class="d-block w-100" alt="picture 2">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="three.png" class="d-block w-100" alt="picture 3">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  

    <br>
    <center>
        
    <h1 style="background-color: #FFCACA; font-family: Arial, Helvetica, sans-serif; color: white"> 
        ---------------------- Louisa Mandy Halim ---------------------- 
    </h1>
    
    <br>

    <h3 style="font-family: Arial, Helvetica, sans-serif; color: #6F4040;"> <img src="icon2.png" width="35px" height="35px"> Student ID : 2702325552 </h3>
    </center>
   
    <br><br>

    <h3 style="font-family: Arial, Helvetica, sans-serif; color: #6F4040;"> <b><i>&nbsp;&nbsp; <img src="icon1.png" width="35px" height="35px">
      Brief Introduction : 
   </i></b></h3>
    
    <p style= "font-family: Arial, Helvetica, sans-serif;"> 
      &nbsp;&nbsp;&nbsp;Hello there, my name is Mandy. I am curently studying at Binus International as a computer science student.
       <br> &nbsp;&nbsp;&nbsp;I was born and raised in Indonesia, North Jakarta. My birthday is on the 7th of december 2005, that makes
       <br>&nbsp;&nbsp;&nbsp;me 17 years old right now and approaching 18 soon!. I have a lot of hobbies, I enjoy singing, dancing, and drawing. 
       <br> &nbsp;&nbsp;&nbsp;This is the website i created for my final project in koding next ^^. 
    </p> 

    <br>

    <form action="/action_page.php">
      <h3 style= "font-family: Arial, Helvetica, sans-serif; color: #6F4040;"><b><i>&nbsp;&nbsp; <img src="gender.png" width="35px" height="35px"> 
        Gender :</b></i></h3>
      &nbsp;&nbsp;&nbsp;
      <input type="radio" id="Female" name="Gender" value="Female">
      <label for="html"> &nbsp;&nbsp;&nbsp;Female </label><br>

    </form>

    <br>

    <h3 style= "font-family: Arial, Helvetica, sans-serif; color: #6F4040;"><b><i>&nbsp;&nbsp; <img src="chat.png" width="35px" height="35px"> 
      My Social Media :</b></i></h3>
      <li><img src="insta.png" width="25px" height="25px"> Instagram : <a href="https://instagram.com/louisa.mandy_?igshid=OGQ5ZDc2ODk2ZA=="> @louisa.mandy_ </a></li>
        
    <br>
    <br> 

    <h3 style= "font-family: Arial, Helvetica, sans-serif; color: #6F4040;"><b><i>&nbsp;&nbsp; <img src="edu.png" width="35px" height="35px"> 
      My Education :</b></i></h3>
      
        <li><a href="https://kodingnext.com/en/"> Koding Next </a>: OnGoing </li>
        <li><a href="https://kbl.co.id/"> Kbl </a> : OnGoing </li>
        <li><a href="https://instagram.com/ecclesiastgram?igshid=MzRlODBiNWFlZA=="> Ecclesiast </a> : 2017 - 2023 </li>
        <li><a href="https://www.kumon.com/"> Kumon </a> : 2013 - 2016 </li>
        <li><a href="https://www.sempoasip.com/"> Sempoa SIP </a> : 2011 - 2013</li>
      

      <br>


    <h3 style="font-family: Arial, Helvetica, sans-serif; color: #6F4040;"> <b><i>&nbsp;&nbsp; <img src="extralessons.png" width="35px" height="35px">
      Extra Lessons :
     </i></b></h3>

   
      <li><a href="https://international.binus.ac.id/"> Binus International University </a>: OnGoing </li>
      <li><a href="https://sma2-jkt.tarakanita.sch.id/"> SMA Trakanita 2 </a> : 2020 - 2023 </li>
      <li><a href="https://smp2-jkt.tarakanita.sch.id/"> SMP Trakanita 2 </a> : 2017 - 2020 </li>
      <li><a href="https://sd4-jkt.tarakanita.sch.id/"> SD Trakanita 4 </a> : 2011 - 2017</li>

     <br>

      <h3 style= "font-family: Arial, Helvetica, sans-serif; color: #6F4040;"><b><i>&nbsp;&nbsp; <img src="code.png" width="35px" height="35px"> 
        My Programming Skills </b></i></h3>
        
    <form action="/action_page.php">
      <input type="checkbox" id="Programming1" name="vehicle1" value="Html">
      <label for="vehicle1"> HTML </label><br>
      <input type="checkbox" id="Programming2" name="vehicle2" value="Css">
      <label for="vehicle2"> CSS </label><br>
      <input type="checkbox" id="Programming3" name="vehicle3" value="Php">
      <label for="vehicle3"> PHP </label><br><br>
     </form>

     
     <h3 style= "font-family: Arial, Helvetica, sans-serif; color: #6F4040;"><b><i>&nbsp;&nbsp; <img src="hobby.png" width="35px" height="35px"> 
      My Hobbies </b></i></h3>
        <li> <img src="sing.png" width="25px" height="25px"> Singing </li>
        <li> <img src="draw.png" width="25px" height="25px">Drawing </li>
        <li> <img src="dance.png" width="25px" height="25px">Dancing </li>

    <br> 


    <h1 style="background-color: #FFCACA; font-family: Arial, Helvetica, sans-serif; color: white"> 
      ---------------------- To go to page 2, please click here: <a href="page-2.php"> Page 2 </a> ---------------------- 
    
    </h1>
  

    
</body>
</html>