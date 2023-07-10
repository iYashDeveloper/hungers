<?php
require_once 'connection.php';
$_SESSION['page'] = "register";

if (isset($_REQUEST['register']))
{



        if($_FILES['profile']['name']!="")
          {

            //file size validation
            if(($_FILES['profile']['size']/1024)>10)
            {

              //file type validation
              if($_FILES['profile']['type']=="image/jpg" || $_FILES['profile']['type']=="image/jpeg" || $_FILES['profile']['type']=="image/png")
              {

                //file currepted
                if($_FILES['profile']['error']==0)
                {

                  $ex=".".substr($_FILES['profile']['type'],6);

                  $newname=$_REQUEST['name'].date('m').chr(rand(65,90)).rand(10,99);

                //echo $newname.$ex;

                  $serverpath=dirname(__FILE__)."\assets\images\\userprofile\\".$newname.$ex;

                  //$serverpath;

                  $databasepath="assets/images/userprofile/".$newname.$ex;

                  echo $databasepath;

                  if(move_uploaded_file($_FILES['profile']['tmp_name'],$serverpath))
                  {

                    $in=$con->query("insert into register values($_REQUEST[areaid],$_REQUEST[landmarkid],'$_REQUEST[userid]','$_REQUEST[fname]','$_REQUEST[lname]','$_REQUEST[gender]','$_REQUEST[mobile]','$databasepath','$_REQUEST[password]',0)");
                    header('location:login.php');
                  }
                  else
                  {
                     echo "no";
                  }
                }
              }
            }
          }

}

?>

<!DOCTYPE html>
<html lang="zxx">



<?php require_once 'head.php' ?>

<body onload="getcaptcha('captcha');">

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


    <div class="header-bgr header-bg-page">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <h1 style="font-size: 100px; color:white;"></h1>
                    <!-- <img src="assets/images/userprofile/1.jpg" height="300px" width="auto"> -->
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="authentication-details">
                        <div class="p-0 mb-20" style="color: white">
                            <h1 class="pt-5">Register in to Hungers</h1>
                            <?php
                                if ($flag == 1) {
                                    echo "<h2 class='text-center' style='color:#E7272D;'>Something wrong !</h2>";
                                }
                                ?>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-9">
                                    <div class="authentication-action-item">
                                        <p> <a href="login.php"><span style="color:#B4B4B4; padding-left:100px;">Already have an account ?&#xa0</span>Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="authentication-details-item active" data-authentication-details="1">
                            <form method="post" name="login" action=""  autocomplete="off"  enctype="multipart/form-data">
                                <div class="contanier">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="fname" placeholder="Frist Name" required="" pattern="^[A-Zz-a]{3,20}$" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required="" pattern="^[A-Za-z]{3,20}$" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contanier">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group mb-20">

                                                <div class="input-group">
                                                    <div> <i style="color:whitesmoke;" class="fas fa-mars fa-lg"></i>&nbsp;&nbsp;</div>
                                                    <input type="radio" name="gender" checked value="male" /><span style="color: #B4B4B4;">
                                                        &nbsp;male</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div> <i style="color:whitesmoke" class="fas fa-venus fa-lg"></i>&nbsp;&nbsp;</div>
                                                    <input type="radio" name="gender" value="female" /><span style="color: #B4B4B4;">
                                                        &nbsp;female</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="userid" placeholder="Email" required="" />
                                    </div>
                                </div>
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="mobile" placeholder="Phone Number" required="" pattern="^[0-9]{10}$" />
                                    </div>
                                </div>

                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <input type="file" name="profile" class="form-control" required="" />
                                    </div>
                                </div>
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <select required="" name="areaid" class="form-control" onchange="combobox('landmark',this.value)">
                                            <option value=" ">Area</option>
                                            <?php

                                            $data = $con->query("select * from area");
                                            while ($row = mysqli_fetch_array($data))
                                            {
                                            ?>
                                                <option required="" value="<?php echo $row[0]; ?>"><?php echo $row[1] . "[" . $row[2] . "]"; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <label style="color:white"></label>
                                        <select required="" name="landmarkid" class="form-control" id="landmarkdata">
                                            <option  value=" ">Landmark</option>


                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <input type="password" class="form-control password" required="" placeholder="Password" id="rnpassword" name="password" pattern="^[A-Za-z0-9]{3,20}$" title="Your password is incorrect" />
                                        <div class="input-group-append">
                                            <span class="input-group-text reveal">
                                                <i class="flaticon-visibility pass-close"></i>
                                                <i class="flaticon-eye pass-view"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <input type="password" class="form-control password" required="" placeholder="Password" id="rcpassword" pattern="^[A-Za-z0-9]{3,20}$" title="Your password is incorrect" />
                                        <div class="input-group-append">
                                            <span class="input-group-text reveal">
                                                <i class="flaticon-visibility pass-close"></i>
                                                <i class="flaticon-eye pass-view"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div id="captcha"></div>

                                <div class="authentication-btn containe p-0">
                                    <div class="row ">
                                        <div class="col-md-6 mb-20"> <button type="submit" name="register" class="btnl w-100">Join</button></div>
                                        <div class="col-md-6"> <button type="reset" class="btnl w-100">Clear</button>
                                        </div>

                                    </div>
                                </div>
                                <div style="color:white; border:2px white">
                                    <hr>
                                </div>

                                <div class="continer">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="padding-bottom: 20px;">
                                                <div style="text-align: center; color:#B4B4B4">By joining, you agree to
                                                    the <a href="policy.php#tc">Terms </a> and <a href="policy.php#pp">Privacy policy</a></div>
                                            </div>
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
    <?php require_once 'script.php' ?>
</body>



</html>
