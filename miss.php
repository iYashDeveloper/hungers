<?php
require_once 'connection.php';
if ($_REQUEST['what'] != "") {
    $_SESSION['identity'] = $_REQUEST['what'];
}
// print_r($_REQUEST);
?>
<?php
if ($_REQUEST['combo'] == "landmark") {

    $data = $con->query("select * from landmark where areaid=$_REQUEST[comboid]");
    while ($row = mysqli_fetch_array($data)) {
?>
        <option value="<?php echo $row[1]; ?>"><?php echo $row[2]; ?></option>
<?php
    }
}

?>
<?php
if ($_REQUEST['data'] == "product") {
?>
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body ml-3">
        <?php
        $in = $con->query("select c.*,i.* from category c,item i where c.categoryid=i.categoryid and i.itemid=$_REQUEST[proid]");
        // echo $in =("select c.*,i.* from category c,item i where c.categoryid=i.categoryid and i.itemid=$_REQUEST[proid]");


        while ($r = mysqli_fetch_array($in)) {
        ?>

            <div class="continer">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-7">

                        <div class="bokha">
                            <div class=""><img class="text-center" style="border-radius:5px;" width="310px" src="<?php echo $r[6]; ?>"></div>
                        </div>

                        <div class="continer">
                            <div class="row">

                                <div class="col-md-6">
                                    <h3 style="font-size: 26px;"><?php echo $r[5]; ?></h3>
                                </div>
                                <div class="col-md-6">
                                    <h4 style="font-size: 26px;"><?php echo $r[1]; ?></h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
    </div>
<?php
        }
?>
</div>
<div class="modal-footer">
    <div>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
    </div>

</div>

<?php
}
if ($_REQUEST['data'] == "thali") {
?>
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fixthali </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <?php
        $in = $con->query("select * from fixthali where fixthaliid=$_REQUEST[proid]");

        while ($row = mysqli_fetch_array($in)) {
        ?>
            <div class="bokha">
                <div class=""><img style="border-radius:5px;" src="<?php echo $row[2]; ?>"></div>
            </div>
            <h3 style="font-size: 26px;"><?php echo $row[1]; ?></h3>
        <?php
        }
        ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
    </div>
<?php
}
?>

