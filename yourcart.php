<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="UTF-8">
  <title>Globuzzer - Your Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Kaushan+Script|Roboto:100,300,400,700,800'>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel='stylesheet prefetch' 
            	href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="https://raw.githubusercontent.com/ThisIsDallas/Simple-Grid/master/simplegrid.css">
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
         
  <link rel='stylesheet prefetch' 
             	href='https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css'>
                
  </head>
  
 <body>
	<?php    
	error_reporting(0);
	include('paypal.class.php');  
	?>   
<header>
 
 <span class="u-pull-left"><a href="index.html" ><img src="Logo_frii.png" alt="logo" width="250px" height="50px"/></a></span>
	<div class="u-pull-right">  <a href="#menu" id="toggle"><span></span></a> 
  		<nav role="main" id="menu">
   		  <ul>
     		 <li><div>Products</div></li>
       		 <li><div>Read more</div></li>
     		 <li><div>Partners</div></li>
    	  </ul>
  		</nav>
 	 </div>
  
</header>

<div class="header2"></div>

<div class="container">
 	
     <div class="grid grid-pad">
  		 
         <div class="col-5-12">
     		<form method="post" action="paypal.php"  id="paypalform">
         		<h5 align="center">Your Cart</h5>
				<hr>
    		 	<p align="center">Name of Product: <?php echo $_REQUEST['pname'] ?> </p>
       	        <img src="<?php echo $_REQUEST['pimage'] ?>" width="150px" height="150px">
                <p align="center">Quantity <?php echo $_REQUEST['pquantity'] ?> </p>
                <p><strong align="center">Total price <?php echo $_REQUEST['pprice'] ?>€ + Shipping </strong></p>
             
                <input type="hidden" name="pname" value="<?php echo $_REQUEST['pname'] ?>"/>
                <input type="hidden" name="pprice" value="<?php echo $_REQUEST['pprice'] ?>"/>

		        <button class="btn-1">Pay with paypal	</button>
            </form>                     
		 </div>
    
    
    
  		  <div class="col-7-12">
  		    <div class="sidebar">
    		  <form  method="post" action="thankyou.html"  id="yourcart">
             	<h5>Other Payment Option</h5> <hr />
				<p><i class="fa fa-credit-card fa-lg" style="color:#E85152"></i><strong>Credit Card</strong></p>
      		    <p> Card Number:<input type="number" required> </p><br />
       			<p>Verification number <input type="number" required><p> <br />
                 <span>Card expires on<input type="date" class="datepicker" min="2018-05-27" required>
         		 </span> 
                 <br /><br /><br /><br />
				<button class="btn-2">Buy now</button>
              </form>
   		   </div>
   		 </div>
         
      </div>
   </div>

<div class="footer"></div>

   <script  src="index.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.6/angular.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script  src="cart.js"></script>

</body>
</html>