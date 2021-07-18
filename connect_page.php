<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- <link rel="stylesheet" href="CSS/style.css"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

      <title>CONNECT</title>
       <!-- icon link -->
           <script src="https://kit.fontawesome.com/3d611db8c6.js" crossorigin="anonymous"></script>
       <!-- font of navbar -->
             <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
       <!-- FAVICON --> 
       <link rel="icon" href="css/images/dove.jpeg" type="image/png" sizes="20px">
  <style>

#heading{
  padding: 70px;
  text-align: center;
 
}

.card{
  background-color: #132c33;
  }

  .row{
    display: flex;
  }

.card-body{
  padding: 60px;
  margin: 20px;
}

@media screen and (max-width: 767px) {
  .card {
    margin: 3px;

  }

  .row{
    flex-direction: column;
  }

  .card-body{
    font-size: 5px;
    padding: 15px;
    margin: 5px;
  }

}


.card:hover {
      filter: contrast(100%);
      cursor: pointer;
      box-shadow: 10px 20px 40px 14px rgba(0, 0, 0, 0.25);
    }

    #heading h2 {
    font-size: 30px;
    font-family: verdana;
    font-weight: bold;
    color: #cdc733;
    text-shadow: 1px 1px #fff;
}

  @media screen and (max-width: 767px){
    #heading h2{
      font-size: 20px;
    }

    #heading{
      padding: 50px;
    }
  }

   

    .inner-container{
        max-width: 100%;
        background-image: url('css/images/COVID-speech-banner.jpg');
        background-size: cover;
        margin: 0;
        text-align: center;
        padding-bottom: 50px;
        padding-top: 50px;
        
      }

    h1{
        text-align: center;
        padding-bottom: 50px; 
        padding-top: 50px; 
        font-size: 90px; 
        color: #cdc733;
        text-shadow: 2px 2px #000;
        font-weight: bold;
        }

    .container-fluid{
        text-align: center;
        }
        
    .jumbotron{
        width: 450px;
        height: 250px;
        background-color: rgba(0, 0, 0, 0.6);
        overflow: hidden;
        align-items: center;
        margin: auto;
        display: block;
      }
  
  @media screen and (max-width: 767px){
    .jumbotron{
      width: 300px;
      height: 100px;
    }

    h1{
      font-size: 50px;
      margin: auto;
      padding-bottom: 20px;
      padding-top: 20px;
    }
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
        
    footer{
        text-align: center;
        }
        
    .footer-bar{
        padding-top: 60px;
      }
  </style>

</head>
<body>
  <!-- NAVBAR -->
  <?php 
  require "navbar.php"
  ?>
<br>
    
  <!-- *****************body************* --> 
  <div class="container">  
  <section id="heading">
  <div class="row">
    <div class="col-lg-6 col-sm-12">
         <div class="card">
            <div class="card-body">
               <h2 style="font-weight: bold;">
                We can't help everyone but everyone can help someone.</h2> 
            </div>
          </div>
    </div>
    <div class="col-lg-6 col-sm-12">
       <div class="card">
          <div class="card-body">
             <h2 style="font-weight: bold;">
              The greatest GOOD is what we do for one another.</h2>
          </div>
        </div>
    </div>
  </div>
  </section>
  </div>
           <div class="inner-container">
          <div class="jumbotron">
             <h1>Connect</h1>
          </div>
        </div>
      <br>
      <br>
      
        <div class="container-fluid">
          <h2><span class="badge bg-primary">Be a helping hand for others.</span></h2>
          <b style="font-size: 2rem">Join Us </b>
              <br>
              <br>
              <b style="font-size: 2rem">@Hope_in </b>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
          </div>      


    <div class="footer-bar">
    <footer>
        <p>© 2021 @Hope_in.</p>
    </footer>
    </div>

    <!--   Javascript bootstrap link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    --> 
  </body>
</html>