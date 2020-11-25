   



 





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
                                <h4>ADD MENU ITEMS</h4>
                            </div>
                            <div class="panel-body">
                               
                        <form action="addmenu_script.php" method="post" enctype="multipart/form-data">
                                     <div class="form-group"><!--food_name-->
                                     <label for="food_name">Food Name:</label>
                                            <input type="text" class="form-control" id="food_name"  placeholder="Enter Food Name" name="food_name" required>
                                     </div>
									 
									 
                                     <div class="form-group"><!--cost-->
                                            <label for="cost">Cost :</label>
                                            <input type="number" class="form-control" id="cost"   placeholder="10000" name="cost" required>
                                     </div>
									 
									 
	                                 <div class="form-group"><!--cuisines-->
                                            <label for="cuisines">Restaurant :</label>
                                         
                                            <select type="text" class="form-control" id="cuisines" name="cuisines"  required>
                                                                        <?php $query = "SELECT * FROM restaurant";
                                                                                $result = mysqli_query($con, $query)or die($mysqli_error($con));
                                                                                $num = mysqli_num_rows($result);
                                                                                 if ($num == 0) {
                                                                                 echo "No Restaurants Available";
                                                                                 }
                    
                    
                                                                            while ($row = mysqli_fetch_array($result)){?>
                                                                        <option value="<?php echo$row['restaurant_name']?>"><?php echo$row['restaurant_name']?></option>
                                                                        <?php }?>
                                                                        </select>
                                         </div>
							   
	                                <div class="form-group">
                                         <input type="file" accept="img/*" name="foodpic" required/>Food Snaps 
                                    </div>
   
                                    <button type="submit" name="add" class="btn btn-primary" onclick="alert('item is added successfully')">ADD Item</button>
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

























