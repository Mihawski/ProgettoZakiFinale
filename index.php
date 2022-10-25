<?php include "connection.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:420,500,800" rel="stylesheet">
    <link rel= "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      padding: 0;
      margin:0;
    }

    .copyright {
      float: left;
    }

    .fafaicon {
      float: right;
    }

    #footer {
      background-color: #C3D1F1;
      padding:3%;
    }

    #a1 {
      color: #163235;
    }

    .carousel-item {
      height: 32rem;
      position: relative;
      background-color: center;
      background-size: cover;
      background-color: black;
      color: white;
    }
    .container {
      position: absolute;
      bottom:0;
      left: 0;
      right: 0;
      padding-bottom: 50px;
    }

    .container1 {
      position: relative;
      left: 0;
      right: 0;
      padding-bottom: 50px;
    }
    .container2 {
      position: relative;
      left: 0;
      right: 0;
      width: 99%;
      padding-bottom: 50px;
    }

    .overlay-image {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      top: 0;
      background-color: center;
      background-size: cover;
      opacity: 0.5;
      bottom: 0;
      left: 0;
      right: 0;
      top: 0;
    }

    .overlay-image-blog {
      background-color: center;
      background-size: cover;
      opacity: 0.5;
    }
    
    #daterows {
      padding: 8px;
    }

    .datepicker {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 2%;
    }

    .imginformations {
      margin-bottom: 1.5em;
    }

    .imgdestinations {
      margin-bottom: 1.5em;
      border-radius: 10px;
    }

    #destinations {
      color: #163235;
    }

    .littledetailsleft {
      float: left;
      padding-left: 7%;
    }

    .littledetailsright {
      float: right;
      padding-right: 7%;
    }

    .clientdetails {
      float: left;
      padding-left: 7%;
    }

    #client {
      float: left;
    }

    #clients {
      padding-left: 1%;
      padding-right: 1%;
    }

    .text {
      position: absolute;
      top: 20%;
      text-transform: uppercase;
      padding: 40px;
      color: white;
    }

    .clientText {
      letter-spacing: 1px;
      padding-bottom: 6%;
      padding-top: 3%;
    }

    .mytabs {
      display: flex;
      flex-wrap: wrap;
    }

    .mytabs label {
      padding: 25px; 
      margin-left: 15%;
      margin-bottom: 5%;
    }

    .mytabs input[type="radio"] {
      display: none;
    }

    .mytabs input[type="radio"]:checked + label + .tab {
      display: block;
    }

    .mytabs .tab {
      display: none;
      
      order: 1;
    }

    .mytabs input[type="radio"]:checked + label {
      font-weight: bolder;
      text-transform: uppercase;
      color:#163235;
      text-decoration: overline;
      font-size:larger;
    }

    @media (max-width: 1300px) {
  .imgdestinations {
    max-width: 90%;
    height: auto;
  }
}



  </style>
    <title>Progetto</title>
</head>
<body>

    <!-------------------------------- NAVBAR ------------------------------------>

<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="img/earth_planet_globe_environement_world_icon_191963.png"
            height="35"
            width = "35"
            alt="Blog logo"
            loading="lazy"
          />
        </a>
        <a id="proto" class="navbar-brand" href="#">Proto</a>
        <!-- Left links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Places</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Careers</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a> 
          </li>
        </ul>
      </div>
        <div class="dropdown">
            <button onclick="location.href='login.html'" type="button" id= 'bottonenav' class = "btn btn-primary">Login</button>
        </div>
      </div>
    </div>
  </nav>
  
<!-------------------------------------------------- NAVBAR --------------------------------------------------->

<!-------------------------------------------------- CAROUSEL ------------------------------------------------->

<div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <div class="overlay-image" style="background-image:url(img/Img2.jpg);"></div>
      <div class="container">
        <h1>TRAVEL TO EXPLORE</h1>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati sequi mollitia aperiam neque facilis magni sit enim maiores, nostrum vero delectus! Voluptate totam maiores quis amet enim expedita. Veritatis, commodi!
        </p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <div class="overlay-image" style="background-image:url(img/Img1.jpg);"></div>
      <div class="container">
        <h1>TRAVEL TO EXPLORE</h1>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati sequi mollitia aperiam neque facilis magni sit enim maiores, nostrum vero delectus! Voluptate totam maiores quis amet enim expedita. Veritatis, commodi!
        </p>
      </div>
  </div>

  <div class="carousel-item" data-bs-interval="3000">
    <div class="overlay-image" style="background-image:url(img/Img3.jpg);"></div>
    <div class="container">
      <h1>TRAVEL TO EXPLORE</h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati sequi mollitia aperiam neque facilis magni sit enim maiores, nostrum vero delectus! Voluptate totam maiores quis amet enim expedita. Veritatis, commodi!
      </p>
    </div>
