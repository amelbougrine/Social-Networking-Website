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
    // email validation
    if ($email1 == $email2) {
        if (filter_var($email1, FILTER_VALIDATE_EMAIL)) {
            $email1 = filter_var($email1, FILTER_VALIDATE_EMAIL); 
            $e_check = mysqli_query($con, "SELECT email FROM users WHERE email='$email1'"); 
            $num_rows = mysqli_num_rows($e_check);
            if ($num_rows > 0) {
                array_push($error_array, "Email already in use");
            }
        } else{
            array_push($error_array, "Email is invalid format");
        }   
    } else{
        array_push($error_array, "Email doesn't match");
    }
    // username validation
    $user_check = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
    $num_rows = mysqli_num_rows($user_check); 
    if($num_rows > 0){
        array_push($error_array, "Username already exists");
    } 
    if(strlen($username) > 20 || strlen($username) < 2){
        array_push($error_array, "Username must be between 2 and 20");
    }        
    else if(preg_match('/[^A-Za-z0-9]/', $username)){
        array_push($error_array, "You username can only contain english characters or numbers");
    }
    // fname validation
    if(strlen($fname) > 25 || strlen($fname) < 2){
        array_push($error_array, "Your first name must be between 2 and 25 characters");
    }
    // lname validation
    if(strlen($lname) > 25 || strlen($lname) < 2){
        array_push($error_array, "Your last name must be between 2 and 25 characters");
    }
    // password validation
    if(preg_match('/[^A-Za-z0-9]/', $password1)){
        array_push($error_array, "Password can only contain english characters or numbers");
    } else if(strlen($password1 > 30 || strlen($password1) < 5)){
            array_push($error_array, "Password must be between 5 and 30 characters or numbers"); 
        }
    if($password1 != $password2){
        array_push($error_array, "Passwords don't match");
    }
    // create profile
    if(empty($error_array)){ 
        $password1 = md5($password1);
        if($gender == "Male"){
            $profile_pic = "assets/images/male.png";
        }
        if($gender == "Female"){
            $profile_pic = "assets/images/female.png";
        }
        $query = "INSERT INTO users (first_name, last_name, username, email, dateofbirth, gender, password, signup_date, profile_pic, cover_pic, num_posts, num_likes, user_closed, friend_array, address, city, hometown, country, mobile, phone, work) VALUES ('$fname', '$lname', '$username', '$email1', '$dateofbirth', '$gender', '$password1', '$date', '$profile_pic', '$cover_pic', '0', '0', 'no', ',', '$address', '$city', '$hometown', '$country', NULL, NULL, '$work')";
        mysqli_query($con, $query);
        $_SESSION['username'] = $username;
        header('location: index.php');
    }
}
?>