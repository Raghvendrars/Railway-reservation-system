<?php

$localhost="localhost";
$root="root";
$password="";
$database="registration";

$con=mysqli_connect($localhost,$root,$password,$database);

if ($con== True) {
    echo "Success";
}
else {
    
 echo "Unsuccess";
    }

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/forget9.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Feb 2019 07:56:21 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/logcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/logcss/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/logcss/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/logcss/iofrm-theme9.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <img src="images/graphic5.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logoimg/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Password Reset</h3>
                        <p>To reset your password, enter the email address you use to sign in to iofrm</p>
                        <form>
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
                            <div class="form-button full-width">
                                <button id="submit" type="submit" class="ibtn btn-forget">Send Reset Link</button>
                            </div>
                        </form>
                    </div>
                    <div class="form-sent">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logoimg/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                        <h3>Password link sent</h3>
                        <p>Please check your inbox <a href="http://brandio.io/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="472e2821352a072e2821352a33222a372b263322692e28">[email&#160;protected]</a></p>
                        <div class="info-holder">
                            <span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/logjs/jquery.min.js"></script>
<script src="js/logjs/popper.min.js"></script>
<script src="js/logjs/bootstrap.min.js"></script>
<script src="js/logjs/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/forget9.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Feb 2019 07:56:21 GMT -->
</html>