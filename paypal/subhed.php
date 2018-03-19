<?php
session_start();
$_SESSION['uid'] = '1';
$_SESSION['username'] = '';
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; 
$paypal_id='subhed-facilitator@hotmail.com';  // sriniv_1293527277_biz@inbox.com
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Products | Store</title>
        <style type="text/css">
            body{
                width: 900px;
                margin: 0 auto;
                margin-top: 50px;
                font:bold 14px arial;
            }
            .product{
                float: left;
                margin-right: 10px;
                border: 1px solid #cecece;
                padding: 10px;
                margin-right: 20px;
            }
            .price{
                text-align: right;
            }
            .btn{
                text-align: center;
}
        </style>
    </head>
    <body>
        <h2>Welcome! <?php echo $_SESSION['username'];?></h2>

        <div class="product">            
            <div class="image">
                <img src="images/teacher.jpg" alt=""  width="197px" height="210px"/>
            </div>
            
           
            <div class="btn">
                <form action='<?php echo $paypal_url; ?>' method='post' name='frmPayPal1'>
                    <input type='hidden' name='business' value='<?php echo $paypal_id;?>'>
                    <input type='hidden' name='cmd' value='_xclick'>

                    <input type='hidden' name='item_name' value='Donation'>
                    
                                   <input name='amount' value='' placeholder="Enter Your Donation Amount in Dollars">

                    <input type='hidden' name='no_shipping' value='1'>
                    <input type='hidden' name='currency_code' value='USD'>
                    <input type='hidden' name='handling' value='0'>
                    <input type='hidden' name='cancel_return' value='http://localhost/paypal/cancel.php'>
                    <input type='hidden' name='return' value='http://localhost/paypal/success.php'>

                    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form> 
            </div>
        </div>

           
    </body>
</html>
