<!DOCTYPE html>
<html>
<img src="wallpaper1.jpg" id="menu-back" /> 
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
        <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span>&ensp; Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="About.php">About Us</a></li>
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


 

<!--btns -->
  <div>
     <button type="button" onClick="location.href='add.php'" class="btn btn-primary effect5" id="btns-add" >
         <p id="text3d">ADD <br/>ITEMS  </p>
      </button>
  </div>

   <div>
     <button type="button" class="btn btn-primary effect5" id="btns-select" data-toggle="modal" data-target=".bs-example-modal-lg">
        <p href="add.php" id="text3d" >SELECT <br/>ITEMS</p>  
      </button>
   </div>
<!-- end btns -->

<!-- select item -->
<div class="container" id="show-select">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img  id="img-select1"  src="category\clothes.jpg">
                        </a>
                    </li>


                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-1"><img id="img-select1" src="category\furniture.jpg"></a>
                        
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-2"><img id="img-select1" src="category\electronics.jpg"></a>
                    </li>

                    <li class="col-sm-4"> 
                        <a class="thumbnail" id="carousel-selector-3"><img id="img-select1" src="category\health&beauty.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-4"><img id="img-select1" src="category\home-appliances.jpg"></a>
                        
                    </li>
                    
                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-5"><img id="img-select1" src="category\sports-equip.png"></a>

                    </li>

                </ul>
            </div>

            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img id="img-slide" src="category\clothes.jpg">
                                          <div class="caption post-content">
                                             <h3>Clothes</h3>
                                             <a href="sub-categories/sub-clothing.php" id="link_to_beso" ">CLick here to Explore </a>
                                          </div>
                                      </div>


                                    <div class="item" data-slide-number="1">
                                        <img id="img-slide" src="category\furniture.jpg">
                                          <div class="caption post-content">
                                             <h3>Furniture</h3>
                                             <a href="sub-categories/sub-furniture.php" id="link_to_beso" ">CLick here to Explore </a>
                                          </div>
                                      
                                    </div>

                                    <div class="item" data-slide-number="2">
                                        <img id="img-slide" src="category\electronics.jpg">
                                          <div class="caption post-content">
                                             <h3>Electronics</h3>
                                            <a href="sub-categories/sub-electronics.php" id="link_to_beso" ">CLick here to Explore 
                                              </a>
                                          </div>
                                      
                                    </div>

                                    <div class="item" data-slide-number="3">
                                        <img id="img-slide" src="category\health&beauty.jpg">
                                          <div class="caption post-content">
                                             <h3>Health & Beauty</h3>
                                             <a href="sub-categories/sub-beauty-health.php" id="link_to_beso" ">CLick here to Explore </a> 
                                          </div>
                                      
                                    </div>

                                    <div class="item" data-slide-number="4">
                                        <img id="img-slide" src="category\home-appliances.jpg">
                                          <div class="caption post-content">
                                             <h3>Home Appliances</h3>
                                             <a href="sub-categories/sub-home-appliances.php" id="link_to_beso" ">CLick here to Explore </a>
                                          </div>
                                      
                                     </div>


                                    <div class="item" data-slide-number="5">
                                        <img id="img-slide" src="category\sports-equip.png">
                                          <div class="caption post-content">
                                             <h3>Sports Equipment</h3>
                                             <a href="sub-categories/sub-sports.php" id="link_to_beso" ">CLick here to Explore </a>
                                          </div>
                                      
                                    </div>

                               
                          
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <!--/Slider-->

        </div>

    </div>
</div>

<!-- end select -->


<!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <!-- javascript -->

</body>
</html>



<style type="text/css">

/**add item**/

#show-add{
    position: absolute;
    display: none;
    top: 30%;
    left: 20%
   
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
    background-color: rgba(0, 144, 0, 0.5);;
    border-color: rgb(40, 94, 142);
    color: rgb(255, 255, 255);
}
.form-signup input[type="text"],.form-signup input[type="password"] { border: 1px solid rgb(50, 118, 177); }

/**end add item **/


@media screen and (max-width: 800px)
{
   #slider-thumbs{
     display: none;
   }
  
}

.post-content {
    top:70%;
   
    position: absolute;
    background-color: rgba(23, 61, 16, 0.7);
    width: 100%;
}
.post-content h3{
  color: black;
  margin: 15px;
}
.post-content p{
  color: black;
  margin: 15px;
}

