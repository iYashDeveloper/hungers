<?php
require_once 'connection.php';
$_SESSION['page'] = "login";

if ($_SESSION['userid'] != "")
{
   header('location:usermaster.php');
}

if (isset($_REQUEST['login']))
{

    //sql injection
    $userid=$con->real_escape_string($_REQUEST['userid']);
    $password=$con->real_escape_string($_REQUEST['password']);

    setcookie("block",$userid,time()+31556926,'/');
    echo $_COOKIE['block'];

    //echo $userid;
    //echo $password;

    //query wizard


    $data = $con->query("select * from register where userid like '$userid' and password like '$password'");
    $row = mysqli_fetch_array($data);

    if ($row[2] == "")
    {
        $flag = 1;
        $ch = $con->query("select * from register where userid like '$_COOKIE[block]'");
        $chh = mysqli_fetch_array($ch);

        if($chh[0]!="")
        {
            echo "hiiiii";
        }
    }
    else
    {
        //user info
        $_SESSION['areaid']=$row[0];
        $_SESSION['landmarkid']=$row[1];
        $_SESSION['userid'] = $row[2];
        $_SESSION['username'] = $row[4]." ".$row[3];
        $_SESSION['mobile']=$row[6];
        $_SESSION['profilepic']= $row[7];
        $_SESSION['password']=$row[8];
        $_SESSION['lastlogin'] = $row[9];
        $_SESSION['identity']="dashboard";
        // $_SESSION['identity']="myface";

        if(isset($_REQUEST['rem']))
        {
            setcookie("cuserid",$row[2]);
            setcookie("cpassword",$row[8]);
        }
        else
        {
            if(isset($_COOKIE['cuserid']))
            {
                setcookie("cuserid",$row[2],time()-60);
                setcookie("cpassword",$row[8],time()-60);
            }

        }

        header('location:usermaster.php');
    }
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


    <div class="header-bgl header-bg-page">
        <div class="header-padding position-relative" style="padding: 50px;">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <h1 style="font-size: 100px; color:white;"></h1>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-5">
                        <div class="authentication-details" style="padding-right: 0px;">
                            <div class="p-0 mb-20" style="color: white">
                                <h1 class="p-3">Sign in to Hungers</h1>
                                <?php
                                if ($flag == 1) {
                                    echo "<h2 class='text-center' style='color:#E7272D;'>Something wrong !</h2>";
                                }
                                ?>
                            </div>
                            <div class="authentication-details-item active" data-authentication-details="1">
                                <form method="post" name="login" action="" autocomplete="off">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="abc@mail.com"
                                                name="userid" required value="
                                                <?php
                                                if(isset($_COOKIE['cuserid'])){
                                                    echo $_COOKIE['cuserid'];
                                                }

                                                ?>"/>
                                            <div class="input-group-append">
                                                <span class="input-group-text reveal">
                                                    <i class="far fa-envelope"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="password" class="form-control password" required=""
                                                placeholder="Password" name="password" psswd-shown="false" pattern="^[A-Za-z0-9]{5,20}$"
                                                title="Your password is incorrect" value="<?php
                                                if(isset($_COOKIE['cpassword'])){
                                                    echo $_COOKIE['cpassword'];
                                                }
                                                ?>" />
                                            <div class="input-group-append">
                                                <span class="input-group-text reveal">
                                                    <i class="flaticon-visibility pass-close"></i>
                                                    <i class="flaticon-eye pass-view"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="authentication-action mb-20">
                                        <div class="authentication-action-item">
                                            <div class="custom-control custom-checkbox">
                                            <?php
                                                if(isset($_COOKIE['cuserid'])){
                                                    ?>
                                                    <input type="checkbox" class="custom-control-input" name="rem" checked="" id="check3">
                                                    <?php
                                                }else{
                                                    ?>
                                                    <input type="checkbox" class="custom-control-input" name="rem" id="check3">
                                                    <?php
                                                }
                                            ?>

                                                <label class="custom-control-label" name="" for="check3">Remember
                                                    Me</label>
                                            </div>
                                        </div>

                                        <div class="authentication-action-item">
                                            <a href="forget-password.php">Forget Password?</a>
                                        </div>
                                    </div>

                                    <div class="authentication-btn containe p-0">
                                        <div class="row ">
                                            <div class="col-md-6 mb-20"> <button type="submit" name="login" class="btnl w-100">Login</button></div>
                                            <div class="col-md-6"> <button type="reset" class="btnl w-100">Clear</button></div>
                                        </div>
                                    </div>
                                    <div class="contanier">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <div style="text-align: center;color:#B4B4B4">Registering to this
                                                    website, you accept our <a href="policy.php#tc">Terms </a> of use
                                                    and our <a href="policy.php#pp">Privacy policy</a></div>
                                            </div>
                                            <div style="color:white; border:2px white">
                                                <hr>
                                            </div>
                                            <div class="authentication-action-item">

                                                <a href="register.php"><span style="color:#B4B4B4;">Not a
                                                        member&#xa0?</span>
                                                    Sign up now</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'script.php' ?>
</body>



</html>
