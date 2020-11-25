<?php
require("includes/common.php");

// Redirects the user to menu page if he/she is logged in.
$query = "SELECT * FROM restaurant";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num == 0) {
    echo "No Restaurants Available";
}

?>
<!DOCTYPE html>
<html lang="en" >
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
    
    <body >
     
            <div class="header">
            <nav class="navbar  navbar-fixed-top" style="background-color: orangered">
  <div class="container-fluid">
    <div class="navbar-header">
	<div  class="navbar-brand" style="padding-top:5px"><img src="img/snacks.jpg" height="45" width="60" > </div>
	<DIV  class="navbar-brand" ><b> zotato.com</DIV>
    
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php"style="color:#000000">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#000000">Menu<span class="caret"></span></a>
          
        <ul  class="dropdown-menu" >
            
            
            
             <?php while ($row = mysqli_fetch_array($result)) {
               $id=$row['restaurant_id']; 
            
?>
            <p style="color: blue"><a href="menu1.php?id=<?php echo $id;?>"><?php echo "<h4> ".$row['restaurant_name']."</h4>"; ?></a></p>
             <?php }?>
		  
        </ul>
      </li>
       
         

      
    </ul>
      
    <ul class="nav navbar-nav navbar-right">
		  <?php
                if (isset($_SESSION['email'])) {
                    $query="select name from customer where email='".$_SESSION['email']."'";
                    $result = mysqli_query($con, $query)or die($mysqli_error($con));
                    $row= mysqli_fetch_array($result);
                    ?>
                    <li><span class="icon-text" style="color:#000000"><?php echo "<h3>".$row['name']."</h3>";?></span></li>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart" style="color:#000000"></span><span class="icon-text" style="color:#000000"> Cart </span></a></li>
        
        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in" style="color:#000000"></span> <span class="icon-text" style="color:#000000">Logout</span></a></li>
                   
                    <?php
                } else {
                    ?>
        <li><a href="admin_login.php"><i class="fa fa-shopping-cart fa-2x"></i> <span class="glyphicon glyphicon-user"style="color:#000000"></span> <span class="icon-text" style="color:#000000" >ADMIN</span></a></li>
                    <li><a href="login.php"><i class="fa fa-shopping-cart fa-2x"></i> <span class="glyphicon glyphicon-log-in"style="color:#000000"></span> <span class="icon-text" style="color:#000000" >Login</span></a></li>
      
                 <li><a  href='signup.php'><i class="fa fa-user fa-2x"></i><span class="icon-text"> <span class="glyphicon glyphicon-user"style="color:#000000"></span><span class="icon-text" style="color:#000000">SignUp  </span> </a></li>
                        <?php
                    }
                    ?>  </div></nav>
                
            </div>

            
			
	

        <div class="container-fluid" style="padding-top:20px">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <div class="carousel-caption">
      <h1 style="color:black">WELCOME TO ZOTATO!!</h1>
      </div>
        <img src="img/cara3.jpg" alt="..." class="img-responsive" >
      
      
    </div>
    <div class="item">
        <div class="carousel-caption">
          <h1 style="color:black">WELCOME TO ZOTATO!!</h1>
      </div>
        <img src="img/cara1.jpg" alt="..." class="img-responsive" >
      
    </div>
       <div class="item">
           <div class="carousel-caption">
        <h1 style="color:black">WELCOME TO ZOTATO!!</h1>
      </div>
           <img src="img/cara4.jpg" alt="..." class="img-responsive" >
      
    </div>
      <div class="carousel-caption">
        <h1 style="color:black">WELCOME TO ZOTATO!!</h1>
      </div>
	 <div class="item">
             <img src="img/cara2.jpg" alt="..." class="img-responsive" >
      
    </div>
    
  </div>
          

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
        </div>  
            <!--Main banner image end-->

            <!--Item categories listing-->
            
            
            <!--Item categories listing end-->
        <br><br><br><br>
        <div class="container-fluid">
                
                    <?php
                    $query = "SELECT * FROM restaurant";
                    $result = mysqli_query($con, $query)or die($mysqli_error($con));
                    $num = mysqli_num_rows($result);
                    if ($num == 0) {
                        echo "No Restaurants Available";
                       }
                    
                    
                    while ($row = mysqli_fetch_array($result)) {?>
                    <div class="col-sm-6" style="padding-top:20px;padding-bottom:20px">
                        
                           
                            
                                <div class="caption"style="background-color:pink">
                                    <center><div  style="padding-top:30px"> <img src="img/<?php echo $row['restaurant_image'];?>" alt="" height="100" width="100"></div></center>
                                   <a href="menu1.php?id=<?php echo $row['restaurant_id'];?>" > <center><?php echo "<h2> ".$row['restaurant_name']."</h2>"; ?></center></a>

                                    <center><?php echo "<h3><b><u> Address:</u></b><p style='text-align:center'> ".$row['restaurant_address']."</p></h3>"; ?></center>
                                    <center><?php echo "<h3><b><u> Phone:</u></b>".$row['restaurant_phone']."</h3>"; ?></center>
									<div style="padding-bottom:10px"></div>
                                </div>
                             
                    </div>
                  <?php  }?>
        </div>
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>