 <?php
///added all that
  $host = 'localhost';
  $user ='id1717130_bestprice';
  $pass ='bestprice';
  
  $dbh = mysql_connect($host, $user, $pass)or die(mysql_error());
  $selected = mysql_select_db("Products",$dbh);
  if(isset($_POST['add_Item'])){
    $name = $_POST['ItemName'];
    $parentId = $_POST['idparent'];
    $desc = $_POST['description'];
    $Location = $_POST['Location'];
    $price = $_POST['price'];
    $query = mysql_query("INSERT into categories(name, parentid, MainCategory, Description, place, price) VALUES ('$name','$parentId','0', '$desc', '$Location', '$price')");
  }
 ?>
<!DOCTYPE html>
<html>
<img src="wallpaper1.jpg" id="menu-back" /> 
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

<!-- add item -->

 <form class="form-signin" id="show-add" method = "post" action = "add.php"> <!--added method and action herer-->
   <div class="container">
    <div class="row">
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center">
                        Adding new Item</h3>
                    <form class="form form-signup" role="form">
<!-- select -->
                    <div class="form-group " >
                      <div class="input-group" id="select-drop">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-menu-down"></span></span>
                         <select name ='idparent' class="selectpicker" data-style="btn btn-sm btn-primary btn-block btn-lg">
                           <option value="28">accessories-beauty</option>
                           <option value="27">babycare-beauty</option>
                           <option value="29">herbs-beauty</option>
                           <option value="30">luxury-beauty</option>
                           <option value="17">athletic-clothes</option>
                           <option value="15">boys-clothes</option>
                           <option value="16">girls-clothes</option>
                           <option value="18">men-clothes</option>
                           <option value="14">women-clothes</option>
                           <option value="24">camera-electronics</option>
                           <option value="23">computer-electronics</option>
                           <option value="26">mobile-electronics</option>
                           <option value="25">tv-electronics</option>
                           <option value="22">bedroom-furniture</option>
                           <option value="21">kitchen-furniture</option>
                           <option value="19">livingroom-furniture</option>
                           <option value="20">office-furniture</option>
                           <option value="32">fridge-home appliances</option>
                           <option value="33">kitchen-home appliances</option>
                           <option value="31">small appliances-home appliances</option>
                           <option value="11">climbing-sports</option>
                           <option value="13">cycling-sports</option>
                           <option value="8">hunting-sports</option>
                           <option value="9">pitch-sports</option>
                           <option value="10">running-sports</option>
                           
                        </select>
                       </div>
                    </div>
 <!-- end select -->                   
                    <div class="form-group">
                
                        <div class="input-group">
						<!--added required, name = ItemNam-->
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                            <input type="Text" required class="form-control" placeholder="Item Name" name = "ItemName" />
                        </div>
                    </div>
					<div class="form-group">
                
                        <div class="input-group">
						<!--added required, name = description-->
                            <span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>
                            <input type="Text" required class="form-control" placeholder="Description" name = "description" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
						<!--added required, name = ItemName, type = number to insert numbers only-->
                            <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
                            <input type="number" required class="form-control" placeholder="Bill" name = "price"/>
                         </div>
                    </div>

                   <div class="form-group">
                
                        <div class="input-group">
						<!--added required, name = location-->
                            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                            <input type="Text" required class="form-control" placeholder="Location" name = "Location" />
                        </div>
                    </div>
					<!--replaced all what was here with a button instead a link-->
                <button type="submit" name="add_Item" class="btn btn-sm btn-primary btn-block btn-lg" id="add-in-form">Add Item</button>
				</form>
            </div>
        </div>
    </div>
   </div>
</form>


<!--end add item -->







<!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <!-- javascript -->

</body>
</html>



<style type="text/css">

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