<?php 
require_once 'connection.php';
$_SESSION['page']="contactus"
?>
<!DOCTYPE html>
<html lang="zxx">


<?php require_once'head.php' ?>

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

    <div class="contact-us-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="contact-item">
                        <div class="contact-item-title text-center">
                            <h3 class="color-white">Sub branch-1</h3>
                        </div>
                        <div class="contact-item-info">
                            <div class="contact-info-list">
                                <h3>Address</h3>
                                <p>opposite Dr. Shyama Prasad Mukharji Lake Garden, Near, Gajera Cir, Katargam, Surat, Gujarat 395004</p>
                            </div>
                            <div class="contact-info-list">
                                <h3>E-mail</h3>
                                <p><a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#325a575e5e5d725453545d1c515d5f"><span
                                            class="__cf_email__"
                                            data-cfemail="18707d747477587e797e77367b7775">foodfast@gmail.com&#160;</span></a>
                                </p>
                            </div>
                            <div class="contact-info-list">
                                <h3>Phone</h3>
                                <p><a href="tel:001-964-565-87652">+91 83947 78329</a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="contact-item">
                        <div class="contact-item-title text-center">
                            <h3 class="color-white">Sub branch-2</h3>
                        </div>
                        <div class="contact-item-info">
                            <div class="contact-info-list">
                                <h3>Address</h3>
                                <p>Maruti Chambers, Katargam Rd, Peoples Bank Char Rasta, Gotalawadi, Tunki, Katargam, Surat, Gujarat 395004</p>
                            </div>
                            <div class="contact-info-list">
                                <h3>E-mail</h3>
                                <p><a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#6f070a03030030180a1c1b06010b060a1c2f090e0900410c0002"><span
                                            class="__cf_email__"
                                            data-cfemail="7b131e171714240c1e080f12151f121e083b1d1a1d1455181416">kingkong098@gmail.com&#160;</span></a>
                                </p>
                            </div>
                            <div class="contact-info-list">
                                <h3>Phone</h3>
                                <p><a href="tel:009-964-565-87652">+91 63854 93598</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="contact-item">
                        <div class="contact-item-title text-center">
                            <h3 class="color-white">Sub branch-3</h3>
                        </div>
                        <div class="contact-item-info">
                            <div class="contact-info-list">
                                <h3>Address</h3>
                                <p>Sai Residency, Amroli Rd, opposite Gajera school, Mahavir Nagar Society, Katargam, Surat, Gujarat 395004</p>
                            </div>
                            <div class="contact-info-list">
                                <h3>E-mail</h3>
                                <p><a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#1b737e77777444697474765b7d7a7d7435787476"><span
                                            class="__cf_email__"
                                            data-cfemail="d2bab7bebebd8da0bdbdbf92b4b3b4bdfcb1bdbf">sweetfud@gmail.com</span></a>
                                </p>
                            </div>
                            <div class="contact-info-list">
                                <h3>Phone</h3>
                                <p><a href="tel:0039-964-565-876">+91 89479 28939</a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8 order-5 order-lg-0 pb-30">
                    <div class="comment-area">
                        <div class="sub-section-title">
                            <h3 class="color-white">Leave A Message</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <div class="comment-form mt-30">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="text" name="name" id="name" class="form-control" required
                                                    data-error="Please enter your name" placeholder="Name*" />
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="email" name="email" id="email" class="form-control"
                                                    required data-error="Please enter your email"
                                                    placeholder="Email*" />
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="text" name="phone_number" id="phone_number" required
                                                    data-error="Please enter your phone number" class="form-control"
                                                    placeholder="Phone*" />
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="text" name="msg_subject" id="msg_subject"
                                                    class="form-control" required data-error="Please enter your subject"
                                                    placeholder="Subject*" />
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <textarea name="message" class="form-control" id="message" rows="8"
                                                    placeholder="Your Message*"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox mb-20 pb-3">
                                            <input type="checkbox" class="custom-control-input" id="contact1">
                                            <label class="custom-control-label" for="contact1">Accept <a
                                                    href="policy.php">Terms & Conditions</a> and <a
                                                    href="policy.php">Privacy Policy</a></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <button class="btn full-width" type="submit">
                                                Send A Message
                                                </button>
                                                <div id="msgSubmit"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        <div class="col-md-3"></div>    
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 order-4 order-lg-0 pb-30">
                    <div class="contact-item">
                        <div class="contact-item-title text-center">
                            <h3 class="color-white">Main Head Office</h3>
                        </div>
                        <div class="contact-item-info">
                            <div class="contact-info-list">
                                <h3>Address</h3>
                                <p>401 Sunday Hub, Aamba Talavadi, Katargam, Surat, Gujarat-395004</p>
                            </div>
                            <div class="contact-info-list">
                                <h3>E-mail</h3>
                                <p><a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#5b333e3737341b3d3a3d3475383436"><span
                                            class="__cf_email__"
                                            data-cfemail="7d15181111123d1b1c1b12531e1210">hungers1411@gmli.com</span></a>
                                </p>
                            </div>
                            <div class="contact-info-list">
                                <h3>Phone</h3>
                                <p><a href="tel:001-964-565-87652">(+91)87350 60385</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="map-section p-tb-100 bg-black">
        <div class="container">
            <div class="google-map-content">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29752.380764488946!2d72.81272567006579!3d21.22996114692688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04eeb5c1077c1%3A0xf3db03f8cc74c359!2sKatargam%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1612348098560!5m2!1sen!2sin" width="300px" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>


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