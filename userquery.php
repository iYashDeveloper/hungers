<?php 
//change password

if(isset($_REQUEST['chpass']))
{
    //echo "hey";
      $data=$con->query("select password from register where userid like '$_SESSION[userid]'");


     $row=mysqli_fetch_array($data);

     echo $row[0];
     if($row[0]==$_REQUEST['curpassword'])
     {
        $up=$con->query("update register set password='$_REQUEST[newpassword]' where userid like '$_SESSION[userid]'");

        header('location:logout.php');
        if(isset($_COOKIE['cuserid'])){
            setcookie("cuserid",$row[2],time()-60);
            setcookie("cpassword",$row[8],time()-60);
        }
     }
     else
     {

     }
}

if (isset($_REQUEST['addressc'])) 
{
    $data=$con->query("insert into address values('$_SESSION[userid]',0,'$_REQUEST[tag]','$_REQUEST[address]','$_REQUEST[location]')");
   // echo $data=("insert into address values('$_SESSION[userid]',0,'$_REQUEST[tag]','$_REQUEST[address]','$_REQUEST[location]')");
}
else
{
   // echo "noooo";
}

if(isset($_REQUEST['upprofile']))
{
//    echo "update krva aavo chu";
    //file available validation
    if ($_FILES['upprofilepic']['name'] == "") 
    {
        $up=$con->query("update register set areaid=$_REQUEST[uparea] , landmarkid=$_REQUEST[uplandmarkid] , fname='$_REQUEST[upfname]', lname='$_REQUEST[uplname]' , mobile='$_REQUEST[upmobile]', profilepic='$_REQUEST[oldpath]'  where userid like '$_SESSION[userid]'");
    }
    else
    {
        //file size validation     
        if (($_FILES['upprofilepic']['size'] / 1024 / 1024) < 10) 
        {
           
            //image type validation
            if ($_FILES['upprofilepic']['type'] == "image/jpg" || $_FILES['upprofilepic']['type'] == "image/jpeg") 
            {
                echo "type ready";
                //file currepted
                if ($_FILES['upprofilepic']['error'] == 0) 
                {
                    $ex = "." . substr($_FILES['upprofilepic']['type'], 6);
                    $newname = $_REQUEST['upfname'] . date('m') . chr(rand(65, 90)) . rand(10, 99);

                    //echo $newname.$ex;

                    $serverpath = dirname(__FILE__) . "\assets\images\userprofile\\" . $newname . $ex;

                    // echo $serverpath;

                    $databasepath = "assets/images/userprofile/" . $newname . $ex;

                    // echo $databasepath;

                    if (move_uploaded_file($_FILES['upprofilepic']['tmp_name'], $serverpath)) 
                    {
                      
                        $up=$con->query("update register set areaid=$_REQUEST[uparea] , landmarkid=$_REQUEST[uplandmarkid] , fname='$_REQUEST[upfname]', lname='$_REQUEST[uplname]' , mobile='$_REQUEST[upmobile]', profilepic='$databasepath'  where userid like '$_SESSION[userid]'");

                        // echo $up=("update register set areaid=$_REQUEST[uparea] , landmarkid=$_REQUEST[uplandmarkid] , fname='$_REQUEST[upfname]', lname='$_REQUEST[uplname]' , mobile='$_REQUEST[upmobile]', profilepic='$databasepath' where userid like '$_SESSION[userid]'");
                    } 
                    else 
                    {
                       echo "nyyy";
                    }
                }
            }
        }
    }

}


?>


