<?php
//include constant.php
include('../config/constant.php');
//1. destroy the session
session_destroy();
//2.redirect to admin page
header('location:'.SITEURL.'admin/login.php');
?>