<?php
include('config.php');
$insert = false;
if(isset($_POST['name'])){

  

  $name = $_POST['name'];
  $place = $_POST['place'];
  $Gender = $_POST['Gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $Type = $_POST['Type'];
  $problems = $_POST['problems'];
  $sql = "INSERT INTO `project`.`help` (`name`, `place`, `Gender`, `email`, `phone`, `Type`, `problems`, `dt`) VALUES ('$name', '$place', '$Gender', '$email', '$phone', '$Type', '$problems', current_timestamp());";
  
  //echo $sql;
  if($con->query($sql) == true){
    //echo "successfully inserted";
    $insert = true;
    }
else {
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Need Help Page</title>
    <link rel="stylesheet" href="css/need_help_style5.css">

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- icon link -->
    <script src="https://kit.fontawesome.com/3d611db8c6.js" crossorigin="anonymous"></script>
    <!-- google fonts --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    
    <!-- FAVICON --> 
    <link rel="icon" href="css/images/dove.jpeg" type="image/png" sizes="20px">
    
    <style>


    .form-select{
    width: 70%;
    margin: 10px;
    padding: 7px;
    font-size: 20px;
    border: 2px solid black;
    border-radius: 12px;
    outline: none;
    
 }

 .container::before{
    opacity: 0.8;
}
 </style>

</head>
<body>
    <!-- NAVBAR -->
    <?php 
    require "navbar.php"
    ?>
  
    <?php
    if($insert == true){
    echo '<div class="alert alert-success" role="alert" style="margin-bottom: 0px; border-bottom-width: 0px;">
    Thanks for submitting the form. We will contact you soon!!
    </div>';}
    ?>

    <div class="upper-div">
    <h1 class="heading">Welcome to HOPE!</h1>
    <h2><span class="badge bg-success">For the people, by the people!</span></h2>
    </div>
    <h3><span style="font-style: italic;">Please write your problems here and we will help you to resolve it.</span></h3>
    

    <div class="container" style="max-width: 100%">
    <form action="need_help.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your name" required> 
    <input type="text" name="place" id="place" placeholder="Enter your location" required>
    <input type="text" name="Gender" id="Gender" placeholder="Enter your Gender" required>
    <input type="email" name="email" id="email" placeholder="Enter your Email ID" required>
    <input type="phone" name="phone" id="phone" placeholder="Enter your phone number" required>
    <select class="form-select" name="Type">
    <option selected>Select Your Problem</option>
    <option value="1">Food Help</option>
    <option value="2">Medical Support</option>
    <option value="3">Oxygen Cylinder</option>
    <option value="4">Money</option>
    <option value="5">Plasma</option>
    <option value="6">Other Problems</option>
    </select>
    <textarea id="problems" name="problems" placeholder="Enter and Elaborate your problems here" required></textarea><br>
    <button type="submit" class="btn btn-outline-dark btn-lg">Submit</button>
    </form>
    </div>

    <div class="footer">
    <h5><span style="font-weight: bold;">For better query, please contact your state helplines number.</span></h5>
    <form action="helplines.php" method="post">
     <div class="d-grid gap-2 col-4 mx-auto">
     <button class="btn btn-primary" type="submit">Helplines</button>
     </div>
    </form>
    </div>

    <div class="social">
            <b style="font-size: 2rem">@Hope_in </b>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
      </div>

      <div class="footer-bar">
    <footer>
        <p>© 2021 @Hope_in.</p>
    </footer>
    </div>
    <script src="index.js"></script>

    <!-- bootstrap javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity=
    "sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity=
    "sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    --> 
</body>
</html>

