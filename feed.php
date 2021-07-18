<?php
include('config.php');
    if (isset( $_POST['submit'] )){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $experience = $_POST['experience'];
        $feed = $_POST['feed'];
    
     
        // Submit these to a database
        $sql = "INSERT INTO `project`.`users_site` (`name`, `email`, `experience`, `feed` ) VALUES ('$name', '$email', '$experience','$feed')";
        $result = mysqli_query($con, $sql);

        if($result){
        
          echo "<script>alert('Your feedback submitted succesfully')</script>";
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some issue and your entry was not submitted successfully!
          </div>';
        }

      

    }

    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>

    <!-- BOOTSTRAP CDN Links -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Custom CSS file -->
       <link rel="stylesheet" href="css/feedbackform3.css">
    <!-- FAVICON --> 
       <link rel="icon" href="css/images/dove.jpeg" type="image/png" sizes="20px">
    <!-- icon link -->
       <script src="https://kit.fontawesome.com/3d611db8c6.js" crossorigin="anonymous"></script>
      
    </head>

    <body>
        <?php 
        require "navbar.php"
        ?>
    <div class="container">
    <div class="loginbox mt-4">
        <section id="form-section">
            <h1 class="h1-tag">Your Feedback Is Important For Us</h1>
            <hr>
            <form class="form-content-section" action="feed.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputText">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputText" placeholder="Enter Your Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter your email" required>
                
            </div>
            <h3 class="mt-4">How do you rate your overall experience?</h3>
            <label class="radio-inline"><input type="radio" name="experience" value="Bad">Bad</label>
			<label class="radio-inline"><input type="radio" name="experience" value="Average">Average</label>
			<label class="radio-inline"><input type="radio" name="experience" value="Good">Good</label>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Your Feedback</label>
                <textarea class="form-control" name="feed" id="exampleFormControlTextarea1" placeholder="Write your feedback" rows="3" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary myclass">Post Comment</button>
        </form>
    </section>
</div>
</div>

<!--   Javascript bootstrap link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="
    sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="
    sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
-->
</body>
</html>