<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../../src/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../src/vendor/bootstrap/css/bootstrap.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../src/vendor/bootstrap/css/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../src/vendor/bootstrap/css/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../src/vendor/bootstrap/css/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../src/vendor/bootstrap/css/util.css">
    <link rel="stylesheet" type="text/css" href="../../src/vendor/bootstrap/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="../../src/images/movieicon.png" alt="IMG">
            </div>
            <form method="post" enctype="multipart/form-data" class="login100-form validate-form">
					<span class="login100-form-title">
						Admin Login
					</span>
                <div class="wrap-input100 validate-input" data-validate = "Registered Username is Required">
                    <input class="input100" type="text" name="txtUsername" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="txtPassword" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" name="btnLogin">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--===============================================================================================-->
<script src="../../src/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../../src/vendor/bootstrap/js/popper.js"></script>
<script src="../../src/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../../src/vendor/bootstrap/js/select2.js"></script>
<!--===============================================================================================-->
<script src="../../src/vendor/bootstrap/js/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="../../src/vendor/bootstrap/js/main.js"></script>
</body>
</html>
