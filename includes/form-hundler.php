<?php
$fname ="";
$lname ="";
$username ="";
$password1 ="";
$password2 ="";
$email1 ="";
$email2 ="";
$date ="";
$dateofbirth ="";
$gender ="";
$error_array = array();

if(isset($_POST["reg_user"])) {

    // first name
    $fname = strip_tags($_Post["reg_fname"]);
    $fname = str_replace(' ', '', $fname);
    $fname = ucfirst(strtolower($fname));
    $_SESSION["reg_fname"] = $fname;
    // last name
    $lname = strip_tags($_Post["reg_lname"]);
    $lname = str_replace(' ', '', $lname);
    $lname = ucfirst(strtolower($lname));
    $_SESSION["reg_lname"] = $lname;
    // user name
    $username = strip_tags($_POST["reg_username"]);
    $username = str_replace(' ', '', $username);
    $username = ucfirst(strtolower($username));
    $_SESSION["reg_username"] = $username;
    // email1
    $email1 = strip_tags($_POST["reg_email1"]);
    $email1 = str_replace(' ', '', $email1);
    $email1 = ucfirst(strtolower($email1));
    $_SESSION["reg_email1"] = $email1;
    // email2
    $email2 = strip_tags($_POST["reg_email2"]);
    $email2 = str_replace(' ', '', $email2);
    $email2 = ucfirst(strtolower($email2));
    $_SESSION["reg_email2"] = $email2;
    // password1
    $password1 = strip_tags($_POST["reg_password1"]);
    $password1 = str_replace(' ', '', $password1);
    $password1 = ucfirst(strtolower($password1));
    $_SESSION["reg_password1"] = $password1;
    // password2
    $password2 = strip_tags($_POST["reg_password2"]);
    $password2 = str_replace(' ', '', $password2);
    $password2 = ucfirst(strtolower($password2));
    $_SESSION["reg_password2"] = $password2;
    // date
    $date = date('y-m-d');
    //date of birth
    $dateofbirth = $_POST['dateofbirth'];
    // gender
    $gender = $_POST['gender'];
}
?>