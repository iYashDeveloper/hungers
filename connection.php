<?php
session_start();
ob_start();

$con=new mysqli("localhost","root","","hungers");

if(mysqli_connect_error())
{
    die("not connect!".mysqli_connect_error());
}

error_reporting(0);
?>
