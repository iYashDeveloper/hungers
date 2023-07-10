<?php
require_once 'connection.php';

if (isset($_REQUEST['getpassword']))
{
    $userid=$con->real_escape_string($_REQUEST['userid']);


    $data = $con->query("select * from register where userid like '$userid'");
    $row = mysqli_fetch_array($data);

    if ($row[2] == "")
    {
        $flag = 1;
    }
    else
    {
    $to=$row[2];
    $subject="Hungers : Reset Password ";
    $headers="Content-Type: text/html; charset=UTF-8\r\n";
    $body="
    <html>
      <body>
        <h1>Your Password : $row[8]</h1>
      </body>
    </html>";
    
    if(mail($to,$subject,$body,$headers))
    {

    }
    else
    {
      
    }
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


    <div class="header-bgf header-bg-page">
        <div class="header-paddingf position-relative" style="padding: 35px;">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <h1 style="font-size: 100px; color:white;"></h1>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="authentication-details" style="padding-right: 100px;">
                            <div class="p-0 mb-20" style="color: white">
                                <h1 class="pt-5">Forget Password</h1>
                                <?php
                                if ($flag == 1) {
                                    echo "<h2 class='text-center' style='color:#E7272D;'>Something wrong !</h2>";
                                }
                                ?>
                            </div>
                            <div class="authentication-details-item active" data-authentication-details="1">
                                <form method="post" name="login" action="" autocomplete="off">
                                    <div class="form-group pt-2 mb-20">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="abc@mail.com"
                                                name="userid" required="" value="<?php if(isset($_COOKIE['cuserid'])) { echo $_COOKIE['cuserid'];} ?>"/>
                                            <div class="input-group-append">
                                                <span class="input-group-text reveal">
                                                    <i class="far fa-envelope"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="authentication-btn containe p-0">
                                        <div class="row ">
                                            <div class="col-md-6 mb-20"> <button type="submit" name="getpassword"
                                                    class="btnl w-100">Login</button></div>
                                            <div class="col-md-6"> <button type="reset"
                                                    class="btnl w-100">Clear</button></div>

                                        </div>
                                    </div>
                                    <div class="contanier">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <!-- <div style="text-align: center;color:#B4B4B4">Registering to this
                                                    website, you accept our <a href="policy.php#tc">Terms </a> of use
                                                    and our <a href="policy.php#pp">Privacy policy</a></div> -->
                                            </div>
                                            <div style="color:white; border:2px white">
                                                <hr>
                                            </div>
                                            <div class="authentication-action-item pb-5">

                                                <a href="login.php"><span style="color:#B4B4B4;">Back to&#xa0?</span>
                                                    Sign in now</a>
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