<?php
if ($_REQUEST['what'] == "dashboard") { ?>
    <!-- <div class="combined-section pt-100 bg-white mobile-pt-0"> -->
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-12 align-center">
                <h1 style="color: white;">Your Account</h1>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 pb-30">
                <div class="quick-item bg-black">
                    <div class="quick-item-image">
                        <div class="quick-item-image-shape bg-main translatey-min-10"></div>
                        <div class="image-position image-position-lb-30">
                            <div class="dashimg">
                                <img src="assets/images/compliance.png" alt="quick-item">
                            </div>
                        </div>
                    </div>
                    <div class="quick-item-text">
                        <h3 class="color-white">Total Order</h3>
                        <!-- <h4 class="color-white">Payment <span>$5.50</span></h4> -->
                        <a href="cart.php" class="btn btn-white btn-small">View Now <i class="flaticon-shopping-cart-black-shape"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    </div>


    ?>
<?php
}
if ($_REQUEST['what'] == "changepass") { // start change password
?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="authentication-details" style="padding-left: 50px;">
                <div class="p-0 mb-20" style="color: white">
                    <h1 class="p-3">Reset Password</h1>
                    <?php
                    if ($flag == 1) {
                        echo "<h2 class='text-center' style='color:#E7272D;'>Something wrong !</h2>";
                    }
                    ?>
                </div>
                <div class="authentication-details-item active" data-authentication-details="1">
                    <form method="post" name="changepassword" action="" novalidate="" onsubmit="return checkps()" autocomplete="off">

                        <div class="form-group mb-20">
                            <div class="input-group">
                                <input type="password" class="form-control password" required="" placeholder="Current Password" id="rnpassword" name="curpassword" pattern="^[A-Za-z0-9]{3,20}$" title="Your password is incorrect" />
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
                                <input type="password" class="form-control password" required="" placeholder="New Password" id="newpassword" name="newpassword" pattern="^[A-Za-z0-9]{3,20}$" title="Your password is incorrect" />
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
                                <input type="password" class="form-control password" required="" name="conpassword" placeholder="Confirm Password" id="rcpassword" pattern="^[A-Za-z0-9]{3,20}$" title="Your password is incorrect" />
                                <div class="input-group-append">
                                    <span class="input-group-text reveal">
                                        <i class="flaticon-visibility pass-close"></i>
                                        <i class="flaticon-eye pass-view"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="authentication-btn containe p-0">
                            <div class="row ">
                                <div class="col-md-6 mb-20"> <button type="submit" name="chpass" class="btnl w-100">Save change</button>
                                </div>
                                <div class="col-md-6"> <button type="reset" class="btnl w-100">Clear</button></div>
                            </div>
                        </div>
                        <div class="contanier">
                            <div class="row">

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
        <div class="col-md-3"></div>
    </div>

<?php
}
//end change password
//start my profile 
if ($_REQUEST['what'] == "myprofile") 
{
?>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="account-info">
                <?php
               
                $data = $con->query("select r.*,a.*,l.* from register as r, area as a, landmark as l where r.areaid=a.areaid and r.landmarkid=l.landmarkid and r.userid='$_SESSION[userid]'");
                $row=mysqli_fetch_array($data);
                {
                ?>
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-8"></div>
                          
                            <div class="col-md-4">
                                <div class=" account-setting-avatar">
                                    <div class="sub-section-title">
                                       
                                    </div>
                                    <div class="account-avatar-info">
                                        <div class="account-avatar-thumb">
                                            <img src="<?php echo $row[7]; ?>" height="100px" width="100px">
                                        </div>
                                        <!-- <ul class="account-avatar-action">
                                            <li><button class="btn">Upload</button></li>
                                            <li><button class="btn btn-yellow">Remove</button></li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                        <div class="row">
                            <h2 style="color:white; margin-top:6px;">Information</h2>
                        </div>
                        <div class="account-setting-item">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-20">
                                        <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">Fname</label>
                                        <div class="">
                                            <div class="input-group">
                                                <input type="text" name="" id="first_name" class="dashuser" disabled placeholder="<?php echo $row[3];?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-20">
                                        <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">Lname</label>
                                        <div class="">
                                            <div class="input-group">
                                                <input type="text" name="" id="first_name" class="dashuser" disabled placeholder="<?php echo $row[4];?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group mb-20">
                                <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control password" required=""
                                             name="password" psswd-shown="false" pattern="^[A-Za-z0-9]{5,20}$"
                                                title="Your password is incorrect" value="<?php echo $row[8]; ?>" />
                                            <div class="input-group-append">
                                                <span class="input-group-text reveal">
                                                    <i class="flaticon-visibility pass-close"></i>
                                                    <i class="flaticon-eye pass-view"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>


                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-20">
                                        <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">Email</label>
                                        <div class="input-group">
                                            <input type="text" name="email" id="email" class="dashuser" disabled placeholder="<?php echo $row[2]; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-20">
                                        <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">Mobile</label>
                                        <div class="input-group">
                                            <input type="text" name="phone" id="phone" class="dashuser" disabled placeholder="<?php echo $row[6];?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-20">
                                        <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">Area</label>
                                        <div class="input-group">
                                            <input type="text" name="area"  class="form-control"  value="<?php echo $row[11]; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-20">
                                        <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">Landmark</label>
                                        <div class="input-group">
                                            <input type="text" name="landmark"  class="form-control" placeholder="<?php echo $row[15]; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="account-setting-item account-setting-button">
                            <button class="btn btn-small" onclick="getdata('edit');">Edit Profile</button>
                            <button class="btn btn-yellow btn-small">Cancel</button>
                        </div>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
<?php
} 
?>

<?php
// end my profile
if ($_REQUEST['what'] == "address") 
{
?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="authentication-details" style="padding-left: 50px;">
                <div class="p-0 mb-20" style="color: white">
                    <h1 class="p-3">Address</h1>
                </div>
                <div class="authentication-details-item active" data-authentication-details="1">
                    <form method="post" name="address" action="" novalidate="" autocomplete="off">


                        <div class="form-group mb-20">
                            <div class="input-group">
                                <select name="tag" class="form-control">
                                    <option value="selecttag">Select Tag</option>
                                    <option value="home">Home</option>
                                    <option value="work">Wokr</option>
                                    <option value="office">Office</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-20">
                            <div class="input-group">
                                <input type="text" class="form-control" name="address" placeholder="Addresss" reuired="" pattern="^[A-z]{30}$" />
                            </div>
                        </div>
                        <div class="form-group mb-20">
                            <div class="input-group">
                                <input type="text" class="form-control" name="location" placeholder="Location" reuired="" pattern="^[A-z]{30}$" />
                                <div class="input-group-append">
                                    <span class="input-group-text reveal">
                                        <!-- <i class="flaticon-visibility pass-close"></i> -->
                                    <a href="loaction.php"> <i class="fas fa-info"></i></a>
                                        <!-- <i class="flaticon-eye pass-view"></i> -->
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="authentication-btn containe p-0">
                            <div class="row ">
                                <div class="col-md-6 mb-20"> <button type="submit" name="addressc" class="btnl w-100">Save change</button>
                                </div>
                                <div class="col-md-6"> <button type="reset" class="btnl w-100">Clear</button></div>
                            </div>
                        </div>
                        <!-- <div class="contanier">
                            <div class="row">

                                <div style="color:white; border:2px white">
                                    <hr>
                                </div>
                                <div class="authentication-action-item">

                                    <a href="register.php"><span style="color:#B4B4B4;">Not a
                                            member&#xa0?</span>
                                        Sign up now</a>
                                </div>

                            </div>

                        </div>  -->
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
<?php
}
//itemrate model
if ($_REQUEST['why'] == "itemrate") 
{
    print_r($_REQUEST);
    $data = $con->query("select * from itemrate where userid like '$_REQUEST[kon]' and itemid=$_REQUEST[kone] ");
    $row = mysqli_fetch_array($data);
    if ($_REQUEST['ketla'] != 0) 
    {
         if ($row[0] == "") 
        {
            $in = $con->query("insert into itemrate value('$_REQUEST[kone]','$_REQUEST[kon]',0,$_REQUEST[ketla])");
            
        } 
        else 
        {
            $up = $con->query("update itemrate set rate='$_REQUEST[ketla]' where userid like '$_REQUEST[kon]' and itemid='$_REQUEST[kone]'");
            echo $up = ("update itemrate set rate='$_REQUEST[ketla]' where userid like '$_REQUEST[kon]' and itemid='$_REQUEST[kone]'");
        }
        $oldrate = $_REQUEST['ketla'];
        echo $oldrate;
    } 
    else 
    {
        if ($row[0] == "") {
            $oldrate = 0;
        } else {
            $oldrate = $row[3];
        }
    }
?>
    <div class="modal-header">
        <h5 class="modal-title">rate us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <br />
        Your rate important for us.Rate to say us hows we are!
        <center>
            <?php
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $oldrate) {
            ?>
                    <i onclick="forrate('rate',<?php echo $_SESSION['proid']; ?>,'<?php echo $_SESSION['userid']; ?>',<?php echo $i; ?>);" style="padding:  0px 10px;font-size:50px; color:#fbc206;" class="fas fa-star"></i>
                <?php
                } else {
                ?>
                    <i onclick="forrate('rate',<?php echo $_SESSION['proid']; ?>,'<?php echo $_SESSION['userid']; ?>',<?php echo $i; ?>);" style="padding:  0px 10px;font-size:50px; color:#fbc206;" class="far fa-star"></i>
            <?php
                }
            }
            ?> 
            </br><br>
            <form action="" method="Post" name="rateus">
                <button class="btn btn-primary" name="rate" type="submit">Rate us</button>
            </form>
        </center>

        <br />
    </div>
    <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
