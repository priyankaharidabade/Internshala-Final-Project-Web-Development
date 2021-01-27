<?php
    $con = mysqli_connect('localhost','root','SUKnya@123','mobile_shopee') or die(mysqli_error($con));
    if(!isset($_SESSION['email'])){
        session_start();
    }
?>