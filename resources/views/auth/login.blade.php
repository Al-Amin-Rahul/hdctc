<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('/')}}login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}login/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100  p-b-20">
            <form class="login100-form validate-form" action="{{ route('admin/login') }}" method="POST">
                @csrf
                <span class="login100-form-avatar">
						<img src="{{asset('/')}}login/images/avatar-01.jpg" alt="AVATAR">
					</span>

                <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                    <input class="input100" type="email" name="email">
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="container-login100-form-btn">
                    <input class="login100-form-btn" type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('/')}}login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}login/vendor/bootstrap/js/popper.js"></script>
<script src="{{asset('/')}}login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}login/vendor/daterangepicker/moment.min.js"></script>
<script src="{{asset('/')}}login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}login/js/main.js"></script>

</body>
</html>
