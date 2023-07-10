<?php
    require('config.php');
    require('razorpay-php/Razorpay.php');
    require_once 'connection.php';
    $_SESSION['page']="checkout";

    if ($_REQUEST['id'] != "")
     {
        $_SESSION['proid'] = $_REQUEST['id'];
        header('location:cart.php');
    }


    $dish1=$con->query("select SUM(amount) from cart where userid='$_SESSION[userid]'");
    $rq2=mysqli_fetch_array($dish1);

    $datapay=$con->query("select * from register where userid='$_SESSION[userid]'");
    $rq3=mysqli_fetch_array($datapay);

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//check all field are set or not?
$name=$rq3[3];
$mail=$_SESSION['userid'];
$amount=$rq2[0];
$phno=$rq3[6];


//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => 3456,
    'amount'          => $amount * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Hungers",
    "description"       => "Hungers - keep calm and eat strong",
    "image"             => "https://vishvdesai.000webhostapp.com/assets/images/logo.png",
    "prefill"           => [
    "name"              => $name,
    "email"             => $mail,
    "contact"           => $phno,
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => rand(1000,9999),
    ],
    "theme"             => [
    "color"             => "#4400ff"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

?>
<!DOCTYPE html>
<html lang="zxx">

<?php require_once 'head.php' ?>
<body>

  <div class="preloader bg-main">
    <div class="preloader-wrapper">
      <div class="preloader-grid">
        <div class="preloader-grid-item preloader-grid-item-1"></div>
        <div class="preloader-grid-item preloader-grid-item-2"></div>
        <div class="preloader-grid-item preloader-grid-item-3"></div>
        <div class="preloader-grid-item preloader-grid-item-4"></div>
        <div class="preloader-grid-item preloader-grid-item-5"></div>
        <div class="preloader-grid-item preloader-grid-item-6"></div>
        <div class="preloader-grid-item preloader-grid-item-7"></div>
        <div class="preloader-grid-item preloader-grid-item-8"></div>
        <div class="preloader-grid-item preloader-grid-item-9"></div>
      </div>
    </div>
  </div>



<?php require_once 'header.php' ?>
<?php require_once 'subheader.php' ?>




  <div class="checkout-section pt-100 pb-70 bg-black">
    <div class="container">
      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12 pb-30">
          <div class="checkout-item">
            <div class="checkout-details cart-details mb-30">
              <h3 class="cart-details-title color-white">Cart Totals</h3>
              <div class="cart-total-box">
              <?php

                $in = $con->query("select * from cart where userid='$_SESSION[userid]'");
                while ($r = mysqli_fetch_array($in))
                {
                    $dish=$con->query("select * from fixthali where fixthaliid=$r[1]");
                    $rq1=mysqli_fetch_array($dish);


                    $item=$con->query("select * from item where itemid=$r[2]");
                    $rq3=mysqli_fetch_array($item);

                        $dish1=$con->query("select SUM(amount) from cart");
                        $rq2=mysqli_fetch_array($dish1);

                ?>
                    <?php
                    if($rq1[1])
                    {
                    ?>
                    <div class="cart-total-item">
                            <h4 class="color-main "><?php echo $rq1[1]; ?></h4>
                            <p><?php echo "₹ " . $r[4] ?></p>
                    </div>

                    <?php
                    }
                    ?>

                    <?php
                    if($rq3[1])
                    {
                    ?>
                    <div class="cart-total-item">
                        <h4 class="color-main "><?php echo $rq3[2]; ?></h4>
                        <p><?php echo "₹ " . $r[4] ?></p>
                    </div>

                    <?php
                    }
                    ?>
                  <?php
                }
                ?>

                    <?php
                    $in = $con->query("select * from cart where userid='$_SESSION[userid]'");
                    $r = mysqli_fetch_array($in);
                    if($_SESSION['userid']==$r[0])
                    {

                        $dish1=$con->query("select SUM(amount) from cart where userid='$_SESSION[userid]'");
                        $rqj=mysqli_fetch_array($dish1);

                    ?>
                        <div class="cart-total-item cart-total-bold">
                        <h4 class="color-white">Total</h4>
                        <p><?php echo "₹ " .  $rqj[0] ?></p>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                        <div class="">
                        <div class="cart-update cart-info-item">
                            <a class="btn full-width"  id="rzp-button1">
                                Pay Now
                            </a>
                        </div>
                    </div>
                        </div>
                    </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php require_once 'footer.php' ?>

  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="success.php" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
    <input type="hidden"  name="name" value="<?php echo $name; ?>">
    <input type="hidden"  name="mail" value="<?php echo $mail; ?>">
    <input type="hidden"  name="phno" value="<?php echo $phno; ?>">
    <input type="hidden"  name="amount" value="<?php echo $amount; ?>">

</form>
<script>
// Checkout details as a json
var options = <?php echo $json?>;

/**
 * The entire list of Checkout fields is available at
 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
 */
options.handler = function (response){
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();
};

// Boolean whether to show image inside a white frame. (default: true)
options.theme.image_padding = false;

options.modal = {
    ondismiss: function() {
        console.log("This code runs when the popup is closed");
    },
    // Boolean indicating whether pressing escape key
    // should close the checkout form. (default: true)
    escape: true,
    // Boolean indicating whether clicking translucent blank
    // space outside checkout form should close the form. (default: false)
    backdropclose: false
};

var rzp = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp.open();
    e.preventDefault();
}
</script>

  <div class="scroll-top" id="scrolltop">
    <div class="scroll-top-inner">
      <span><i class="flaticon-up-arrow"></i></span>
    </div>
  </div>

  <?php require_once 'script.php' ?>

</body>

</html>
