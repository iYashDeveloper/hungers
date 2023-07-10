<?php
require_once 'connection.php';
$_SESSION['page'] = "thali-detalis";
require_once 'userquery.php';

if ($_REQUEST['id'] != "") {
    $_SESSION['proid'] = $_REQUEST['id'];
    header('location:thali-details.php');
}
 $data1=$con->query("select * from register where userid like '$_SESSION[userid]'");
 $row1=mysqli_fetch_array($data1);

   // echo $row1[2];


    $in = $con->query("select * from fixthali where fixthaliid=$_SESSION[proid]");
    $r = mysqli_fetch_array($in);

    date_default_timezone_set('Asia/Kolkata');
    $ireviewdate = date('Y-m-d');

if (isset($_REQUEST['reviewfixthali'])) {

    $data = $con->query("select * from fixthalireview where userid like '$_SESSION[userid]' and fixthaliid=$_SESSION[proid]");
    $row = mysqli_fetch_array($data);
    if ($row[0] == "") {
        $in = $con->query("insert into fixthalireview values('$_SESSION[userid]','$_SESSION[proid]',0,'$ireviewdate','$_REQUEST[reviewtext]')");
        header('location:thali-details.php');
    } else {
        header('location:thali-details.php');
    }
}

if (isset($_REQUEST['addcartthali']))
{
    $thaliin=$con->query("insert into cart values('$_SESSION[userid]',$_SESSION[proid],NULL,0,$r[3])");
    $thaliin=$con->query("insert into carthistory values('$_SESSION[userid]',$_SESSION[proid],NULL,0,$r[3])");
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

    <div class="product-details-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row align-items-center">

                    <div class="col-sm-12 col-md-12 col-lg-5 pb-30">
                        <div class="product-details-item">
                            <div class="product-details-slider">
                                <div class="product-details-for popup-gallery">

                                    <div class="product-for-item">
                                        <img class="text-center" style="border-radius:5px;" width="480px" src="<?php echo $r[2]; ?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6 pb-30">
                        <div class="product-details-item">
                            <div class="product-details-caption">
                                <div class="product-status product-status-danger mb-20">
                                    New
                                </div>
                                <h3 class="mb-20 color-white"><?php echo $r[1]; ?></h3>
                                <h4 class="mb-20 product-id"><?php echo "₹ " . $r[3]; ?></h4>
                                <div class="mb-20">

                                    <ul class="rateour p-0">
                                        <li>
                                            <?php
                                            $data = $con->query("select avg(rate) from fixthalirate where fixthaliid=$_SESSION[proid]");
                                            $row = mysqli_fetch_array($data);

                                            $fullrate = $row[0];
                                            $rounrate = floor($fullrate);
                                            $howmuch = $fullrate - $rounrate;

                                            // echo $fullrate;
                                            // echo $rounrate;
                                            // echo $howmuch;

                                            for ($i = 1; $i <= 5; $i++) {
                                                if ($row[0] == $rounrate) {
                                                    if ($i <= $row[0]) {
                                            ?>
                                                        <i style="color:#fbc206;" class="flaticon-star-1"></i>
                                                        <!-- bharelo -->
                                                    <?php
                                                    } else {
                                                    ?>

                                                        <i style="color:#fbc206;" class="flaticon-star-2"></i>
                                                        <?php
                                                    }
                                                } else {
                                                    if ($i <= $rounrate + 1) {
                                                        if ($i == $rounrate + 1) {
                                                            if ($howmuch > 0.50) {
                                                        ?>

                                                                <i style="color:#fbc206;" class="flaticon-star-1"></i>
                                                            <?php
                                                            } else {
                                                            ?>

                                                                <i style="color:#fbc206;" class="flaticon-star-half-empty"></i>
                                                            <?php
                                                            }
                                                        } else {
                                                            ?>

                                                            <i style="color:#fbc206;" class="flaticon-star-1"></i>
                                                        <?php
                                                        }
                                                    } else {
                                                        ?>

                                                        <i style="color:#fbc206;" class="flaticon-star-2"></i>
                                            <?php
                                                    }
                                                }
                                            }

                                            ?>

                                        </li>

                                    </ul>

                                    <p>(<?php echo $rounrate; ?> Reviews)</p>
                                </div>
                                <div class="">
                                    <li>
                                        <?php
                                        if ($_SESSION['userid'] == "") {
                                        ?>
                                            <!-- <button class="btn btn-icon product-quantity-item" disabled="" title="login frist,thern give rate">rate us</button> -->
                                        <?php
                                        } else {
                                        ?>
                                            <!-- <button class="cart-quantity product-quantity-item" onclick="forratee('fixthalirate',<?php echo $_SESSION['proid']; ?>,'<?php echo $_SESSION['userid']; ?>',0);" data-toggle="modal" data-target="#rateus" class="btnl">Rate us</button> -->
                                        <?php
                                        }
                                        ?>
                                    </li>
                                </div>
                                <div class="product-status1 product-status-danger mb-20">
                                    Rate us
                                </div>


                                <div class="product-action-info mb-20">
                                    <div class="d-flex flex-wrap align-items-center
                                    product-quantity">
                                        <?php
                                        if($_SESSION['userid']=="")
                                        {
                                        ?>
                                        <button class="withoutlogin" disabled title="Login first" name="addcart">
                                            Log in first
                                            <i class="flaticon-shopping-cart-black-shape"></i>
                                        </button>
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                        <form method="POST">
                                            <button type="submit" name="addcartthali" class="withinlogin" >
                                                Add To Cart
                                                <i class="flaticon-shopping-cart-black-shape"></i>
                                            </button>

                                        </form>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="product-action-info">
                                    <div class="product-add-wishlist">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        <div class="product-details-tab below-border">
            <ul class="product-details-tab-list">

                <li data-product-tab-list="2">Reviews <span></span></li>
            </ul>
            <div class="product-tab-information">

                <div class="product-tab-information-item" data-product-details-tab="2">
                    <div class="product-review-list">
                        <?php
                        $data = $con->query("select i.*,r.* from fixthalireview i,register r where i.userid=r.userid and i.fixthaliid=$_SESSION[proid]");
                        while ($row = mysqli_fetch_array($data)) {
                        ?>
                            <div class="testimonial-carousel-item bg-main product-review-item">

                                <p class="carousel-para"><?php echo $row[4]; ?></p>
                                <div class="carousel-info-grid">
                                    <div class="carousel-thumb">

                                        <img src="<?php echo $row[12]; ?>">
                                    </div>
                                    <div class="carousel-info text-end">
                                        <div class="review-star">

                                        </div>
                                        <h3 class="carousel-name"><?php echo $row[8], ' ', $row[9]; ?></h3>

                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>

                    <div class="product-review-area">
                        <div class="sub-section-title">
                            <h3 class="color-white">Add Your Reviews</h3>
                        </div>
                        <form>

                            <div class="comment-input-area">
                                <form name="reviewite" method="post" action="">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" name="name" required="" id="name" class="form-control" placeholder="Name*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="email" name="emal" required="" id="emal" class="form-control" placeholder="Email*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <textarea name="reviewtext" required="" class="form-control" id="message" rows="5" placeholder="Your Comment*"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-checkbox mb-20">
                                                <input type="checkbox" checked="" disabled class="custom-control-input" id="review1">
                                                <label class="custom-control-label" for="review1">Save my name and
                                                    website in this browser for the next time I comment.</label>
                                            </div>
                                        </div>
                                        <?php
                                        if($_SESSION['userid']=="")
                                        {
                                        ?>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <button class="btn full-width" type="submit">Login First</button>
                                        </div>
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                         <div class="col-sm-12 col-md-12 col-lg-12">
                                            <button class="btn full-width" type="submit" name="reviewfixthali">Post Your Review</button>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>






    <?php require_once 'footer.php' ?>




    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            <span><i class="flaticon-up-arrow"></i></span>
        </div>
    </div>


    <?php require_once 'script.php' ?>
</body>


</html>