.item{
    position:relative;

}

.carousel-inner{
  width:100%;
  height: 450px;
  position: relative;
  top: 20px;
}
#img-slide{
 height: 450px;
}
#img-select1{
  height: 150px;
}

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

#btns-select{
    position: absolute;
    right: 20%;
    bottom: 20%;
}
#btns-add{
    position: absolute;
    left: 20%;
    bottom: 20%;
}

#text3d{
  line-height:7Vw;
}

#btns-select, #btns-add{
  background: #11ab16;
  background-image: -webkit-linear-gradient(top, #11ab16, #03570d);
  background-image: -moz-linear-gradient(top, #11ab16, #03570d);
  background-image: -ms-linear-gradient(top, #11ab16, #03570d);
  background-image: -o-linear-gradient(top, #11ab16, #03570d);
  background-image: linear-gradient(to bottom, #11ab16, #03570d);
  -webkit-border-radius: 27;
  -moz-border-radius: 27;
  border-radius: 27px;
  font-family: Georgia;
  color: #ffffff;
   font-size: 1vw;
  padding: 2% 4% 2% 4%;
  text-decoration: none;
    width: 25%;
  height: 40%;

  
  cursor: pointer;
  border: none;
  font: normal normal bold 4vw/normal "Passero One", Helvetica, sans-serif;
  color: rgba(255,255,255,1);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  text-shadow: 0 1px 0 rgb(204,204,204) , 0 2px 0 rgb(201,201,201) , 0 3px 0 rgb(187,187,187) , 0 4px 0 rgb(185,185,185) , 0 5px 0 rgb(170,170,170) , 0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 5px 10px rgba(0,0,0,0.247059) , 0 10px 10px rgba(0,0,0,0.2) , 0 20px 20px rgba(0,0,0,0.14902) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}

#btns-select:hover, #btns-add:hover {
  background: #31ff08;
  background-image: -webkit-linear-gradient(top, #31ff08, #076913);
  background-image: -moz-linear-gradient(top, #31ff08, #076913);
  background-image: -ms-linear-gradient(top, #31ff08, #076913);
  background-image: -o-linear-gradient(top, #31ff08, #076913);
  background-image: linear-gradient(to bottom, #31ff08, #076913);
  text-decoration: none;
  text-align: center;

  font: normal 3vw/normal "Passero One", Helvetica, sans-serif;
  color: rgba(169,214,169,1);
  text-shadow: 0 1px 0 rgba(255,255,255,1) , 0 2px 0 rgba(255,255,255,1) , 0 3px 0 rgba(255,255,255,1) , 0 4px 0 rgba(255,255,255,1) , 0 5px 0 rgba(255,255,255,1) , 0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 -5px 10px rgba(0,0,0,0.247059) , 0 -7px 10px rgba(0,0,0,0.2) , 0 -15px 20px rgba(0,0,0,0.14902) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
} 

.effect5
{
  position: relative;
  border:1px solid black;
}
.effect5:before, .effect5:after
{
  z-index: -1;
  position: absolute;
  content: "";
  bottom: 25px;
  left: 10px;
  width: 50%;
  top: 80%;
  max-width:300px;
  background: #777;
  box-shadow: 0 35px 20px #777;
  transform: rotate(-8deg);
}
.effect5:after
{
  transform: rotate(8deg);
  right: 10px;
  left: auto;
}

#backimg{
  height: 6000px;
}

#menu-back{


  /* Preserve aspet ratio */
  position: absolute;
  min-width: 100%;
  min-height: 100%;
  opacity: 0.7;
   height: 1100px;
}

.hide-bullets {
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
}

.thumbnail {
    padding: 0;
}

.carousel-inner>.item>img, .carousel-inner>.item>a>img {
    width: 100%;
}

 {
    display: ;
    position: absolute;
    top: 10%;
    left: 5%;
}
#show-select{
  display: none;
    position: absolute;
    top: 10%;
    left: 5%;
}
#link_to_beso{
  font-size: 30px;
  margin: 15px;
  
}


</style>

<script type="text/javascript">
      jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});


$("#btns-select").on("click",function(){

    $("#btns-select").css("display","none")
    $("#btns-add").css("display","none")
    $("#show-select").css("display","block")

}); 



</script>