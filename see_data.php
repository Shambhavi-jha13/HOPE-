<?php
    include('config.php');
    
    //selecting the data from database
    $sql = "SELECT * FROM help";
    $result = mysqli_query($con,$sql);

    //number of rows returned
    $num = mysqli_num_rows($result);
    //echo $num;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Want to help</title>
    <link rel="stylesheet" href="css/see_data_style4.css">

    <!-- icon link -->
    <script src="https://kit.fontawesome.com/3d611db8c6.js" crossorigin="anonymous"></script>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- google fonts --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <!-- FAVICON --> 
    <link rel="icon" href="css/images/dove.jpeg" type="image/png" sizes="20px">

</head>
<body>
<?php 
require "navbar.php"
?>

    <div class="upper-div">
    <h1 class="heading">Welcome to HOPE!</h1>
    <h3><span class="badge bg-success">For the people, by the people!</span></h3>
    <p>If you are here to help someone in this pandemic situation, we provide you the platform to help them. We are glad to
    have people like you. Following are the problems of the needy people who are in a serious need of help, please do a bit for them.</p>
     </div>
    <h4 class="help-num">Central Helpline Number:
    <a href="#">+91-11-23978046</a></h4>
    
    <div class="container">
    <div class="row">
     
        <?php
        if($num>0){
            if(isset($_POST['food'])){

            while($row = mysqli_fetch_assoc($result) ){
                if($row['Type']==1){
                echo '<div class="col-lg-4 col-md-6 col-sm-1">
                <div class="card">
                <div class="card-title">'.'<h4>Food Help</h4>'.'</div>
                <div class="card-body">
                <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Problem No :</span>
                <span>'.$row['s.no'].'</span><br>
                <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Name :</span>
                <span>'.$row['name'].'</span><br>
                <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Location :</span>
                <span>'.$row['place'].'</span><br>
                <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Gender :</span>
                <span>'.$row['Gender'].'</span><br>
                <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Email :</span>
                <span>'.$row['email'].'</span><br>
                <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Phone :</span>
                <span>'.$row['phone'].'</span><br>
                <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Problems :</span>
                <span>'.$row['problems'].'</span><br>
                <hr>
                <div class="d-grid">
                    <button class="btn btn-lg btn-primary" type="submit">Done</button>
                </div>
                </div>
                  
                </div>
              </div>';
                }
               }
            }
            elseif(isset($_POST['medical'])){

                while($row = mysqli_fetch_assoc($result) ){

                    if($row['Type']==2){

                    echo '<div class="col-lg-4 col-md-6 col-sm-1">
                    <div class="card">
                    <div class="card-title">'.'<h4>Medical Support</h4>'.'</div>
                    <div class="card-body">
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Problem No :</span>
                    <span>'.$row['s.no'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Name :</span>
                    <span>'.$row['name'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Location :</span>
                    <span>'.$row['place'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Gender :</span>
                    <span>'.$row['Gender'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">EmailId :</span>
                    <span>'.$row['email'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Phone :</span>
                    <span>'.$row['phone'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Problems :</span>
                    <span>'.$row['problems'].'</span><br>
                    <hr>
                    <div class="d-grid">
                         <button type="submit" class="btn btn-lg btn-primary">Done</button>
                    </div>
                    </div>
                      
                    </div>
                  </div>';
                    }
                }

            }
            elseif(isset($_POST['oxygen'])){
                while($row = mysqli_fetch_assoc($result) ){

                    if($row['Type']==3){

                    echo '<div class="col-lg-4 col-md-6 col-sm-1">
                    <div class="card">
                    
                    <div class="card-title">'.'<h4>Oxygen Cylinders</h4>'.'</div>
                    <div class="card-body">
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Problem No :</span>
                    <span>'.$row['s.no'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Name :</span>
                    <span>'.$row['name'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Location :</span>
                    <span>'.$row['place'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Gender :</span>
                    <span>'.$row['Gender'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">EmailId :</span>
                    <span>'.$row['email'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Phone :</span>
                    <span>'.$row['phone'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Problems :</span>
                    <span>'.$row['problems'].'</span><br>
                    <hr>
                    <div class="d-grid">
                    <button type="submit" class="btn btn-lg btn-primary">Done</button>
                    </div>
                    </div>
                      
                    </div>
                  </div>';
                    }
                }
            }
            elseif(isset($_POST['money'])){
                while($row = mysqli_fetch_assoc($result) ){

                    if($row['Type']==4){

                    echo '<div class="col-lg-4 col-md-6 col-sm-1">
                    <div class="card">
                    
                    <div class="card-title">'.'<h4>Money Donation</h4>'.'</div>
                    <div class="card-body">
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Problem No :</span>
                    <span>'.$row['s.no'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Name :</span>
                    <span>'.$row['name'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Location :</span>
                    <span>'.$row['place'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Gender :</span>
                    <span>'.$row['Gender'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">EmailId :</span>
                    <span>'.$row['email'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Phone :</span>
                    <span>'.$row['phone'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Problems :</span>
                    <span>'.$row['problems'].'</span><br>
                    <hr>
                    <div class="d-grid">
                    <button type="submit" class="btn btn-lg btn-primary">Done</button>
                    </div>
                    </div>
                      
                    </div>
                  </div>';
                    }
                }
            }
            elseif(isset($_POST['plasma'])){
                while($row = mysqli_fetch_assoc($result) ){

                    if($row['Type']==5){

                    echo '<div class="col-lg-4 col-md-6 col-sm-1">
                    <div class="card">
                    
                    <div class="card-title">'.'<h4>Plasma Donation</h4>'.'</div>
                    <div class="card-body">
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Problem No :</span>
                    <span>'.$row['s.no'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Name :</span>
                    <span>'.$row['name'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Location :</span>
                    <span>'.$row['place'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Gender :</span>
                    <span>'.$row['Gender'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">EmailId :</span>
                    <span>'.$row['email'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Phone :</span>
                    <span>'.$row['phone'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Problems :</span>
                    <span>'.$row['problems'].'</span><br>
                    <hr>
                    <div class="d-grid">
                    <button type="submit" class="btn btn-lg btn-primary">Done</button>
                    </div>
                    </div>
                      
                    </div>
                  </div>';
                    }
                }
            }
            elseif(isset($_POST['others'])){
                while($row = mysqli_fetch_assoc($result) ){

                    if($row['Type']==6){

                    echo '<div class="col-lg-4 col-md-6 col-sm-1">
                    <div class="card">
                    
                    <div class="card-title">'.'<h4>Others Problem</h4>'.'</div>
                    <div class="card-body">
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Problem No :</span>
                    <span>'.$row['s.no'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Name :</span>
                    <span>'.$row['name'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Location :</span>
                    <span>'.$row['place'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Gender :</span>
                    <span>'.$row['Gender'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">EmailId :</span>
                    <span>'.$row['email'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Phone :</span>
                    <span>'.$row['phone'].'</span><br>
                    <span style="color: #000; font-weight: 600; margin-bottom: 3px;">Problems :</span>
                    <span>'.$row['problems'].'</span><br>
                    <hr>
                    <div class="d-grid">
                    <button type="submit" class="btn btn-lg btn-primary">Done</button>
                    </div>
                    </div>
                      
                    </div>
                  </div>';
                    }
                }
            }
        }
        ?>
    </div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>   
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    --> 
    </body>
</html>


