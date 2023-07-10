<?php
    require_once 'connection.php';
    $_SESSION['page']="loactions"

?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/fafo/default/blogs-list-with-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jan 2021 09:54:17 GMT -->
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

<!-- 
    <div class="blog-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row">
               <div class="col-sm-6 col-md-9 col-lg-9 pb-30">
               <div class="row">
               <?php 
					$in= $con->query("select * from fixthali order by fixthaliid desc limit 0,4");
					while($row= mysqli_fetch_array($in))
					{
				?>
					 <div class="col-sm-6 col-md-4 col-lg-4 pb-30 ">
                        <div class="blog-card blog-card-maincolor">
                            <div class="blog-card-thumb">
                                <a href="blog-details.html">
                                <div class=""><img style="border-radius:5px;"  src="<?php echo $row[2]; ?>"></div>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <ul class="blog-entry">
                                </ul>
                                <h3 class="m-0"><a href="blog-details.html"><?php echo $row[1];?></a></h3>
                                <h4><a href="blog-details.html"><?php echo"". $row[3];?></a></h4>
                            </div>
                        </div>
                    </div>
				<?php
					}
				?>
               </div>
               </div>
                <div class="col-sm-6 col-md-3 col-lg-3 pb-30">
                    <div class="sidebar-item around-border sidebar-search">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <button><i class="flaticon-loupe"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-item">
                        <div class="sidebar-title">
                            <h3 class="color-white">Categories</h3>
                        </div>
                        <ul class="sidebar-list">
                            <li>
                                <a href="#">Commercial <span>(08)</span></a>
                            </li>
                            <li>
                                <a href="#">Food Review <span>(04)</span></a>
                            </li>
                            <li>
                                <a href="#">Burger Mania <span>(04)</span></a>
                            </li>
                            <li>
                                <a href="#">Fast Food <span>(14)</span></a>
                            </li>
                            <li>
                                <a href="#">Pizza <span>(10)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-item">
                        <div class="sidebar-title">
                            <h3 class="color-white">Recent Post</h3>
                        </div>
                        <div class="sidebar-recent-post">
                            <div class="sidebar-recent-item">
                                <div class="sidebar-recent-thumb">
                                    <a href="#"><img src="assets/images/blog-nav-1.jpg" alt="blog"></a>
                                </div>
                                <div class="sidebar-recent-content">
                                    <h3><a href="#">Which Secret Recipe Make A Burger</a></h3>
                                    <ul class="blog-entry">
                                        <li><i class="flaticon-calendar-1"></i>20 Oct 2020</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-recent-item">
                                <div class="sidebar-recent-thumb">
                                    <a href="#"><img src="assets/images/blog-nav-2.jpg" alt="blog"></a>
                                </div>
                                <div class="sidebar-recent-content">
                                    <h3><a href="#">How can Pizza's Taste Can Defeat</a></h3>
                                    <ul class="blog-entry">
                                        <li><i class="flaticon-calendar-1"></i>20 Oct 2020</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-recent-item">
                                <div class="sidebar-recent-thumb">
                                    <a href="#"><img src="assets/images/blog-nav-3.jpg" alt="blog"></a>
                                </div>
                                <div class="sidebar-recent-content">
                                    <h3><a href="#">How Combo Offer Can Save Our</a></h3>
                                    <ul class="blog-entry">
                                        <li><i class="flaticon-calendar-1"></i>20 Oct 2020</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <div class="sidebar-title">
                            <h3 class="color-white">Tags</h3>
                        </div>
                        <ul class="blog-tag-list">
                            <li><a href="#">Burger</a></li>
                            <li><a href="#">Taste</a></li>
                            <li><a href="#">Trendy</a></li>
                            <li><a href="#">Yummy Food</a></li>
                            <li><a href="#">Fast Food</a></li>
                            <li><a href="#">Burger</a></li>
                            <li><a href="#">Restaurent</a></li>
                            <li><a href="#">tasty</a></li>
                            <li><a href="#">Pizza</a></li>
                            <li><a href="#">Comparison</a></li>
                            <li><a href="#">Customer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <footer class="bg-overlay-1 bg-black">
	<div class="footer-upper pt-100 pb-80">
    <div class="footer-lower">
		<div class="container">
			<div class="d-flex justify-content-center">
				<div class="footer-lower-item">
					<div class="footer-copyright-text footer-copyright-text-red">
                    <p>Copyright © 2021 <a href="index.php" target="_blank">Hungers.</a>All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<!-- <div class="col-sm-12 col-md-6 col-lg-4 order-2 order-lg-1">
					<div class="footer-content-list footer-content-item">
						<div class="row">
							<div class="col-lg-6">
								jay
							</div>
							<div class="col-lg-6">
								dip	
							</div>
						</div>
					</div>
				</div> -->

                <div class="col-sm-12 col-md-6 col-lg-4 order-1 order-lg-2">
					<img src="assets/images/map1.jpg" style="border-radius: 5px;" width="480px">
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4 order-1 order-lg-2">
					<img src="assets/images/map2.jpg" style="border-radius: 5px;" width="480px">
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 order-3">
					<img src="assets/images/map3.jpg" style="border-radius: 5px;" width="500px">
				</div>
			</div>
		</div>
	</div>
	
