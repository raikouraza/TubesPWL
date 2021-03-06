<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIGN IN AND SIGN UP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="../src/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/bootstrap.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/util.css">

    <link rel="stylesheet" type="text/css" href="src/vendor/bootstrap/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/signinsignup.css">

    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/main.css">
    <!--===============================================================================================-->
    <style>
        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #66fcf1;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
        }
        .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
            border-color:
                    #c5c6c7 #e9ecef
                    #c5c6c7;
        }
        a {
            color:
                    #45a29e;
            text-decoration: none;
            background-color:
                    transparent;
        }
        .wrap-login100 {
            width: 960px;
            background:
                    #c5c6c7;
            border-radius: 10px;
            overflow: hidden;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 80px 130px 33px 95px;
        }
        .input100 {
            font-family: Poppins-Medium;
            font-size: 15px;
            line-height: 1.5;
            color:
                    #66fcf1;
            display: block;
            width: 100%;
            background: #ffffff;
            height: 50px;
            border-radius: 10px;
            padding: 0 30px 0 68px;
        }
        .login100-form-btn {
            font-family: Montserrat-Bold;
            font-size: 15px;
            line-height: 1.5;
            color:
                    #fff;
            text-transform: uppercase;
            width: 100%;
            height: 50px;
            border-radius: 10px;
            background:
                    #45a29e;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 25px;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

    </style>
</head>
<body>
<!-- INI CONTAINER UNTUK TEMPLATE TABS, TAB SIGN IN DAN SIGN UP -->
<div class="container mt-3">
    <h2 ><p style="font-size: 30pt">SIGN IN & SIGN UP</p></h2>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs ">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#signin">Sign In</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#signup">Sign Up</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#forgot">Forgot Password</a>
        </li>
    </ul>
    <!-- Tab panes -->
    <form method="post" enctype="multipart/form-data">
    <!-- untuk sign in -->
    <div class="tab-content">
        <div id="signin" class="container tab-pane active"><br>
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <div class="login100-pic js-tilt" data-tilt>
                            <img src="src/images/movieicon.png" alt="IMG">
                        </div>
                        <div class="login100-form validate-form">
                            <span class="login100-form-title">
                                Member Login
                            </span>
                            <div class="wrap-input100 validate-input"
                                 data-validate="Registered User is Required">
                                <input class="input100" type="text" name="txtUsername" id="txtUsername"
                                       placeholder="Username">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <input class="input100" type="password" name="txtPassword" id="txtPassword"
                                       placeholder="Password">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" type="submit" name="btnLogin">SIGN IN</button>
                            </div>
                            <div class="text-center p-t-12">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#forgot">Forgot Password?</a>

                                </li>
                            </div>
                            <div class="text-center p-t-136">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#signup">Create new account</a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- untuk sign in selesai -->
        <!-- untuk sign up start -->
        <div id="signup" class="container tab-pane fade"><br>
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <div class="login100-form validate-form">
                            <!-- untuk field pada form -->
                            <legend>SIGN UP</legend>
                            <label for="txtUsername" class="form-label"> Username </label>
                            <input type="text" id="txtUsername" name="txtSUUsername" placeholder="Username"
                                   class="input100">
                            <label for="txtPassword" class="form-label"> Password </label>
                            <input type="password" id="txtPassword" name="txtSUPassword" placeholder="Password"
                                   class="input100">
                            <label for="txtFirstName" class="txtFirstName"> First Name </label>
                            <input type="text" id="txtFirstName" name="txtSUFirstName" placeholder="Your First Name"
                                   class="input100">
                            <label for="txtLastName" class="txtLastName"> Last Name </label>
                            <input type="text" id="txtLastName" name="txtSULastName" placeholder="Your Last Name"
                                   class="input100">
                            <label for="txtEmail" class="txtEmail"> Email </label>
                            <input type="email" id="txtEmail" name="txtSUEmail" placeholder="xyz@email.com"
                                   class="input100">
                            <br>
                            <button type="submit" class="login100-form-btn" name="btnSignup">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        untuk sign up end -->
        <!--         untuk forgot password start-->
        <div id="forgot" class="container tab-pane fade"><br>
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <div class="login100-form validate-form">
                            <!-- untuk field pada form -->
                            <legend>Forgot Password</legend>
                            <label for="txtEmail" class="txtEmail"> Email: </label>
                            <input type="email" id="txtEmail" name="txtFPEmail" placeholder="xyz@email.com"
                                   class="input100" aria-errormessage="Email is Required">
                            <br>
                            <button class="login100-form-btn" type="submit" name="btnForgotPassword">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- untuk forgot password end -->
    </form>
    </div>
</div>
<!-- CONTAINER TAB UNTUK SIGN IN DAN SIGN UP END-->
<script>
    $(document).ready(function () {
        $(".nav-tabs a").click(function () {
            $(this).tab('show');
        });
    });
</script>

<!--===============================================================================================-->
<script src="../src/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../src/vendor/bootstrap/js/popper.js"></script>
<script src="../src/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../src/vendor/bootstrap/js/select2.js"></script>
<!--===============================================================================================-->
<script src="../src/vendor/bootstrap/js/tilt.jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({scale: 1.1})
</script>
<!--===============================================================================================-->
<script src="../src/vendor/bootstrap/js/main.js"></script>
</body>
</html>
