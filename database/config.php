<?php
ob_start();
session_start();

$con = mysqli_connect("localhost", "root", "", "mywebsite");

if(mysqli_connect_error()) {
    echo "Failed to connect" , mysqli_connect_error();
} else
    echo "We are connected";
?>