<?php
require("includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>payment| Restaurant</title>
          <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

    <body>
        <?php
        include 'includes/header.php';
        
        ?>
        
 <div class="row text-center" id="cards">
                <div class="col-md-4 col-sm-6 col-md-offset-4 home-feature">
                    <h2><strong>MAKE PAYMENT</strong></h2>
                    <div class="thumbnail">
                        
                        <img src="img/cards.jpg" alt="">
                        
                    </div>
                </div>
 </div>
        <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                       
                        <form  action="payments_script.php" method="POST">
                            <div class="form-group">
                             Cardno:   <input class="form-control" type="number" placeholder="cardno" name="cardno"  required = "true" >
                            </div>
                            <div class="form-group">
                               Name on the  card: <input type="text" class="form-control"  placeholder="Name on card" name="cardname" required = "true">
                            </div>
                            <div class="form-group">
                           Card type:     <input type="text" class="form-control" placeholder="cardtype"  name="cardtype" required = "true">
                            </div>
                            <div class="form-group">
                              Expiry Month:  <select name="expiry_month"><option value="Jan">Jan</option><option value="Feb">Feb</option><option value="Mar">Mar</option><option value="Apr">Apr</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="Aug">Aug</option><option value="Sep">Sep</option><option value="Oct">Oct</option><option value="Nov">Nov</option><option value="Dec">Dec</option></select>
                               Expiry Year:  <select name="expiry_year"><option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                     <option value="2021">2021</option>
                                      <option value="2022">2022</option>
                                       <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                </select>
                            </div>
                            <div class="form-group">
                               CVV No: <input  type="number" class="form-control"  placeholder="CVV NO" name="cvv" required = "true">
                            </div>
                            <div class="form-group">
                              Total amount:  <input  type="float" class="form-control" value="<?php
                                          $total = $_GET['price'];  
                                          $query="INSERT into bill_temp(total_amt,customer_id)values(".$total.",".$_SESSION['customer_id'].")";
                                          mysqli_query($con, $query)or die($mysqli_error($con));
                                          $query23="select bill_id from bill_temp where customer_id=".$_SESSION['customer_id'];
                                          $result=mysqli_query($con, $query23)or die($mysqli_error($con));
                                          $row=mysqli_fetch_array($result);
                                          $id=$row['bill_id'];
                                          
                                          $query2="INSERT into bill(total_amt,customer_id)values(".$total.",".$_SESSION['customer_id'].")";
                                        
                                           mysqli_query($con, $query2)or die($mysqli_error($con));
                                           echo $total;  
                                         
                                        ?>" name="total_amt" required = "true">
                            </div>
                            
                            
                            
                            <div class="form-group">
                               Delivery Address: <input type="text" class="form-control"  placeholder="deliver" name="delivery" required = "true">
                            </div>
                             <button type="submit" name="submit" class="btn btn-primary">Pay Now</button>
                        </form>
                    </div>
                </div>
 </body>