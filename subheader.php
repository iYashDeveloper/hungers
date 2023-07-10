<div class="header-bg header-bg-page">
    <div class="header-padding position-relative">
        <div class="header-page-shape">
            <div class="header-page-shape-item">
                <img src="assets/images/header-shape-1.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="assets/images/header-shape-2.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="assets/images/header-shape-3.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="assets/images/header-shape-1.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="assets/images/header-shape-4.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="assets/images/header-shape-1.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="assets/images/header-shape-3.png" alt="shape">
            </div>
        </div>
        <div class="container">
            <?php
            if ($_SESSION['page'] == "aboutus")
            {
            ?>
            <div class="header-page-content">
                <h1>About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
            <?php
            }
            else if ($_SESSION['page'] == "contactus")
            {
            ?>
            <div class="header-page-content">
                <h1>Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
            <?php
            }
            else if ($_SESSION['page'] == "policy")
            {
            ?>
            <div class="header-page-content">
                <h1>Policy</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Policy</li>
                    </ol>
                </nav>
            </div>
            <?php
            }
            else if ($_SESSION['page'] == "ourservices")
            {
            ?>
            <div class="header-page-content">
                <h1>Our Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">our services</li>
                    </ol>
                </nav>
            </div>
            <?php
            }
            else if ($_SESSION['page'] == "usermaster")
            {
            ?>
            <div class="header-page-content">
                <h1>Welcome <?php echo $_SESSION['username'];?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">usermaster</li>
                    </ol>
                </nav>
            </div>
            <?php
            }
            else if($_SESSION['page']== "allitems")
            {
            ?>
            <div class="header-page-content">
                <h1>Our Allitems</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">our allitems</li>
                        </ol>
                    </nav>
             </div>
            <?php
            }
            else if($_SESSION['page']== "allfixthali")
            {
            ?>
            <div class="header-page-content">
                <h1>Our Allfixthali</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">our allfixthali</li>
                        </ol>
                    </nav>
             </div>
            <?php
            }
            else if($_SESSION['page']== "itemdetalis")
            {
            ?>
             <div class="header-page-content">
                <h1>Item Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Item Details</li>
                        </ol>
                    </nav>
             </div>

            <?php
            }
            else if($_SESSION['page']== "thali-detalis")
            {
            ?>
                <div class="header-page-content">
                <h1>Fixthali Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">fixthali Details</li>
                        </ol>
                    </nav>
             </div>

            <?php
            }
            else if($_SESSION['page']== "loactions")
            {
            ?>
                <div class="header-page-content">
                    <h1>loactions</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">loactions</li>
                            </ol>
                        </nav>
                 </div>

             <?php
             }
             else if($_SESSION['page']== "cart")
             {
             ?>
                <div class="header-page-content">
                    <h1>Cart</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                 </div>
            <?php
             }
             else if($_SESSION['page']== "checkout")
             {
            ?>
            <div class="header-page-content">
                    <h1>Checkout</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                 </div>
            <?php
             }
             else if($_SESSION['page']== "carthistory")
             {
            ?>
            <div class="header-page-content">
                    <h1>Cart History</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                 </div>
            <?php
             }
             ?>
             ?>
        </div>
    </div>
</div>
