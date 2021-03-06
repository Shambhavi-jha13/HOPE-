<?php 

session_start();

?>
<html>
    <head>
       <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>
            HOPE!
        </title>

        <!-- bootstrap css link --> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <link rel="stylesheet" href="css/index_css6.css">
        <!--google_font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Caveat:wght@400;700&family=Concert+One&family=Dancing+Script:wght@700&family=Kaushan+Script&family=Permanent+Marker&family=Satisfy&family=Special+Elite&family=Volkhov:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Caveat:wght@400;700&family=Concert+One&family=Dancing+Script:wght@700&family=Kaushan+Script&family=Permanent+Marker&family=Satisfy&family=Volkhov:ital@1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="fontawesome/css/all.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <!-- FAVICON --> 
        <link rel="icon" href="css/images/dove.jpeg" type="image/png" sizes="20px">

        <!-- icon link -->
        <script src="https://kit.fontawesome.com/3d611db8c6.js" crossorigin="anonymous"></script>
         
    </head>
    <body style="background-color: #f0e9d6;">
       
        <!--header-->
        <?php 
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
           $loggedin = true;
        }
        else{
           $loggedin = false;
        }
        echo '<section id="header">
        
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <div class="row">
                        <div class="col-2 col-md-3">       
                            <img src="HOPE.png" style="width: 110px;" class="img-logo" alt="Hope">
                        </div>
                        
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto w-100 justify-content-end">';
                    if(!$loggedin){
                        
                    echo '<li class="nav-item">
                            <a class="nav-link btn-grad" href="login.php"><i class="fas fa-user-plus" onclick="togglePopup"></i>Login</a>
                        </li>';
                    }
                    
                    if($loggedin){
                    echo '<li class="nav-item">
                    <a class="nav-link btn-grad" href="logout.php"><i onclick="togglePopup"></i>Logout</a>
                        </li>';
                    } 
                echo "
                    </ul>
                </div>
            </div>
        </nav>

            <div class='container-fluid'>
                <h1>Give to the one's in need</h1>
                <p>A small contribution you make today will shape a better future for tomorrow. Alone, we don't make much of a difference, but together, we are strong to face any problem</p>
                <div class='btn-toolbar' role='toolbar'>";
                if(!$loggedin){
                echo "<a href='login.php' class='btn-bt'> NEED HELP?</a>";
                 }
                if($loggedin){
                echo "<a href='need_help.php' class='btn-bt'> NEED HELP?</a>";
                }
            echo "<a href='before_want_to_help.php' class='btn-bt'>WANT  TO  HELP?</a>
            </div>
            </div>
        </section>";
        ?>
        <!--campus-->
        <section class="campus"><h1>
            How little help can impact life of people's
        </h1>
        
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-1">
                <div class="card">
                <img src="css/images/mask_sanitiser.jpg" >
                <div class="layer">
                    <a href="covid&india.php"><h3>Mask Up India</h3></a>
                </div>
            </div>
            </div>
            
             <div class="col-lg-4 col-md-4 col-sm-1">
                 <div class="card">
                <img src="css/images/child_hunger0.png" >
                <div class="layer">
                    <a href="kids_hunger_in_india.php"><h3>No Kid In Hunger</h3></a>
                </div>
            </div>
            </div>
            
             <div class="col-lg-4 col-md-4 col-sm-1">
                <div class="card">
                <img src="css/images/girls_in_school.jpg" >
                <div class="layer">
                    <a href="girls_education.php"><h3>Educate India</h3></a>
                </div>
            </div>
            </div>
        </div>
        </section>
        
        <!--course-->
        <section class="course">
         <h1>Our Missions</h1>
         <p>"There are many tools available to help write a mission or vision statement. but I think it's often best to keep it simple - one or two sentences - and describe why the business exist. What is the core value or the daily purpose? Write it down and share it with everyone!"</p>
         <div class="row">
             <div class="course-col">
                <a href="Impact.php"><h2>IMPACT</h2></a>
                 <p></p>
             </div>

             <div class="course-col">
                <a href="connect_page.php"><h2>CONNECT</h2></a>
                 <p></p>
             </div>

         </div>
        </section>
        
        <!--campus-->
        <!--facilities-->
        <section class="cta">
            <a href="feed.php" class="btn-bt"> CONTACT US </a>
        </section>
        
        <!--footer-->
        <footer>
            <div class="footer-content">
               <h3>
                ABOUT US
                </h3>
                <p> This website will help people in this COVID-19 crisis or any other upcoming future crisis in providing necessity charity.</p>
                <ul class="socials">
                   <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                   <li><a href="#"><i class="fab fa-google"></i></a></li>
                   <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                   <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
           <!--
           <div class="footer-bottom">
               <p>Copyright &copy; 2021 HOPE. designed by <span>mce</span></p>
           </div> --> 
            <div class="footer-copyright text-center py-3">
               <p> Copyright &copy; 2021 HOPE. designed by <strong>MCE</strong></p>
            </div>
        </footer>
        
        
    <!-- bootstrap javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        
    </body>
</html>
