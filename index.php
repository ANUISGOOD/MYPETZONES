<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>

<?php   include 'menu.php'; ?>

       
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/red.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
            <h2>"Welcome to Petzone"</h2>
        </div>
    </div>
    <div class="carousel-item">
      <img src="images/pet2.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
            <h2>"Welcome to Petzone"</h2>
        </div>
    </div>
    <div class="carousel-item">
      <img src="images/pet5.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
            <h2>"Welcome to Petzone"</h2>
        </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py=5">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/pet3.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">PETS</h4>
                            <p class="card-text">Love The Animals.</p>
                        </div>
                    </div>
                </div> 
                
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/rabbit.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">SHOP</h4>
                            <p class="card-text">Adopt Them.</p>
                        </div>
                    </div>
                </div>   

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/dog.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Variety</h4>
                            <p class="card-text">Care Them.</p>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
</section>

<footer>
    <h2 class="p-3 bg-dark text-white text-center">@mypetzone</h2>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>