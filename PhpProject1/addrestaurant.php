<?php
require("includes/common.php");

// Redirects the user to products page if logged in.

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Menu | Restaurant</title>

         <link rel="stylesheet" href="adminstyle.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>

    <body id="page-top">
          <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="admin.php">admin</a>
      
      <a class="navbar-brand mr-1" href="logout_script.php">LOGOUT</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
 </nav>
        
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >     

                            <div class="panel-heading">
                                <h4>ADD RESTAURANT</h4>
                            </div>
                            <div class="panel-body">
                               
                                <form  action="addrestaurant_script.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group"><!--restaurant_phone-->
                                            <label for="rphone">Restaurant id:</label>
                                            <input type="number" class="form-control"  placeholder="Enter Restaurant id"  name="rid" required>
                                     </div>				 
	                                 
                                     <div class="form-group"><!--restaurant_name-->
                                     <label for="rname">Restaurant Name:</label>
                                            <input type="text" class="form-control"   placeholder="Enter Restaurant Name" name="rname" required>
                                     </div>
									 
									 
                                     <div class="form-group"><!--restaurant_address-->
                                            <label for="raddress">Address :</label>
                                            <input type="text" class="form-control"  placeholder="Enter Restaurant Address"  name="raddress" required>
                                     </div>
									 
					<div class="form-group"><!--restaurant_phone-->
                                            <label for="rphone">Phone:</label>
                                            <input type="number" class="form-control"  placeholder="Enter Restaurant Phone"  name="rphone" required>
                                     </div>				 
	                                 
							   
	                                <div class="form-group">
                                         <input type="file" accept="img/*" name="restopic" required/>Restaurant Snaps 
                                    </div>
   
                                    <button type="submit" name="add" class="btn btn-primary" onclick="alert('Restaurant is added successfully')">ADD Restaurant</button>
									<br>
					
                                                                        
                                                                        
                                                                        
                               </form>
                                

				   
			</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    </body>
</html>
