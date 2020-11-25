<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Restaurant</title>
           <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
          <div class="header">
            <nav class="navbar  navbar-fixed-top" style="background-color:orangered">
  <div class="container-fluid">
    
	 <div class="navbar-header">
	<div  class="navbar-brand" style="padding-top:5px"><img src="img/snacks.jpg" height="45" width="60" > </div>
        <DIV  class="navbar-brand" ><b>Zotato</b></DIV>
          
    </div>
   
      <ul class="nav navbar-nav">
          <li ><a href="success.php"style="color:#000000">Home</a></li>
      </ul>
      
    <ul class="nav navbar-nav navbar-right">
		  <?php
                if (isset($_SESSION['email'])) {
                    ?>
        
        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"style="color:#000000"></span><span class="icon-text" style="color:#000000"> Settings</span></a></li>
        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in" style="color:#000000"></span><span class="icon-text" style="color:#000000"> Logout</span></a></li>
                    
                    <?php
                } else {
                    ?>
                    <li><a href="login.php"><i class="fa fa-shopping-cart fa-2x"></i> <span class="glyphicon glyphicon-log-in"style="color:#000000"></span> <span class="icon-text" style="color:#000000" >Login</span></a></li>
      
                 <li><a  href='signup.php'><i class="fa fa-user fa-2x"></i><span class="icon-text"> <span class="glyphicon glyphicon-user"style="color:#000000"></span><span class="icon-text" style="color:#000000">SignUp  </span> </a></li>
                        <?php
                    }
                    ?>
        
        
        
        
        
    </ul>
  </div>
</nav>
</div>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <!--<?php
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>
                        -->
                    </form>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>