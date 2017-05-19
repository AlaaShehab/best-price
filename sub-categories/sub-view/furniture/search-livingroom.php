<?php 
	$host = 'localhost';
	$user ='root';
	$pass ='8121995';
	
	$dbh = mysql_connect($host, $user, $pass);
	$selected = mysql_select_db("Products",$dbh);
	
	$result = mysql_query("SELECT * FROM categories WHERE parentid = 19");
	
?>
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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
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
      <a class="navbar-brand" href="../../../home.php" id="logo" > Best Price</a>
    </div>
  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../../../home.php"><span class="glyphicon glyphicon-home"></span>&ensp; Home</a></li>
        <li><a href="../../../contact.php">Contact</a></li>
        <li><a href="../../../About.php">About Us</a></li>
      </ul>
       <!--search box -->
      <div class="col-md-3" style="margin-top: 10px;"> 
            <form action="../../../search.php" method="get">
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

<!-- Table -->

      <div class="container">
  <div class="search-box">
    <div class="col-md-9">
       <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Place</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
						echo "<tr>";
						while ($row = mysql_fetch_array($result)) {
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['Price']."</td>";
						echo "<td>".$row['place']."</td>";
						echo "<td>".$row['Description']."</td>";
						echo "</tr>";
						} ?>
                        
                    </tbody>
                </table>   
    </div>
  </div>
</div>


<!--Table -->



<!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <!-- javascript -->

</body>
</html>



<style type="text/css">

/* Table Style */

.search-box {
    margin-top: 10%;
}
.table-list-search{
  background: white;
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

/** Search JS **/

$(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#system-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
    });
});


</script>