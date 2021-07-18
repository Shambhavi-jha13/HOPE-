<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>NEED HELP</title>

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- google fonts --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/want-to-help-covid-index-css1.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Caveat:wght@400;700&family=Concert+One&family=Dancing+Script:wght@700&family=Kaushan+Script&family=Permanent+Marker&family=Satisfy&family=Special+Elite&family=Volkhov:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Caveat:wght@400;700&family=Concert+One&family=Dancing+Script:wght@700&family=Kaushan+Script&family=Permanent+Marker&family=Satisfy&family=Volkhov:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&family=Odibee+Sans&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">

    <!-- FAVICON --> 
        <link rel="icon" href="css/images/dove.jpeg" type="image/png" sizes="20px">
    
        <!-- icon link -->
    <script src="https://kit.fontawesome.com/3d611db8c6.js" crossorigin="anonymous"></script>

    </head>
<body>
   <!-- NAVBAR -->
   <?php 
   require "navbar.php"
   ?>
   <div class="upper-div">
    <h1 class="heading">Welcome to HOPE!</h1>
    <h3><span class="badge bg-success">For the people, by the people!</span></h3>
   </div>
   <p class="head-text"> Choose one or more options from the following and provide your small help to those who are facing and fighting
       against pandemic. You can provide help to anyone, be it your friend, a stranger, colleagues, or neighbors.</p>
    <section class="header">
       
       <form action="see_data.php" method="post"> 
    <div class="wrapper" style="margin-left: 0px;">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-1">
        <div class="card">
            <img src="css/images/FOOD.JPG">
            <div class="info">
                <h1> Food Help </h1>
                <button type="submit" name="food" class="btn"> Help  </button>
            </div>
        </div>
        </div>


        <!--Second image-->
    <div class="col-lg-4 col-md-6 col-sm-1">
        <div class="card">
            <img src="css/images/medical_eqip.JPG">
            <div class="info">
                <h1> Medical Sopport </h1>
                <button type="submit" name="medical" class="btn"> Help  </button>
            </div>
        </div>
</div>
        <!--Third image-->
    <div class="col-lg-4 col-md-6 col-sm-1">
        <div class="card">
            <img src="css/images/oxygen%20cylinder.JPG">
            <div class="info">
                <h1> Oxygen Cylinder </h1>
                <button type="submit" name="oxygen" class="btn"> Help </button>
            </div>
        </div>
    </div>
</div>

</div>



<div class="wrapper_2" style="margin-left: 0px;">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-1">
        <div class="card_2">
            <img src="css/images/donate_money.JPG">
            <div class="info_2">
                <h2>Money Donation </h2>
                <button type="submit" name="money" class="btn_2"> Help </button>
            </div>
        </div>
</div>
    
        <div class="col-lg-4 col-md-6 col-sm-1">
        <div class="card_2">
            <img src="css/images/plasma_donation.JPG">
            <div class="info_2">
                <h2> Plasma Donation </h2>
                <br>
                <button type="submit" name="plasma" class="btn_2"> Help  </button>
            </div>
        </div>
</div>
      <div class="col-lg-4 col-md-6 col-sm-1">
        <div class="card_2">
            <img src="css/images/want_to_help_otherJPG.png">
            <div class="info_2">
                <h2>Other Help </h2>
                <button type="submit" name="others" class="btn_2"> Help  </button>
            </div>
        </div>
     </div>
    </div>
</div>
    </form>
        
    <!-- Features -->
    
    <section id="features">
        <div class="row">
  
           <div class="feature-box col-lg-4" style="padding: 5%">
           <h3><i class="icon fas fa-users fa-3x" aria-hidden="true"></i></h3>
           <p> Know your beneficiary,we'll share their name </p> 
           </div>
   
           <div class="feature-box col-lg-4" style="padding: 5%">
           <h3><i class="icon fas fa-address-book fa-3x"></i></h3>
           <p>Learn how you make a change in their lives..</p> 
           </div>
   
           <div class="feature-box col-lg-4" style="padding: 5%">
           <h3><i class="icon fas fa-hand-holding-heart fa-3x"></i></h3>
           <p>Your choice to give monthly will make a long-lasting impact</p> 
           </div>

        </div>
    </section>   
        
         <!--footer-->
        <script src="https://kit.fontawesome.com/3d611db8c6.js" crossorigin="anonymous"></script>

         <div class="social">
             <b style="font-size: 2rem">@Hope_in </b>
             <a href="#"><i class="fa fa-twitter"></i></a>
             <a href="#"><i class="fa fa-instagram"></i></a>
         </div>

         <div class="footer-bar">
             <footer>
                 <p style="text-align: center">© 2021 @Hope_in.</p>
             </footer>
         </div>
         
     </section>
    <!-- bootstrap javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>