<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
 require("includes/common.php");
   $query = "SELECT * FROM restaurant";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num == 0) {
    echo "No Restaurants Available";
}
    
?>
<html>
    <head>
        <title>Online review </title>
     <!--  <link rel="stylesheet" type="text/css" href="style.css" > 
       <!--        Latest compiled and minified CSS -->
	    <meta charset="UTF-8">
  
        <link rel="stylesheet" type="text/css" href="style.css" > 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   
       
    </head>
	<div class="header">
            <nav class="navbar  navbar-fixed-top" style="background-color: orangered">
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
                    <li><a href = "feedback.php"><span class = "glyphicon glyphicon-star" style="color:#000000"></span><span class="icon-text" style="color:#000000"> Feedback</span> </a></li>
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
	
	  
     
                         
            
            <div class="container-fluid" style="padding-top:100px">
	  <div class="row">
                    <div class="col-md-7 col-md-offset-3">
                        <div class="panel panel-primary" style="background: #FF6F61"  >
                     
                            <form action="review_script.php" method="POST" role="form"  enctype="multipart/form-data">
							<div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
									<h2><b style="padding-left:10px;padding-right:10px;">Feedback:</h2><br><br>
									<div class="form-group form-inline" >
								
                           
                            <div class="input-group form-group" style="padding-left:10px;padding-right:10px;"> 
                               
                                    <h4>Restaurant Name</h4>  <select name="name">
                                                                 <?php while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option value="<?php echo $row['restaurant_name']; ?>"> <?php echo "<h4> ".$row['restaurant_name']."</h4>"; ?></option>
                                                                    <?php }?>  
                                                                    </select>
                                                                 </div>                                            
                                                                            <br><br>                                                
                                   <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
									<h4>Restaurant Ratings</h4>
									</div>
									<div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
									<div class="rate" style="padding-left:140px">
									
   <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
				</div>		
				
</div>				
<div class="form-group form-inline" >
								
                                   <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
									<h4>Food taste</h4>
									</div>
									<div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
									<div class="rate1" style="padding-left:210px">
									
    <input type="radio" id="sstar5" name="rate1" value="5" />
    <label for="sstar5" title="text">5 stars</label>
    <input type="radio" id="sstar4" name="rate1" value="4" />
    <label for="sstar4" title="text">4 stars</label>
    <input type="radio" id="sstar3" name="rate1" value="3" />
    <label for="sstar3" title="text">3 stars</label>
    <input type="radio" id="sstar2" name="rate1" value="2" />
    <label for="sstar2" title="text">2 stars</label>
    <input type="radio" id="sstar1" name="rate1" value="1" />
    <label for="sstar1" title="text">1 star</label>
  </div>
				</div>		
</div>
<div class="form-group form-inline" >
								
                                   <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
									<h4>Food Quality</h4>
									</div>
									<div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
									<div class="rate2" style="padding-left:190px">
									
    <input type="radio" id="ssstar5" name="rate2" value="5" />
    <label for="ssstar5" title="text">5 stars</label>
    <input type="radio" id="ssstar4" name="rate2" value="4" />
    <label for="ssstar4" title="text">4 stars</label>
    <input type="radio" id="ssstar3" name="rate2" value="3" />
    <label for="ssstar3" title="text">3 stars</label>
    <input type="radio" id="ssstar2" name="rate2" value="2" />
    <label for="ssstar2" title="text">2 stars</label>
    <input type="radio" id="ssstar1" name="rate2" value="1" />
    <label for="ssstar1" title="text">1 star</label>
  </div>
				</div>		
</div>				
		<div class="form-group form-inline" >
								
                                   <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
									<h4>Customer service</h4>
									</div>
									<div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
									<div class="rate3" style="padding-left:150px">
									
    <input type="radio" id="sssstar5" name="rate3" value="5" />
    <label for="sssstar5" title="text">5 stars</label>
    <input type="radio" id="sssstar4" name="rate3" value="4" />
    <label for="sssstar4" title="text">4 stars</label>
    <input type="radio" id="sssstar3" name="rate3" value="3" />
    <label for="sssstar3" title="text">3 stars</label>
    <input type="radio" id="sssstar2" name="rate3" value="2" />
    <label for="sssstar2" title="text">2 stars</label>
    <input type="radio" id="sssstar1" name="rate3" value="1" />
    <label for="sssstar1" title="text">1 star</label>
  </div>
				</div>		
</div>		
						
							
							
							
							
							
							
							  <!--<div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
									<h4>Overall Rating</h4>
									<div class="rate">
    <input type="radio" id="star5" name="orate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="orate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="orate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="orate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="orate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
				</div>				-->
                                   <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <h3>Write a review</h3>
                                </div>
								
								<div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                    
                                    <textarea rows="5" cols="50" name="review" class="form-control" placeholder="Enter your review here"  aria-describedby="basic-addon5"></textarea required>
                                </div>
								
                                
                                  



									
                               <DIV style="padding-left:10px;padding-right:10px;">
                               <button type="submit"  name="submit" class="btn btn-primary" >Post review</button><br><br></DIV>
								 
								
                            </form>
                        </div>
                    </div>
                </div>
            </div>

</body>
</html>