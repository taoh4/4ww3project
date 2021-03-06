<?php
    include 'inc/login_verify.php';
    include 'inc/header.php';
	include 'inc/footer.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable = no">
    <!-- Metadata for mobile user saves the page -->
    <title>Login - Seek Coffee</title>
    <link rel="apple-touch-icon-precomposed" href="img/icon.png" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="192x192" href="img/icon.png">
    <!-- <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>    -->
    <!-- Goolge fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- External style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- External javascript -->
    <script type="text/javascript" src="assets/js/form_validation_registration.js"></script>
</head>

<body>
    <div class="container">
        <!-- Begin Header and menu
	================================================== -->
        <div class="placeholder">
            <div class="placeholder">
                <?php echo $header ?>
            </div>
        </div>

        <!-- End Header and menue
	================================================== -->

        <!-- Begin Body content
	================================================== -->
        <section>            
            <div class="form-container" >
                <!-- when user click the submit button, it will call validateRegistrationForm to validate the form first -->
                <form class="registration-form" id="form-registration" autocomplete="off" method="post"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <!-- if the user has registered successfully, show the message -->
                    <?php
                        if (@$_GET['registered'] == 'true')
                            echo '<div style="color: green; margin-top: 10px; font-size: 16px"><strong>You have registered successfully, please login!</strong></div>'
                    ?>
                    <div>
                        <h3>Login</h3>
                    </div>
                    <!-- If the user input the incorrect username or password, show the error message -->
                    <?php
                        if(array_key_exists('login_status_message', $errors)){
                                $msg = "";
                                if($errors['login_status_message']=='empty'){
                                    $msg = "Username and password can not be empty!";
                                }else if($errors['login_status_message']=='invalid'){
                                    $msg = "Invalid credentials";
                                }
                                echo '<div style="color: red">'.$msg.'</div>';
                        }
                    ?> 

                    <!-- prefill the form if the user choose remember me -->
                    <?php
                            $username_remembered = 0;
                            $username = '';
                            if(isset($_COOKIE['rememberme'])){
                                if(!empty($_COOKIE['rememberme'])){
                                    if(isset($_COOKIE['username'])){
                                        if(!empty($_COOKIE['username'])){
                                            $username_remembered = 1;
                                            $username = $_COOKIE['username'];
                                        }  
                                    }                                   
                                }
                            }
                    ?>

                    <!-- input username -->
                    <div class="form-group-lable-and-input">
                        <label>User Name </label>
                        <input autocomplete="txt-username" type="text" id="txt-username" name="txt-username" autofocus=""
                                value = "<?php  if($input_username !== ''){echo $input_username;}else if($username_remembered == 1){echo $_COOKIE['username'];} ?>">
                    </div>
                    <!-- input password -->
                    <div class="form-group-lable-and-input">
                        <label>Password </label>
                        <input autocomplete="txt-password" type="password" id="txt-password" name="txt-password" value="<?php  echo $input_password; ?>">
                    </div>
                    <!-- input checkbox remember me -->
                    <div class="form-group-lable-and-input">
                        <div id="user-agreement">
                            <input type="checkbox" id="lblrememberme" name="lblrememberme"
                                    <?php if($username_remembered == 1 || $rememberme){echo 'checked="checked"';}?>>
                            <label class="form-check-label" for="lblrememberme">Remember me</label>
                        </div>
                    </div>
                    <!-- submit button -->
                    <div>
                        <input type="hidden" name="login_token" value="login_token" />
                        <input class="btn" type="submit" value="Submit">
                        <p class="message">Do not have account? <a
                                href="registration.php">&nbsp;Registration</a></p>
                    </div>
                </form>
            </div>

        </section>
        <!-- End Body content
	================================================== -->
    </div>

    <!-- Begin Footer
	================================================== -->
    <div class="footerpage"> <?php echo $footer?></div>
    <!-- End Footer
	================================================== -->
</body>

</html>