</footer>



   <?php require_once 'footer.php' ?>


    <div class="cart-modal-wrapper">
        <div class="cart-modal modal-item">
            <div class="cart-modal-header">
                <h3 class="color-white">Cart 2</h3>
                <div class="cart-modal-close">
                    <i class="flaticon-cancel"></i>
                </div>
            </div>
            <div class="cart-modal-body">
                <h2 class="color-white">My Order</h2>
                <div class="cart-modal-product">
                    <div class="cart-modal-thumb">
                        <a href="shop-details.html">
                            <img src="assets/images/product-1.png" alt="product">
                        </a>
                    </div>
                    <div class="cart-modal-content">
                        <h4><a href="shop-details.html">Crispy Chicken Burger</a></h4>
                        <div class="cart-modal-action">
                            <div class="cart-modal-action-item">
                                <div class="cart-modal-quantity">
                                    <p>1</p>
                                    <p>x</p>
                                    <p class="cart-quantity-price">$ 4.50</p>
                                </div>
                            </div>
                            <div class="cart-modal-action-item">
                                <div class="cart-modal-delete">
                                    <a href="#"><i class="icofont-ui-delete"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-modal-product">
                    <div class="cart-modal-thumb">
                        <a href="shop-details.html">
                            <img src="assets/images/product-2.png" alt="product">
                        </a>
                    </div>
                    <div class="cart-modal-content">
                        <h4><a href="shop-details.html">Red Sause Pizza</a></h4>
                        <div class="cart-modal-action">
                            <div class="cart-modal-action-item">
                                <div class="cart-modal-quantity">
                                    <p>1</p>
                                    <p>x</p>
                                    <p class="cart-quantity-price">$ 3.50</p>
                                </div>
                            </div>
                            <div class="cart-modal-action-item">
                                <div class="cart-modal-delete">
                                    <a href="#"><i class="icofont-ui-delete"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-modal-total">
                    <p>Total</p>
                    <h3>$8.0</h3>
                </div>
                <div class="cart-modal-button">
                    <a href="checkout.html" class="btn full-width">Proceed To Checkout</a>
                    <a href="cart.html" class="btn btn-yellow full-width">View Shopping Cart</a>
                </div>


            </div>
        </div>
    </div>


    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            <span><i class="flaticon-up-arrow"></i></span>
        </div>
    </div>

<?php require_once 'script.php' ?>
</body>

<!-- Mirrored from templates.hibootstrap.com/fafo/default/blogs-list-with-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jan 2021 09:54:18 GMT -->

</html>