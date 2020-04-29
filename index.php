<?php
include 'database/config.php';
include 'includes/form-handler.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!-- Top content -->
        <div class="top-content">	
            <div class="inner-bg">
                <div class="container">	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Create an account. It's free to register!</h1>
                            <div class="description">
                                <p>Sign up and start sharing your photos and updates with your friends.
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">    	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter Email and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form action="login.php" method="POST" class="login-form">
                                       <!-- Email Addresss -->
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email Address</label>
                                            <input type="text" name="log_email" placeholder="Email Address" class="form-email form-control" required>
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group">
				                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="log_password" placeholder="Password" class="form-password form-control" required>
                                        </div>
                                        <button class="btn btn-primary" type="submit" name="login_button">Sign in</button>
                                    </form>     
			                    </div>
		                    </div>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-5">
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
                                <div class="form-bottom">
				                    <form action="index.php" method="POST" class="registration-form">
                                         <!-- First Name -->
                                         <div class="form-group">
				                    		<label class="sr-only">First name</label>
                                            <input class="form-first-name form-control" type="text" name="reg_fname" placeholder="First Name" value="<?php if (isset($_SESSION['reg_fname'])) {
                                                echo $_SESSION['reg_fname'];
                                            } ?>" required>
				                        </div>
				                        <!-- Last Name -->
				                        <div class="form-group">
				                        	<label class="sr-only">Last name</label>
                                            <input class="form-last-name form-control" type="text" name="reg_lname" placeholder="Last Name" value= "<?php if (isset($_SESSION['reg_lname'])) {
                                                echo $_SESSION['reg_lname'];
                                            } ?>" required>
				                        </div>
                                        <!-- Username -->
				                        <div class="form-group">
				                        	<label class="sr-only">Username</label>
                                            <input class="form-username form-control" type="text" name="username" placeholder="Username (Cannot be changed)" value="<?php if (isset($_SESSION['username'])) {
                                                echo $_SESSION['username'];
                                            } ?>" required>
                                            <?php
                                                if(in_array("Username already exists", $error_array)) echo "Username already exists";
                                                else if(in_array("Username must be between 2 and 20", $error_array)) echo "Username must be between 2 and 20";
                                                else if(in_array("You username can only contain english characters or numbers", $error_array)) echo "You username can only contain english characters or numbers";
                                            ?>
                                        </div>
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label class="sr-only">Email</label>
                                            <input class="form-email form-control" type="text" name="reg_email1" placeholder="Email" value="<?php if (isset($_SESSION['reg_email1'])) {
                                                echo $_SESSION['reg_email1'];
                                            } ?>" required>
                                        </div>
                                        <!-- Confirm Email -->
                                        <div class="form-group">
                                            <label class="sr-only">Confirm Email</label>
                                            <input class="form-confirm-email form-control" type="text" name="reg_email2" placeholder="Confirm Email" value="<?php if (isset($_SESSION['reg_email2'])) {
                                                echo $_SESSION['reg_email2'];
                                            } ?>" required>
                                            <?php
                                            if (in_array("Email already in use", $error_array)) echo "Email already in use";
                                            else if (in_array("Email is invalid format", $error_array)) echo "Email is invalid format";
                                            else if (in_array("Email doesn't match", $error_array)) echo "Email doesn't match";
                                            ?>
                                        </div> 
                                        <!-- Password -->
                                        <div class="form-group">
                                            <label class="sr-only">Password</label>
                                            <input class="form-password form-control" type="password" name="reg_password1" placeholder="Password" required>
                                        </div>                   
                                        <!-- Confirm Password -->
                                        <div class="form-group">
                                            <input class="form-confirm-password form-control" type="password" name="reg_password2" placeholder="Confirm Password" required>
                                        </div>
                                        <!-- Gender -->
                                        <div class="form-group" style="float:left; color:#DCDCDC">
                                            <label class="sr-only">Gender</label>
                                            <tr>
                                                <td>Gender &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="Male" <?php if (isset($_POST['gender']) && $_POST['gender'] == "Male"){
                                                ?> checked <?php
                                                } ?> required> Male &nbsp;
                                                <input type="radio" name="gender" value="Female" <?php if (isset($_POST['gender']) && $_POST['gender'] == "Female"){
                                                ?> checked <?php
                                                } ?> required> Female
                                                </td>
                                            </tr>
                                        </div>                         
                                        <!-- Birthday -->
                                        <br>
                                        <div class="form-group" style="float:left; margin-right:35%; color:#DCDCDC">      
                                            <label class="sr-only">Birthday</label>
                                            <tr>
                                                <td>Birthday
                                                &nbsp;&nbsp;
                                                <input type="date" name="dob" required>
                                                </td>
                                            </tr>
                                        </div>
                                        <br>                                        
                                        <br>                       
                                        <!-- Submit Button -->
                                        <button type="submit" name="reg_user" class="btn btn-primary">Sign me up!</button>         
                                    </form>
                                </div>
			                </div>
                        </div> 	
                    </div>
                </div>
            </div>
        </div> 
        <footer>
        	<div class="container">
        		<div class="row">	
        			<div class="col-sm-8 col-sm-offset-4">
        				<div class="footer-border"></div>
        				<p>2020 Made with Passion | Amel Bougrine &nbsp;<i class="fas fa-copyright"></i></p>
        			</div>
        		</div>
        	</div>
        </footer>  
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>                      
    </body>
</html>