</div>
</div>

<a href="#myCarousel" class="carousel-control-prev" role="button" data-bs-slide="prev">
  <span class="sr-only">Previous</span>
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
</a>
<a href="#myCarousel" class="carousel-control-next" role="button" data-bs-slide="next">
  <span class="sr-only">Next</span>
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
</a>
</div>

<!-------------------------------------------------- CAROUSEL ------------------------------------------------->

<!-------------------------------------------------- DATEPICKER ------------------------------------------------->

<div class="container1 datepicker mt-100">
  <div class="card">
      <div class="row" id="daterows">
          <div class="col-md-4"> <label>Check in</label> <input type="text" class="form-control" placeholder="Add date"></div>
          <div class="col-md-4"> <label>Check out</label> <input type="text" class="form-control" placeholder="Add date"> </div>
          <div class="col-md-4"> <label>Search</label> <button class="btn btn-primary pro-button w-100">Add a trip! <i class="fa fa-plane ml-2"></i></button></div>
      </div>
  </div>
</div>

<!-------------------------------------------------- DATEPICKER ------------------------------------------------->

<!-------------------------------------------------- INFORMATIONS ----------------------------------------------->
<div class="container2 shadow-lg p-3 mb-5 bg-white rounded">
<div class="row">
  <div id= "borderinformation " class="col-md">
    <img class="imginformations" src="img/reward.png" height="35" width = "35" loading="lazy" alt="#">
    <h3>Get Best Prices</h3>
    <p>Pay through our application and save thousands and get amazing awards </p>
  </div>
  <div id= "borderinformation" class="col-md">
    <img class="imginformations" src="img/Covidsafe.png" height="35" width = "35" loading="lazy" alt="#">
    <h3>Covid Safe</h3>
    <p>We have all the curated hotels that have all the precaution for a covid safe environment </p>
  </div>
  <div id= "borderinformation" class="col-md">
    <img class="imginformations" src="img/payment.png" height="35" width = "35" loading="lazy" alt="#">
    <h3>Flexible Payment</h3>
    <p>Enjoy the flexible payment through our app and get rewars on every payment </p>
  </div>
  <div id= "borderinformation" class="col-md">
    <img class="imginformations" src="img/place.png" height="35" width = "35" loading="lazy" alt="#">
    <h3>Find The Best Near You</h3>
    <p>Find the best hotels and places to visit near you in a single click</p>
  </div>
</div>
</div>

<!-------------------------------------------------- INFORMATIONS ----------------------------------------------->

<!-------------------------------------------------- RECOMMENDED DESTINATIONS ------------------------------------>


<div class="text-center">
  <h3 id="destinations">Recommended destinations</h3><br><br><br>
</div>


<div class="mytabs">
        <input type="radio" id ="tabfree" name = "mytabs" checked = "checked">
        <label for="tabfree">Asia</label>
        <div class="tab">
          <div class="container2 shadow-lg p-3 mb-5 bg-white rounded">
          <div class="row">

<?php 
$query2 = "SELECT * FROM asia";
$asiaCities = mysqli_query($conn,$query2);

 while($row =mysqli_fetch_assoc($asiaCities)) {
    $cittaNome = $row['nomeCitta'];
    $cittaDesc = $row['descrizioneCitta'];
    $cittaImmagine = $row['immagineCitta'];
 ?>
              <div id= "borderinformation" class="col-md-4">
                <img class="imgdestinations" src="img/<?php echo $cittaImmagine?>" height="250" width = "420" loading="lazy" alt="#">
                <h3><?php echo $cittaNome ?></h3>
                <p><?php echo $cittaDesc ?></p>
                  <div class="littledetailsleft">
                    <img class="imginformations" src="img/museum.png" height="25" width = "25" loading="lazy" alt="#">
                    <img class="imginformations" src="img/eat.png" height="25" width = "25" loading="lazy" alt="#">
                    <img class="imginformations" src="img/airplane.png" height="25" width = "25" loading="lazy" alt="#">
                    <p><strong>1000kms</strong></p>
                  </div>
                  <div class="littledetailsright">
                    <p>$10 000</p>
                    <p>Approx 2 night trip</p>
                  </div>
              </div> <!-- FINE VIAGGIO -->

        <?php } ?>
        </div> <!-- FINE ROW-->
        </div> <!-- FINE CONTAINER -->
        </div> <!-- FINE TAB-->

