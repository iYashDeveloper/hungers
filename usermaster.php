<?php
require_once 'connection.php';
require_once 'userquery.php';
$_SESSION['page'] = "usermaster";

// $_SESSION['identity'] = "dashboard";

if ($_SESSION['userid'] == "") {
    header('location:index.php');
}

if($_REQUEST['who']!="")
{
    $_SESSION['who']=$_REQUEST['who'];
}
?>
<!DOCTYPE html>
<html lang="zxx">

<body onload="getdata('<?php echo $_SESSION['identity'] ?>')">
    <?php require_once 'head.php'; ?>
    <?php require_once 'header.php'; ?>
    <?php require_once 'subheader.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="topbaruser bg-main">
                    <div class="container">
                        <div style="text-align:center" class="topbar-inner">
                            <div class="topbar-item topbar-padding">
                                <ul class="social-list social-list-white">
                                    <li style="color: white;">last login: <?php echo $_SESSION['lastlogin']; ?></li>
                                </ul>
                            </div>
                            <div class="topbar-item">

                                <div class="topbar-right-item topbar-padding color-white">
                                    <i class="flaticon-user"></i>
                                    <?php
                                    if ($_SESSION['userid'] == "") {
                                    ?>
                                        <a href="login.php" class="color-white">Log in</a>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="logout.php" class="color-white">Log Out</a>
                                    <?php
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>

    <section class="welcome-section bg-overlayuser-1 pt-100 pb-70 bg-blackuser">
        <div class="container-fluid position-relative">
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="col-md-12 col-lg-12">
                <p>welcome, <?php echo $_SESSION['username']; ?></p>
                <p>last status, <?php echo $_SESSION['lastlogin']; ?></p>
            </div> -->
                    <div class="col-md-3">
                        <div style="color: white;"></div>
                        <div style="color: white;"></div>
                        <div style="color: white;"></div>
                        <div class="umlbox">
                            <ul class="m-0 p-0">
                                <li onclick="getdata('dashboard')"><a>Dashbord</a><span class="iconuser"><i class=""><img src="assets/images/dashboard.png" width="23px" ></i></span></li>
                                <li onclick="getdata('changepass')"><a>Change Password</a><span class="iconuserk"><i class=""><img src="assets/images/key.png" width="23px" ></i></i></span></li>
                                <li onclick="getdata('myprofile')"><a>My Profile</a><span class="iconuseru"><i class=""><img src="assets/images/businessman.png " width="23px"></i></i></span></li>
                                <li onclick="getdata('address')"><a>Address</a><span class="iconaddress"><i class=""></i><img src="assets/images/map.png" width="23px" ></i></span></li>
                               
                            </ul>
                        </div>
                        <!-- <ul class="sidebar-list">
                            <li onclick="getdata('myprofile')">
                                <a>Dashbord <span><i class="fas fa-house-user"></i></span></a>
                            </li>
                            <li>
                                <a href="#">My Profile <span><i class="fas fa-users"></i></span></a>
                            </li>
                            <li onclick="getdata('changepass')">
                                <a>Change Password <span><i class="fas fa-lock"></i></span></a>
                            </li>
                            <li>
                                <a href="#">Fast Food <span>(14)</span></a>
                            </li>
                            <li>
                                <a href="#">Pizza <span>(10)</span></a>
                            </li>

                        </ul> -->
                    </div>
                    <div class="col-md-9">
                        <div id="missdata" class="row usermasterbox">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'script.php'; ?>
    <?php require_once 'footer.php'; ?>
</body>

</html>