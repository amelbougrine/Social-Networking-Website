<?php 
include 'database/config.php';
if(isset($_SESSION['username'])){
    $userLoggedIn = $_SESSION['username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
    $user = mysqli_fetch_array($user_details_query);
} else{
    header("Location: register.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/style-header.css">
    </head>
    <body>
        <div class="header_bar">
            <div class="nav-center">
                <div class="dropdown">
                    <?php echo "Hello";?>
                    <span><img src="<?php echo $user['profile_pic']; ?>"></span>
                    <div class="dropdown-content">
                        <div class="dropdown-a">
                            <h5><a href="<?php echo $userLoggedIn; ?>"><i style="color:#3875c5;" class="fas fa-user"></i>
                                <?php echo $user ['username']?></a>
                            </h5>
                            <hr>
                            <a href="requests.php"><i style="color:#3875c5;" class="fas fa-users"></i>&nbsp;Requests</a>
                            <hr>
                            <a href="account_settings.php"><i style="color:#3875c5;" class="fas fa-cog"></i>&nbsp;Settings</a><br><br>
                            <a href="includes/handlers/logout.php"><i style="color:#3875c5;" class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                        </div>
                    </div> 
                    <?php echo $user['first_name']; ?><?php echo "!";?> 
                </div>
            </div>
            <nav>
                <a href="index.php"><i style="color: #3875C5;" class="fas fa-home"></i>&nbsp;Home</a>&nbsp;&nbsp;
                <a href=""><i style="color: #3875C5;" class="fas fa-envelope"></i>&nbsp;Messages</a>&nbsp;&nbsp;
                <a href=""><i style="color: #3875C5;" class="fas fa-bell"></i>&nbsp;Notifications</a>
          </nav>
        </div>
    </body>
</html>