<!------------------------------------------- FINE CONTINENTE ------------------------------------------------->

        <input type="radio" id ="tabsilver" name = "mytabs">
        <label for="tabsilver">Europe</label>
        <div class="tab">
          <div class="container2 shadow-lg p-3 mb-5 bg-white rounded">
          <div class="row">

<?php 
$query2 = "SELECT * FROM europa";
$europeCities = mysqli_query($conn,$query2);

 while($row =mysqli_fetch_assoc($europeCities)) {
    $cittaNome = $row['nomeCittaEu'];
    $cittaDesc = $row['descrizioneCittaEu'];
    $cittaImmagine = $row['immagineCittaEu'];
 ?>
              <div id= "borderinformation" class="col-md-4">
                <img class="imgdestinations" src="img/<?php echo $cittaImmagine?>" height="250" width = "420" loading="lazy" alt="#">
                <h3><?php echo $cittaNome ?></h3>
                <p><?php echo $cittaDesc ?></p>
                  <div class="littledetailsleft">
                    <img class="imginformations" src="img/museum.png" height="25" width = "25" loading="lazy" alt="#">
                    <img class="imginformations" src="img/eat.png" height="25" width = "25" loading="lazy" alt="#">
                    <img class="imginformations" src="img/airplane.png" height="25" width = "25" loading="lazy" alt="#">
                    <p><strong>1000kms</strong></p>
                  </div>
                  <div class="littledetailsright">
                    <p>$10 000</p>
                    <p>Approx 2 night trip</p>
                  </div>
              </div> <!-- FINE VIAGGIO -->

        <?php } ?>
        </div> <!-- FINE ROW-->
        </div> <!-- FINE CONTAINER -->
        </div> <!-- FINE TAB-->

<!------------------------------------------- FINE CONTINENTE ------------------------------------------------->

  <input type="radio" id ="tabgold" name = "mytabs">
  <label for="tabgold">Africa</label>
        <div class="tab">
          <div class="container2 shadow-lg p-3 mb-5 bg-white rounded">
          <div class="row">

<?php 
$query2 = "SELECT * FROM africa";
$africaCities = mysqli_query($conn,$query2);

 while($row =mysqli_fetch_assoc($africaCities)) {
    $cittaNome = $row['nomeCittaAf'];
    $cittaDesc = $row['descrizioneCittaAf'];
    $cittaImmagine = $row['immagineCittaAf'];
 ?>
              <div id= "borderinformation" class="col-md-4">
                <img class="imgdestinations" src="img/<?php echo $cittaImmagine?>" height="250" width = "420" loading="lazy" alt="#">
                <h3><?php echo $cittaNome ?></h3>
                <p><?php echo $cittaDesc ?></p>
                  <div class="littledetailsleft">
                    <img class="imginformations" src="img/museum.png" height="25" width = "25" loading="lazy" alt="#">
                    <img class="imginformations" src="img/eat.png" height="25" width = "25" loading="lazy" alt="#">
                    <img class="imginformations" src="img/airplane.png" height="25" width = "25" loading="lazy" alt="#">
                    <p><strong>1000kms</strong></p>
                  </div>
                  <div class="littledetailsright">
                    <p>$10 000</p>
                    <p>Approx 2 night trip</p>
                  </div>
              </div> <!-- FINE VIAGGIO -->

        <?php } ?>
        </div> <!-- FINE ROW-->
        </div> <!-- FINE CONTAINER -->
        </div> <!-- FINE TAB-->

        <!------------------------------------------- FINE CONTINENTE ------------------------------------------------->

    <input type="radio" id ="tabbronze" name = "mytabs">
    <label for="tabbronze">America</label>
        <div class="tab">
          <div class="container2 shadow-lg p-3 mb-5 bg-white rounded">
          <div class="row">

