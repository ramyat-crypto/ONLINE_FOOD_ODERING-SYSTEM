<!DOCTYPE html>
<html lang="en">
   <html>
    <head>
        <title>FOOD STORE</title>
     <!--  <link rel="stylesheet" type="text/css" href="style.css" > 
       <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="style.css" > 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
   
       
    </head>
    
    <body>
     
            <div class="header">
            <nav class="navbar  navbar-fixed-top" style="background-color: orange">
  <div class="container-fluid">
    <div class="navbar-header">
	<div  class="navbar-brand" style="padding-top:5px"><img src="img/snacks.jpg" height="45" width="60" > </div>
	<DIV  class="navbar-brand" ><b> zotato.com</DIV>
    
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php"style="color:#000000">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#000000">Menu<span class="caret"></span></a>
        <ul  class="dropdown-menu" >
            <p style="color: blue"><a href="menu1.php">Udupi Park</a></p>
          
            <p style="color: blue"><a href="menu.php#maincourses">Dessert Kingdom</a></p>
         
       
        
            <p style="color: blue"><a href="menu.php#desserts">Snack Park</a></p>
            <p style="color: blue"><a href="menu.php#snacks">Burgzz</a></p>
		  
        </ul>
      </li>
      <ul class="nav navbar-nav navbar-right" >
       <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
         

      </ul>
    </ul>
   
  </div>
</nav>
            
			
	

          </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    
                    <div class="col-sm-3">
                        <a href="menu1.php" >
                            <div class="thumbnail">
                                <img src="img/main.jpg" alt="">
                                <div class="caption">
                                    <h2>Udupi Park</h2>
                                   
                                </div>
                            </div> 
                        </a>
                    </div>
                   
                    
                     <div class="col-sm-3">
                        <a href="menu.php#desserts" >
                            <div class="thumbnail">
                                <img src="img/des.jpg" alt="">
                                <div class="caption">
                                    <h2>Dessert Kingdom</h2>
                                    
                                </div>
                            </div> 
                        </a>
                    </div>
                     <div class="col-sm-3">
                        <a href="menu.php#starters" >
                            <div class="thumbnail">
                                <img src="img/starters.jpg" alt="">
                                <div class="caption">
                                    <h2>Snack Park</h2>
                                                                   </div>
                            </div> 
                        </a>
                    </div>


                    <div class="col-sm-3">
                        <a href="menu.php#snacks" >
                            <div class="thumbnail">
                                <img src="img/snacks.jpg" alt="">
                                <div class="caption">
                                    <h2>Burgzz</h2>
                                   
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>
