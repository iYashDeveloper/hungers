<?php

require('config.php');
require_once 'connection.php';

require('razorpay-php/Razorpay.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
            $_SESSION['paymentid']=$_POST['razorpay_payment_id'];

        $in = $con->query("select * from cart where userid='$_SESSION[userid]'");
        while ($r = mysqli_fetch_array($in))
        {

            if($r[2]=="")
            {


                $thali=$con->query("insert into bill values('$_SESSION[userid]',$r[1],NULL,0,$r[4],'$_SESSION[paymentid]',0)");
                $row=mysqli_fetch_array($in);
               

            }
            elseif($r[1]=="")
            {

                $item=$con->query("insert into bill values('$_SESSION[userid]',NULL,$r[2],0,$r[4],'$_SESSION[paymentid]',0)");
                $row=mysqli_fetch_array($in);
            

            }

        }


        $del=$con->query("delete from cart where userid='$_SESSION[userid]'");
        $row=mysqli_fetch_array($del);

     header('location:index.php');


}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
?>
</body>
</html>