<?php 
$query2 = "SELECT * FROM america";
$americaCities = mysqli_query($conn,$query2);

 while($row =mysqli_fetch_assoc($americaCities)) {
    $cittaNome = $row['nomeCittaAm'];
    $cittaDesc = $row['descrizioneCittaAm'];
    $cittaImmagine = $row['immagineCittaAm'];
 ?>
              <div id= "borderinformation" class="col-md-4">
                <img class="imgdestinations" src="img/<?php echo $cittaImmagine?>" height="250" width = "420" loading="lazy" alt="#">
                <h3><?php echo $cittaNome ?></h3>
                <p><?php echo $cittaDesc ?></p>
                  <div class="littledetailsleft">
                    <img class="imginformations" src="img/museum.png" height="25" width = "25" loading="lazy" alt="#">
                    <img class="imginformations" src="img/eat.png" height="25" width = "25" loading="lazy" alt="#">
                    <img class="imginformations" src="img/airplane.png" height="25" width = "25" loading="lazy" alt="#">
                    <p><strong>1000kms</strong></p>
                  </div>
                  <div class="littledetailsright">
                    <p>$10 000</p>
                    <p>Approx 2 night trip</p>
                  </div>
              </div> <!-- FINE VIAGGIO -->

        <?php } ?>
        </div> <!-- FINE ROW-->
        </div> <!-- FINE CONTAINER -->
        </div> <!-- FINE TAB-->
        

 </div>

  <!------------------------------------------------------- BLOGS ----------------------------------------->

  <div class="text-center">
    <h3 id="destinations">Blogs</h3><br><br><br>
  </div>

  <div class="container2">
    <div class="row gx-2">
      <div id= "borderinformation" class="shadow p-3 mb-5 bg-white rounded col-lg-4 col-md-12">
        <img src="img/kilimanjaro.jpg" style="border-radius:3%" height="250" width = "420" loading="lazy" alt="#">
        <div class="text container">
        <h5><strong>The Ultimate Guide to Climbing Mount Kilimanjaro</strong></h5>
      </div>
      </div>

      <div id= "borderinformation" class="shadow p-3 mb-5 bg-white rounded col-lg-4 col-md-6">
        <img src="img/airplane.jpg" style="border-radius:3%" height="250" width = "420" loading="lazy" alt="#">
        <div class="text container">
        <h5><strong>12 Things I'd Tell Any New Traveller</strong></h5>
      </div>
      </div>

      <div id= "borderinformation" class="shadow p-3 mb-5 bg-white rounded col-lg-4 col-md-6">
        <img src="img/tajmahal.jpg" style="border-radius:3%" height="250" width = "420" loading="lazy" alt="#">
        <div class="text container">
        <h5><strong>The Ultimate Packing List For Women Travellers</strong></h5>
      </div>
      </div>
      </div>
    </div>
<!-------------------------------------------------- BLOGS ------------------------------------>

<!-------------------------------------------------- CLIENTS ------------------------------------>

<div class="text-center">
  <h3 id="destinations">Clients</h3><br><br><br>
</div>

<div class="container2" id="clients">
  <div class="row shadow-lg p-3 mb-5 bg-white rounded">
    <div id= "borderinformation " class="col-sm">
      <p class="clientText" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus eos ad quas, est laudantium quidem labore eaque amet sapiente fugiat ab, optio at aliquid! Temporibus nisi accusamus minus sit ullam!</p>
      <img class="imginformations" id = "client" src="img/client2.png" height="55" width = "55" loading="lazy" alt="#">
      <div class="clientdetails">
      <h4>Mario Rossi</h4>
      <h6>Manager</6>
    </div>
    </div>

    <div id= "borderinformation " class="col-sm">
      <p class="clientText" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus eos ad quas, est laudantium quidem labore eaque amet sapiente fugiat ab, optio at aliquid! Temporibus nisi accusamus minus sit ullam!</p>
      <img class="imginformations" id = "client" src="img/client1.png" height="55" width = "55" loading="lazy" alt="#">
      <div class="clientdetails">
      <h4>Marta Verci</h4>
      <h6>Developer</6>
    </div>
    </div>

  </div>
  </div>

<!-------------------------------------------------- CLIENTS ------------------------------------>

<!------------------------------------------------- FOOTER ---------------------------------------->
<nav class="navbar navbar-expand-sm" id="footer">
  <div class="container-fluid">

    <div>
      <p>Copyright &copy; 2021 Proto Web Site</p>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" id= "a1" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id= "a1" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id= "a1" href="#">Places</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" id= "a1" href="#">Careers</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" id= "a1" href="#">Blog</a> 
        </li>
      </ul>
    </div>
    <div class="fafaicon"><a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
      ><i class="fa fa-facebook-f"></i
    ></a>
    <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
      ><i class="fa fa-twitter"></i
    ></a>
    <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
      ><i class="fa fa-instagram"></i
    ></a>
  </div>
</div>
    </div>
  </div>
</nav>


<!------------------------------------------------- FOOTER ---------------------------------------->


</body> 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</html>