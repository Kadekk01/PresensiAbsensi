<?php
require_once "_config/config.php";
if(isset($_SESSION['user'])){
    if($_SESSION['user'] == 'admin'){
        echo "<script>window.location='".base_url('admin')."';</script>";
    }
    else{
        echo "<script>window.location='".base_url('dashboard')."';</script>";
    }
}
else{
    echo "<script>window.location='".base_url('auth/masuk.php')."';</script>";
}
?>