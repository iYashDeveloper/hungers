<?php
    require('config.php');
    require('razorpay-php/Razorpay.php');
    require_once 'connection.php';
    $_SESSION['page']="cart";

    if ($_REQUEST['id'] != "")
     {
        $_SESSION['proid'] = $_REQUEST['id'];
        header('location:cart.php');
    }
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



    <section class="cart-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="cart-table cart-table-dark">
                <table>
                    <?php
                        $in = $con->query("select * from cart where userid='$_SESSION[userid]'");
                        $r = mysqli_fetch_array($in);
                       if($r[0]!="")
                       {

                                 $dish1=$con->query("select SUM(amount) from cart where userid='$_SESSION[userid]'");
                                 $rqj=mysqli_fetch_array($dish1);

                         ?>

                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Image</th>
                                    <th></th>
                                    <th>Product</th>
                                    <th></th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                        <?php
                         }
                         else
                         {
                             ?>

                             <?php
                         }
                        ?>

                    <tbody>
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
                        <tr>
                            <td class="cancel"><a href="#"></a></td>
                            <td>
                                <div class="product-table-info">
                                    <div class="product-table-thumb">
                                        <?php
                                        if($rq1[2])
                                        {
                                        ?>
                                            <img class="text-center" style="border-radius:5px;" src="<?php echo $rq1[2]; ?>">
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if($rq3[3])
                                        {
                                        ?>
                                            <img class="text-center" style="border-radius:5px;" src="<?php echo $rq3[3]; ?>">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </td>
                            <td class="td-product-name"></td>
                            <?php
                            if($rq1[1])
                            {
                            ?>
                            <td class="td-product-name"><?php echo $rq1[1]; ?></td>
                            <?php
                            }
                            ?>
                             <?php
                            if($rq3[1])
                            {
                            ?>
                            <td class="td-product-name"><?php echo $rq3[2]; ?></td>
                            <?php
                            }
                            ?>
                            <td class="td-product-name"></td>
                            <td class="td-total-price"><?php echo "₹ " . $r[4] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                        <?php
                        $in=$con->query("select * from cart where userid='$_SESSION[userid]'");
                        $r = mysqli_fetch_array($in);
                       if($r[0]!="")
                       {

                                 $dish1=$con->query("select SUM(amount) from cart where userid='$_SESSION[userid]'");
                                 $rqj=mysqli_fetch_array($dish1);

                         ?>
                                <tr>
                            <td class="cancel"><a href="#"><i class=''></i></a></td>
                            <td>

                            </td>
                            <td class="td-product-name"><?php //echo $r[1]; ?></td>
                            <td></td>
                            <td>Total Amount</td>

                            <td class="td-total-price"><?php echo "₹ " .  $rqj[0] ?></td>
                        </tr>
                        <?php
                         }
                         else
                         {
                             ?>
                                <h1 class="text-center" style="color:white">No Item</h1>
                             <?php
                         }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="row justify-content-between align-items-center mt-30">
                <div class="col-sm-12 col-md-7 col-lg-5">
                    <div class="">
                        <form>
                            <div class="form-group">

                            </div>
                        </form>
                    </div>
                </div>
                <?php
                        $in = $con->query("select * from cart where userid='$_SESSION[userid]'");
                        $r = mysqli_fetch_array($in);
                       if($r[0]!="")
                       {

                                 $dish1=$con->query("select SUM(amount) from cart where userid='$_SESSION[userid]'");
                                 $rqj=mysqli_fetch_array($dish1);

                         ?>

                            <div class="col-sm-12 col-md-4 col-lg-3">
                                <div class="cart-update cart-info-item">
                                    <a class="btn full-width"  href="checkout.php">
                                        Check Out Now
                                    </a>
                                </div>
                            </div>
                        <?php
                         }
                         else
                         {
                             ?>

                             <?php
                         }
                        ?>

            </div>

        </div>
    </section>




<?php require_once 'footer.php' ?>

    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            <span><i class="flaticon-up-arrow"></i></span>
        </div>
    </div>

<?php require_once 'script.php' ?>
</body>

</html>
