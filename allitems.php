<?php
require_once 'connection.php';
$_SESSION['page'] = "allitems";

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


    <div class="blog-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row">
               
               <?php
					$in= $con->query("select * from item");
					while($row= mysqli_fetch_array($in))
					{
                        $cat=$con->query("select * from category where categoryid=$row[0]");
                        $rowc= mysqli_fetch_array($cat);
				?>
                    <div class="col-sm-12 col-md-12 col-lg-4 pb-30">
                        <div class="product-card product-card-dark">
                            <div class="product-card-thumb">
                                <div class="product-card-thumb-inner">
                                    <img class="jaydipi" style="border-radius:5px; max-height:290px; background-color:red;"  src="<?php echo $row[3]; ?>">

                                        <div class="product-card-button">
                                            <form action="" method="POST" name="addcart">
                                                    <a href="itemdetails.php?id=<?php echo $row[1];?>" class="btn">More</a>
                                            </form>
                                        </div>
                                </div>
                            </div>
                            <div class="product-card-content">
                                <h3><a href="shop-details.html"><?php echo $row[2];?></a></h3>
                                    <h4 class="product-price"><?php echo $rowc[1];?></h4>
                            </div>
                        </div>
                    </div>

				<?php
					}
				?>
               
                
            </div>
        </div>
    </div>



    
    <!-- end model -->

    <?php require_once 'footer.php' ?>




    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            <span><i class="flaticon-up-arrow"></i></span>
        </div>
    </div>

    <?php require_once 'script.php' ?>
</body>


</html>
