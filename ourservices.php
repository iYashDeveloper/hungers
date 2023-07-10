<?php
require_once 'connection.php';
$_SESSION['page'] = "ourservices"
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

    

    <section class="service-section pt-100 pb-70 bg-black bg-overlay-1">
        <div class="container">
            <div class="section-title">
                <h2 class="color-white">We Offer 3 Kinds Of Services</h2>
            </div>
            <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                            <div class="service-item">
                                <div class="service-image">
                                    <img src="assets/images/dinner.png" alt="service">
                                </div>
                                <div class="service-content">
                                    <h3>1. Dine In</h3>
                                    <p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                            <div class="service-item">
                                <div class="service-image">
                                    <img src="assets/images/take.png" alt="service">
                                </div>
                                <div class="service-content">
                                    <h3>2. Take Away</h3>
                                    <p>Making people happy through food & Better taste comes from better food.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 pb-30 offset-md-3 offset-lg-0">
                            <div class="service-item">
                                <div class="service-image">
                                    <img src="assets/images/homed.png" alt="service">
                                </div>
                                <div class="service-content">
                                    <h3>3. Home Delivery</h3>
                                    <p>Time is precious, and we know that, 24/7 available for your service.</p>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>

a
    <div class="video-section p-tb-100">
        <div class="container">
            <div class="">
                <a href="https://www.youtube.com/watch?v=h_YmYLYi65k" id="video-popup"><i
                        class="flaticon-play-button"></i></a>
            </div>
        </div>
    </div>


    <section class="step-section p-tb-100 bg-black">
        <div class="container">
            <div class="section-title">
                <h2 class="color-white">3 Easy Steps To Enjoy</h2>
            </div>
            <div class="steps-box">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="steps-item">
                            <h3>1. Choose</h3>
                            <p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="steps-item">
                            <h3>2. Pay</h3>
                            <p>Pay Through Online Easily. We Use The Most Safe way In Payment.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-0">
                        <div class="steps-item">
                            <h3>3. Enjoy</h3>
                            <p>Enjoy Your Meal From The Core Of Heart & Feel The Taste Inside.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    


    <!-- <section class="testimonial-section p-tb-100 bg-black bg-overlay-1">
        <div class="container">
            <div class="section-title">
                <small>Review</small>
                <h2 class="color-white">Clients Review About Our Food</h2>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of
                            the every ingr edients used in the food. I really Love Fafo.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/client-1.jpg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Angela Carter</h3>
                                <h4 class="carousel-designation">CEO of Rockings</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of
                            the every ingr edients used in the food. I really Love Fafo.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/client-2.jpg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">John Karahan</h3>
                                <h4 class="carousel-designation">Food Bloger</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of
                            the every ingr edients used in the food. I really Love Fafo.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/client-3.jpg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Anthony Artan</h3>
                                <h4 class="carousel-designation">Restaurant Owner</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of
                            the every ingr edients used in the food. I really Love Fafo.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/client-1.jpg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Angela Carter</h3>
                                <h4 class="carousel-designation">CEO of Rockings</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of
                            the every ingr edients used in the food. I really Love Fafo.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/client-2.jpg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">John Karahan</h3>
                                <h4 class="carousel-designation">Food Bloger</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of
                            the every ingr edients used in the food. I really Love Fafo.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/client-3.jpg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Anthony Artan</h3>
                                <h4 class="carousel-designation">Restaurant Owner</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of
                            the every ingr edients used in the food. I really Love Fafo.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/client-1.jpg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Angela Carter</h3>
                                <h4 class="carousel-designation">CEO of Rockings</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of
                            the every ingr edients used in the food. I really Love Fafo.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/client-2.jpg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">John Karahan</h3>
                                <h4 class="carousel-designation">Food Bloger</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of
                            the every ingr edients used in the food. I really Love Fafo.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/client-3.jpg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Anthony Artan</h3>
                                <h4 class="carousel-designation">Restaurant Owner</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="gallery-section p-tb-100 bg-black">
        <div class="container position-relative">
            <div class="section-title">
                <small>Gallery</small>
                <h2 class="color-white">See Our Happy Moments</h2>
            </div>
            <div class="gallery-grid">
                <div class="gallery-grid-item">
                    <a href="assets/images/gallery-lg-1.jpg" title="Gallery 1"><img src="assets/images/gallery-1.jpg"
                            alt="gallery"></a>
                </div>
                <div class="gallery-grid-item">
                    <a href="assets/images/gallery-lg-2.jpg" title="Gallery 2"><img src="assets/images/gallery-2.jpg"
                            alt="gallery"></a>
                </div>
                <div class="gallery-grid-item">
                    <a href="assets/images/gallery-lg-3.jpg" title="Gallery 3"><img src="assets/images/gallery-3.jpg"
                            alt="gallery"></a>
                </div>
                <div class="gallery-grid-item">
                    <a href="assets/images/gallery-lg-4.jpg" title="Gallery 4"><img src="assets/images/gallery-4.jpg"
                            alt="gallery"></a>
                </div>
                <div class="gallery-grid-item">
                    <a href="assets/images/gallery-lg-5.jpg" title="Gallery 5"><img src="assets/images/gallery-5.jpg"
                            alt="gallery"></a>
                </div>
            </div>
            <div class="bg-shape">
                <div class="bg-shape-item">
                    <img src="assets/images/shape-1.png" alt="shape">
                </div>
                <div class="bg-shape-item">
                    <img src="assets/images/shape-3.png" alt="shape">
                </div>
                <div class="bg-shape-item">
                    <img src="assets/images/shape-2.png" alt="shape">
                </div>
            </div>
        </div>
    </section>


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

</html>