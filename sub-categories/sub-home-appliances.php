<!DOCTYPE html>
<html>
<img  src="wallpaper1.jpg" id="menu-back" /> 
<head>
<title>Best Price</title>
    <link rel="shortcut icon" href="money.ico" />
 <!-- Bootstrap -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap -->
    

    
    
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
      <a class="navbar-brand" href="../home.php" id="logo" > Best Price</a>
    </div>
  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../home.php"><span class="glyphicon glyphicon-home"></span>&ensp; Home</a></li>
        <li><a href="../contact.php">Contact</a></li>
        <li><a href="../About.php">About Us</a></li>
      </ul>
      <!--search box -->
      <div class="col-md-3" style="margin-top: 10px;"> 
            <form action="../search.php" method="get">
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

<!-- sub categories grid -->

       <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="header">
            <div class="col-lg-12">
                <h1 class="page-header">Home Appliances
                    
                </h1>
            </div>
        </div>
        <!-- /.row -->

    <div class="container">
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 portfolio-item">
            <h4>Cooking appliances</h4>
                <a href="sub-view/home-appliances/search-kitchen.php">
                    <img class="img-responsive" src="home-appliances\kitchen-appliances.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 portfolio-item">
            <h4>Fridges & Freezers</h4>
                <a href="sub-view/home-appliances/search-fridge.php">
                    <img class="img-responsive" src="home-appliances\fridge.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 portfolio-item">
            <h4>Small appliances</h4>
                <a href="sub-view/home-appliances/search-small.php">
                    <img class="img-responsive" src="home-appliances\small-appliances.jpg" alt="">
                </a>
            </div>
          
        </div>
        <!-- /.row -->
           </div>
    
</div>


<!--sub categories grid -->



<!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <!-- javascript -->

</body>
</html>



<style type="text/css">

/* Grid Style */
.img-responsive{
  opacity: 1;
  width: 10em;
  height: 15em;
  
}
.header{
  margin-top: 3%;
}
.portfolio-item {
  
    margin-bottom: 20%;
    margin-right: 2%;
    margin-left: 2%;
}


/** select drop list **/


#select-drop{
  height: 50px;

}
.selectpicker{
  height: 50px;
  width: 100%;
}

/** end selection **/



/**add item**/

#show-add{
    position: absolute;
    top: 20%;
    left: 23%
   
}

.form-control{
  height: 50px;
}
#add-in-form{
  height: 80px;
  background-color: green;
  font-size: 40px;
}
.input-group-addon
{
    background-color: green;
    border-color: rgb(40, 94, 142);
    color: rgb(255, 255, 255);
}
.form-control:focus
{
    background-color: #3e8e41;
    border-color: rgb(40, 94, 142);
    color: rgb(255, 255, 255);
}
.form-signup input[type="text"],.form-signup input[type="password"] { border: 1px solid rgb(50, 118, 177); }

/**end add item **/

#logo {
    
  border: none;
  font: normal 16px/normal Impact, Charcoal, sans-serif;
  color: rgba(0,0,0,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  text-shadow: 0 0 9px rgba(20,255,20,0.7) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  -webkit-transform: rotateX(360deg)   ;
  transform: rotateX(360deg)   ;
}
html img{

  /* Preserve aspet ratio */
  position: absolute;
  min-width: 100%;
  min-height: 100%;
  opacity: 0.7;
  background-size:cover
}

</style>

<script type="text/javascript">
   window.onload=function(){
      $('.selectpicker').selectpicker();
      $('.rm-mustard').click(function() {
        $('.remove-example').find('[value=Mustard]').remove();
        $('.remove-example').selectpicker('refresh');
      });
      $('.rm-ketchup').click(function() {
        $('.remove-example').find('[value=Ketchup]').remove();
        $('.remove-example').selectpicker('refresh');
      });
      $('.rm-relish').click(function() {
        $('.remove-example').find('[value=Relish]').remove();
        $('.remove-example').selectpicker('refresh');
      });
      $('.ex-disable').click(function() {
          $('.disable-example').prop('disabled',true);
          $('.disable-example').selectpicker('refresh');
      });
      $('.ex-enable').click(function() {
          $('.disable-example').prop('disabled',false);
          $('.disable-example').selectpicker('refresh');
      });

      // scrollYou
      $('.scrollMe .dropdown-menu').scrollyou();

      prettyPrint();
      };
}

</script>