<!DOCTYPE html>
<html lang="en">
<head>
  <title>The spark bank</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:100px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="getdetail.php">Get Details</a></li>
        <li><a href="transfer.php">Transfer</a></li>
        <li><a href="transaction.php">transaction</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <div width="200" height="200">
      <img src="bank-getty.jpg" alt="Cinque Terre" width="600" height="400"/>
      </div>
        <div class="carousel-caption">
          <h3>Online Bank </h3>
          <p>banking online</p>
        </div>      
      </div>

      <div class="item">
      <div width="200" height="200">
        <img src="2.jpg" alt="Image" width="600" height="400">
        </div>
        <div class="carousel-caption">
          <h3>Stay Home Stay Safe </h3>
          <p>Bank from home </p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>The Sparks Bank</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="11.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Transaction</p>
    </div>
    <div class="col-sm-4"> 
      <img src="21.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>easy to use</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>We provide the transaction details  </p>
      </div>
      <div class="well">
       <p>open for all 24/7</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <h4>Copyright @ 2021 A Basic Banking System by vaishnavi.S</h4>
  <h5>vaishnavisreddy24@gmail.com</h5>

</footer>

</body>
</html>
