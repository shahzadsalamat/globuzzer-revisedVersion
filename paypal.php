<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PayPal - confirmation</title>

<link href="style_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php    
error_reporting(0);
include('paypal.class.php');  
if($_REQUEST['submit']!="") {
	$pakage_name	=	$_REQUEST['package'];
	$price			=	$_REQUEST['price'];
	$p = new paypal_class();             
	$p->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';
	$rand	=	rand(1209,45210);
	$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	$success_script = 'http://complete_url/success.php?uid='.$rand;
	$cancel_script  = 'http://complete_url/cancel.php?uid='.$rand;
	$p->add_field('business', 'shahzad.salamat@yahoo.com');
	$p->add_field('return', $success_script);
	$p->add_field('currency_code','USD');
	$p->add_field('cancel_return', $cancel_script);
	$p->add_field('notify_url', $this_script.'?action=ipn');
	$p->add_field('item_name', "Package Name :".$pakage_name);
	$p->add_field('amount', $price);
	$p->submit_paypal_post();
} 
?>   


<div>
     <form>
    	  <h2 align="center">Total price of Product: <?php echo $_REQUEST['pprice'] ?> </h2>
          <h2 align="center">Product name: <?php echo $_REQUEST['pname'] ?> </h2>
		  <input type="radio" name="price" value="<?php echo $_REQUEST['pprice'] ?>" /> 
          <input type="text" name="package1" value="<?php echo $_REQUEST['pname'] ?> costs <?php echo $_REQUEST['pprice'] ?> " readonly />
    	 <input  type="submit" name="submit" value="Accept and Continue" />
	</form>                     

</div>      
            
  </body>
</html>