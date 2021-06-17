<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>

<!--Navbar--->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="logo.png" width="40" height="30" class="d-inline-block align-top" alt="">TSF BANK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/" target='_blank'>About Us</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        View all Customers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="viewcustomer.php">Customers</a>
          <a class="dropdown-item" href="transfer.php">Transfer Money</a>
          <a class="dropdown-item" href="transferhistory.php">Transaction's History</a>
        </div>  
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
      
    </ul>
   
  </div>
</nav>



<!--carousal------->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h1>TSF BANK</h1>
        <p>Together we can make the world a better place </p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h1>TSF BANK</h1>
        <p>Together we can make the world a better place </p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h1>TSF BANK</h1>
        <p>Together we can make the world a better place </p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!--Aboutus----------->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="tsp.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="font-weight-bold">The Sparks Foundation</h2>
      <h5 class="text-info">Mission and Vision Statement</h5>
      <p class="py-3">The sparks foundation is working to bring parity in education, making sure children have equal opportunity at success, irrespective of the financial background.</p>
      <a href="https://www.thesparksfoundationsingapore.org/" class="btn btn-success">KNOW MORE </a>
    </div>
  </div>
</div>
</section>

<!--customer services----->
<section class="my-5 ">
  <div class="py-5">
    <h2 class="text-center">Customer Services</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
      
          <div class="card" >
            <img class="card-img-top" src="cards.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Credit Cards</h4>
            <p class="card-text">Amazing Deals and Rewards</p>
            <a href="#" class="btn btn-success">know more</a>
            </div>
          </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
      
          <div class="card" >
            <img class="card-img-top" src="loan.png" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Loans</h4>
            <p class="card-text">Wide range of financial products at low interest rates</p>
            <a href="#" class="btn btn-success">know more</a>
            </div>
          </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
      
          <div class="card" >
            <img class="card-img-top" src="insurance1.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Insurance</h4>
            <p class="card-text">Wide coverage and affordable premium services</p>
            <a href="#" class="btn btn-success">know more</a>
            </div>
          </div>
      </div>
    </div>
</div>
</section>

<!---Portfolio------------>

<section class="my-5 ">
   <div class="container py-5 text-center">
       <h1>Portfolio</h1>
       <p>Lorem ipsum dolor..</p>
    <div class='row'>
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="portfolio1.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Everyone needs a little push sometimes. Whether you're starting out on a new career path or need a burst of motivation, these inspiring words will remind you that success is possible.</p>
  </div>
</div>
      </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="portfolio2.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Keep away from people who try to belittle your ambitions. Small people always do that, but the really great make you feel that you, too, can become great</p>
  </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="portfolio3.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful.</p>
  </div>
</div>
      </div>
    
    </div>
</div>
</secion>

<!---developer------------>
<section class="my-5">
<div class='container py-5 text-center'>
<h3 class='pb-1'>About The Developer</h3>
<p class='pb-3'>“Knowledge is power.”</p>
<img src="ipsita.jpg" class="rounded-circle" alt="Cinque Terre" width="204" height="156">
<h5 class='pt-1'> Ipsita Mondal </h5>
<h6> Web Developer </h6>


</div>
</section>



<!-- Footer -->
<footer>
<div class="footer-copyright text-center py-3">© 2021 The Sparks Foundation. All Rights Reserved | Design by IPSITA </a>
  </div>
  <!-- Copyright -->
</footer>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>