<?php
}
if ($_REQUEST['why'] == "fixthalirate") 
{
   print_r($_REQUEST);
    $data = $con->query("select * from fixthalirate where userid like '$_REQUEST[kon]' and fixthaliid=$_REQUEST[kone] ");
    $row = mysqli_fetch_array($data);
    if ($_REQUEST['ketla'] != 0) 
    {
        if ($row[0] == "") 
        {
            $in = $con->query("insert into fixthalirate value('$_REQUEST[kone]','$_REQUEST[kon]',0,$_REQUEST[ketla])");
        } 
        else 
        {
            $up = $con->query("update fixthalirate set rate='$_REQUEST[ketla]' where userid like '$_REQUEST[kon]' and fixthaliid='$_REQUEST[kone]'");
           // echo $up = ("update fixthalirate set rate='$_REQUEST[ketla]' where userid like '$_REQUEST[kon]' and fixthaliid='$_REQUEST[kone]'");
        }
        $oldrate = $_REQUEST['ketla'];
        echo $oldrate;
    } 
    else 
    {
        if ($row[0] == "") 
        {
            $oldrate = 0;
        } 
        else 
        {
            $oldrate = $row[3];
        }
    }
?>
    <div class="modal-header">
        <h5 class="modal-title">rate us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <br />
        Your rate important for us.Rate to say us hows we are!
        <center>
            <?php
            for ($i = 1; $i <= 5; $i++) 
            {
                if ($i <= $oldrate) 
                {
            ?>
                    <i onclick="forratee('fixthalirate',<?php echo $_SESSION['proid']; ?>,'<?php echo $_SESSION['userid']; ?>',<?php echo $i; ?>);" style="padding:  0px 10px;font-size:50px; color:#fbc206;" class="fas fa-star"></i>
                <?php
                } 
                else 
                {
                ?>
                    <i onclick="forratee('fixthalirate',<?php echo $_SESSION['proid']; ?>,'<?php echo $_SESSION['userid']; ?>',<?php echo $i; ?>);" style="padding:  0px 10px;font-size:50px; color:#fbc206;" class="far fa-star"></i>
            <?php
                }
            }
            ?>
            </br><br>
            <form action="" method="Post" name="rateus">
                <button class="btn btn-primary" name="rate" type="submit">Rate us</button>
            </form>
        </center>

        <br />
    </div>
    
<?php
}
if ($_REQUEST['what'] == "edit") 
{
?>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="account-info">
            <?php
            $data = $con->query("select r.*,a.*,l.* from register as r, area as a, landmark as l where r.areaid=a.areaid and r.landmarkid=l.landmarkid and r.userid='$_SESSION[userid]'");
                $row=mysqli_fetch_array($data);
                {
                    
                ?>
                <form method="POST" action="" name="updateprofile" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-8"></div>
                        <!-- <div class="col-md-1"></div> -->
                        <div class="col-md-4">
                            <div class=" account-setting-avatar">
                                <div class="sub-section-title">
                                    <!-- <h3 class="color-white">Avatar</h3> -->
                                </div>
                                <div class="account-avatar-info">
                                    <div class="account-avatar-thumb">
                                        <img src="<?php echo $row[7]; ?>" height="100px" width="100px">
                                    </div>
                                    <ul class="account-avatar-action">
                                    
                                        <!-- <li><input type="file" class="btn" name="upprofilepic">new pic</li> -->
                                        <input type="file" name="upprofilepic" class="form-control"  />

                                        <input type="hidden" name="oldpath" value="<?php echo $row[7]; ?>">
                                        <!-- <li><button class="btn">Upload</button></li> -->
                                        <li><button class="btn btn-yellow">Remove</button></li>
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-1"></div> -->
                    </div>
                    <div class="row">
                        <h2 style="color:white; margin-top:6px;">Information</h2>
                    </div>

                    <div class="account-setting-item">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group mb-20">
                                    <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">First Name</label>
                                    <div class="">
                                        <div class="input-group">
                                            <input type="text" name="upfname" style="color: white;" id="first_name" class="dashuser" value="<?php echo $row[3]; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group mb-20">
                                    <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">Last Name</label>
                                    <div class="">
                                        <div class="input-group">
                                            <input type="text" name="uplname" style="color: white;" id="first_name" class="dashuser" value="<?php echo $row[4]; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-20">
                                        <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">Email</label>
                                        <div class="input-group">
                                            <input type="text" style="color: white;" class="dashuser" disabled value="<?php echo $row[2]; ?>" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-20">
                                        <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">Mobile</label>
                                        <div class="input-group">
                                            <input type="text" style="color:#fff;" name="upmobile" id="phone" class="dashuser" value="<?php echo $row[6];?>"/>                                        
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group mb-20">
                                    <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">Area</label>
                                    <div class="input-group">
                                        <select name="uparea" class="form-control" onchange="combobox('landmark',this.value)">
                                            <?php
                                            $data = $con->query("select * from area");
                                            while ($row1 = mysqli_fetch_array($data)) {
                                            ?>
                                                <option value="<?php echo $row1[0]; ?> " <?php if($row[0]==$row1[0]){echo "selected";} ?>><?php echo $row1[1] . "[" . $row1[2] . "]";  ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group mb-20">
                                    <label class="mb-2 pl-3" style="color: white; text-align:center; margin-left:25px;">Landmark</label>
                                    <div class="input-group">
                                        <!-- <input type="text" name="landmark" id="" class="form-control" placeholder="<?php echo $row[15]; ?>" /> -->

                                        <select name="uplandmarkid" class="form-control" id="landmarkdata">
                                        <?php
                                            $data = $con->query("select * from landmark where areaid=$row[0]");
                                            while ($row2 = mysqli_fetch_array($data)) {
                                            ?>
                                                <option value="<?php echo $row2[1]; ?> " <?php if($row[1]==$row2[1]){echo "selected";} ?>><?php echo $row2[2];  ?></option>
                                            <?php
                                            }
                                            ?>


                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="account-setting-item account-setting-button">
                        <button class="btn btn-small" type="submit" name="upprofile">Save Profile</button>
                        <button class="btn btn-yellow btn-small">Cancel</button>
                    </div>
                </form>
                    <?php
                }
                    ?>
            </div>
        </div>
        <div class="col-md-1"></div>

    </div>
<?php
}
?>

<?php
if ($_REQUEST['captcha'] == "captcha") 
{
    $scap = "";
?>

    <div class="form-group mb-20">
        <div class="input-group">
            <!-- <label>check humunity</label> -->



            <div id="" style="padding: 5px;font-size:20px; font-weight:20px;background-color:#000;color:#fff;">
            </div>
            <span style="padding: 0px 15px; color:#fff;"><?php echo $ek = rand(0, 9); ?></span>
            <span style="padding: 0px 15px; color:#fff;"><?php echo $be = chr(rand(65, 90)); ?></span>
            <span style="padding: 0px 15px; color:#fff;"><?php echo $tarn = chr(rand(97, 122)); ?></span>
            <span style="padding: 0px 15px; color:#fff;"><?php echo $char = chr(rand(97, 122)); ?></span>
            <span style="padding: 0px 15px; color:#fff;"><?php echo $pach = chr(rand(65, 90)); ?></span>
            <span style="padding: 0px 15px; color:#fff;"><?php echo $chh = rand(0, 9); ?></span>
        </div>
    </div>

    <div class="form-group mb-20">
        <div class="input-group" style="color: white;">
            <input type="text" class="form-control password" required="" placeholder="Enter captcha" id="usercaptcha" title="captcha" />

        </div>
    </div>

    <div class="form-group mb-20">
        <div class="">
            <input type="hidden" value="<?php echo $ek . $be . $tarn . $char . $pach . $chh ?>" class="form-control password" required="" id="systemchaptcha" />
        </div>
    </div>

<?php
}
?>

<?php require_once 'script.php' ?>
