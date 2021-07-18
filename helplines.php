<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- icon link -->
    <script src="https://kit.fontawesome.com/3d611db8c6.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <!-- google fonts --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    
    <!-- FAVICON --> 
    <link rel="icon" href="css/images/dove.jpeg" type="image/png" sizes="20px">
    <style>

    .container{
        padding: 0px 50px 0px 70px;
    }
    
    h1,h2,h4 {
        text-align: center;
    }

    .heading{
      font-size: 50px;
      font-weight: bold;
    }

    .help-num{
      margin: none;
      padding: 15px;
    }
    
    .upper-div{
        background-color: rgba(0,0,0,0.25);
        max-width: 100%;
        padding: 50px;

    }
    .title{
        font-weight: bold;
        margin: 10px;
        font-family: 'Itim',cursive;
        font-size: 40px;
    }

    .num{
        padding-top: 70px;
        font-size: large;
        text-align: left;
        font-weight: bold;
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
            padding-top: 40px;
            text-align: center;
        }

    </style>
</head>
<body>
    <!-- NAVBAR -->
    <?php 
    require "navbar.php"
    ?>

    
    <div class="upper-div">
        
        <h4 class="help-num">Central Helpline Number:
        <a href="#">+91-11-23978046</a></h4>
        <h2 class="title"><span>Helpline numbers of States and UTs</span></h2>
    </div>
    <div class="container">
        
        <p class="num">
        → Andaman and Nicobar Islands: <span style="color: blue;">03192-232102</span><br>
        → Andhra Pradesh: <span style="color: blue;">0866-2410978</span><br>
        → Arunachal Pradesh: <span style="color: blue;">9436055743</span><br>
        → Assam: <span style="color: blue;">6913347770</span><br>
        → Bihar: <span style="color: blue;">104</span><br>
        → Chandigarh: <span style="color: blue;">9779558282</span><br>
        → Chhattisgarh: <span style="color: blue;">104</span><br>
        → Dadra and Nagar Haveli and Daman & Diu: <span style="color: blue;">104</span><br>
        → Delhi: <span style="color: blue;">011-22307145</span><br>
        → Goa: <span style="color: blue;">104</span><br>
        → Gujarat: <span style="color: blue;">104</span><br>
        → Haryana: <span style="color: blue;">8558893911</span><br>
        → Himachal Pradesh: <span style="color: blue;">104</span><br>
        → Jammu & Kashmir: <span style="color: blue;">01912520982, 0194-2440283</span><br>
        → Jharkhand: <span style="color: blue;">104</span><br>
        → Karnataka: <span style="color: blue;">104</span><br>
        → Kerala: <span style="color: blue;">0471-2552056</span><br>
        → Ladakh: <span style="color: blue;">01982256462</span><br>
        → Lakshadweep: <span style="color: blue;">104</span><br>
        → Madhya Pradesh: <span style="color: blue;">104</span><br>
        → Maharashtra: <span style="color: blue;">020-26127394</span><br>
        → Manipur:<span style="color: blue;">3852411668</span> <br>
        → Meghalaya: <span style="color: blue;">108</span><br>
        → Mizoram: <span style="color: blue;">102</span><br>
        → Nagaland: <span style="color: blue;">7005539653</span><br>
        → Odisha: <span style="color: blue;">9439994859</span><br>
        → Puducherry: <span style="color: blue;">104</span><br>
        → Punjab: <span style="color: blue;">104</span><br>
        → Rajasthan: <span style="color: blue;">0141-2225624</span><br>
        → Sikkim: <span style="color: blue;">104</span><br>
        → Tamil Nadu: <span style="color: blue;">044-29510500</span><br>
        → Telangana: <span style="color: blue;">104</span><br>
        → Tripura: <span style="color: blue;">0381-2315879</span><br>
        → Uttarakhand: <span style="color: blue;">104</span><br>
        → Uttar Pradesh: <span style="color: blue;">18001805145</span><br>
        → West Bengal: <span style="color: blue;">1800313444222, 03323412600</span><br>
    </p>
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
    
    <!--   Javascript bootstrap link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
     <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    --> 
</body>
</html>