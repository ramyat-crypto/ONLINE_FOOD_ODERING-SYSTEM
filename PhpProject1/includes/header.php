<div class="header">
            <nav class="navbar  navbar-fixed-top" style="background-color: orangered">
  <div class="container-fluid">
    <div class="navbar-header">
	
	<div  class="navbar-brand" style="padding-top:5px"><img src="img/snacks.jpg" height="45" width="60" > </div>
        <DIV  class="navbar-brand" ><b>Zotato</b></DIV>
        
    
    </div>
      <ul class="nav navbar-nav">
      <li ><a href="index.php"style="color:#000000">Home</a></li>
      </ul>
      
    <ul class="nav navbar-nav navbar-right">
		  <?php
                if (isset($_SESSION['email'])) {
                    ?>
        
        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart" style="color:#000000"></span><span class="icon-text" style="color:#000000"> Cart </span></a></li>
       
        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in" style="color:#000000"></span> <span class="icon-text" style="color:#000000">Logout</span></a></li>
                   
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




















