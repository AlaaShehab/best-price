<!DOCTYPE html>
<html lang="en">
  <img src="wallpaper1.jpg" id="backimg" />
   <!-- my style sheet -->
   <link rel="stylesheet" type="text/css" href="style.css"/>
  <head>
    <!-- Bootstrap -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap -->


    <title>Best Price</title>
    <link rel="shortcut icon" href="money.ico" />

   


    
  </head>

  <body>
     
    
     <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="home.php" id="logo" > Best Price</a>
    </div>
  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php"><span class="glyphicon glyphicon-home"></span>&ensp; Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li class="active"><a href="About.php">About Us</a></li>
      </ul>
      <!--search box -->
      <div class="col-md-3" style="margin-top: 10px;"> 
            <form action="search.php" method="get">
                <div  class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input style="height: 34px;" 
                      class="form-control" id="system-search" name="search"  placeholder="Search for" required>
                    <span class="input-group-btn">
                        <button name = "button" type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
      <!--search box -->
      <ul class="nav navbar-nav navbar-right">
       <li><a href="signin.php"><span  class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
      </ul>
    </div>

  </div>
</nav>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<div class="container bootstrap snippet">
    <section id="team" class="white-bg padding-top-bottom">
    <div class="container bootstrap snippet">
      <h1 class=" text-center page-title">Meet our team</h1>
      <p class=" text-center"> 
           <h2 class="text-center page-title" id="titleus" ">Meet our amazing team</h2>
        </p>  


      <div class="row member-content" >
        <div class="col-sm-3 col-sm-offset-1 member-thumb  fade-right in" >
          <img class="img-responsive img-center img-thumbnail img-circle" src="team\ahmed.jpg" alt="" id="ourimg-left">
        </div>

        <div class="col-sm-7" >
          <div class="details">
             <h4>Ahmed Hussien</h4>
             <p class="title">Leader &amp; Front-end designer</p>
            <ul class="social-content">
              <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
     
      <div class="row member-content right">
        <div class="col-sm-3 col-sm-push-5 member-thumb">
          <img class="img-responsive img-center img-thumbnail img-circle" src="team\alaa.jpg" alt="" id="ourimg-right">
          
        </div>
        <div class="col-sm-7 col-sm-pull-2" >
          <div class="details">
            <h4>Alaa Shehab</h4>
          <p class="title">Database developer</p>
            <ul class="social-content">
              <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
       
      <div class="row member-content" >
        <div class="col-sm-3 col-sm-offset-1 member-thumb" >
          <img class="img-responsive img-center img-thumbnail img-circle" src="team\bassant.jpg" alt="" id="ourimg-left">
          
        </div>
        <div class="col-sm-7 " >
          <div class="details">
            <h4>Bassant Ahmed</h4>
          <p class="title">Database developer</p>
            <ul class="social-content">
              <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row member-content right">
        <div class="col-sm-3 col-sm-push-5 member-thumb" >
          <img class="img-responsive img-center img-thumbnail img-circle" src="team\bassam.jpg" alt="" id="ourimg-right">
          
        </div>
        <div class="col-sm-7 col-sm-pull-2" id="totaldet">
          <div class="details">
            <h4>Bassam Aiman</h4>
          <p class="title">Front-end designer</p>
            <ul class="social-content">
              <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>    
</div>                    



</body>



<!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <!-- javascript -->
</html>