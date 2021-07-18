<?php 
include('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPACT</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- icon link -->
    <script src="https://kit.fontawesome.com/3d611db8c6.js" crossorigin="anonymous"></script>
    <!-- google fonts --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    
    <!-- FAVICON --> 
    <link rel="icon" href="css/images/dove.jpeg" type="image/png" sizes="20px">
    <style>
    .container{
        font-family: 'Montserrat', sans-serif;
    }
    .container .container-fluid{
        text-align: center;
        padding-top: 60px;
       padding-bottom: 80px;
    }
    h1{
        text-align: center;
        padding-top: 30px;
    }
    
    .inner-container{
       padding-top: 80px;
       padding-bottom: 80px;
    }
    h3{
        padding-top: 20px;
    }
    .card{
        background-color: #FFD8CC;
        border-radius: 0.5rem;
        padding: 10px 15px 10px 15px;
        margin-top: 10px;
        margin-top: 10px;
    }
    .card p{
        text-align: right;
    }
    .card:hover {
      filter: contrast(100%);
      cursor: pointer;
      box-shadow: 10px 20px 40px 14px rgba(0, 0, 0, 0.25);
    }
    .footer{
     text-align: center;
     padding: 70px 25px 25px 25px;
    }
    .social{
    text-align: center;
    }
    .fa {
      padding: 20px;
      font-size: 40px;
      width: 60px;
      text-align: center;
      text-decoration: none;
      margin: 5px 3px;
    }
    
    
    .fa-twitter {
    
      color: black;
    }
    
    .fa-instagram{
        color: black;
    }

    .footer-bar{
        text-align: center;
        padding-top: 50px;
    }
    </style>
</head>
<body>
<?php 
    require "navbar.php"
    ?>


    <div class="container">
    <h1>IMPACT</h1>
       <div class="container-fluid">
       
          <h3>Number of Lives Impacted: </h3>
          <?php 
          $sql = "SELECT * FROM help";
          $result = mysqli_query($con,$sql);
      
          //number of rows returned
          $num = mysqli_num_rows($result);
          echo '<span style="color: blue; font-size: 30px;">'.$num.'</span>';
          ?>

          <h3>States/Cities: </h3>
          <?php 
          $sql = "SELECT * FROM users";
          $result = mysqli_query($con,$sql);
      
          //number of rows returned
          $num = mysqli_num_rows($result);
          echo '<span style="color: blue; font-size: 30px;">'.$num.'</span>';
          ?>
        </div>
        <hr>
        <h1>User Feedback</h1>
        <div class="inner-container">

           <div class="row">
           <?php
           //selecting the data from database
            $sql = "SELECT * FROM users_site";
            $result = mysqli_query($con,$sql);
            
            //number of rows returned
            $num = mysqli_num_rows($result);
            //echo $num;
           if($num>0){
            while($row = mysqli_fetch_assoc($result)){
                if($row['id']<27){
            echo '<div class="col-lg-4 col-md-6 col-sm-1">
              <div class="card">
              <div class="card-body">"'.
               $row['feed']
              .'"</div><br>
              <p>~'.$row['name'].'</p>
            </div>
            </div>';
                }
        
            }
        }
        ?>
        </div>
        </div>
    </div>

    <!--Footer -->
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