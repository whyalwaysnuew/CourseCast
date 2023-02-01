<!DOCTYPE html>
<html lang="en">
<head>
	<title>CourseCast - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
    <link rel="shortcut icon" type="image/icon" href="..." />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset-login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset-login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('asset-login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset-login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset-login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('asset-login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset-login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset-login/css/main.css')}}">
<!--===============================================================================================-->

</head>
<body>

	<section class="section-login">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form">
                        <a href="{{route('welcome')}}">
                            <span class="login100-form-title p-b-43">
                                Login <span style="color: #255efc">C</span>ourse<span style="color: #255efc">C</span>ast
                            </span>
                        </a>
                        
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Email</span>
                        </div>
                        
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="pass">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Password</span>
                        </div>
    
                        <div class="flex-sb-m w-full p-t-3 p-b-32">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                    Remember me
                                </label>
                            </div>
    
                            <div>
                                <a href="#" class="txt1">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>
                
    
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                        
                        <div class="text-center p-t-46 p-b-20">
                            <span class="txt2">
                                or sign up using
                            </span>
                        </div>
    
                        <div class="login100-form-social flex-c-m">
                            <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                                <i class="fa fa-facebook-f" aria-hidden="true"></i>
                            </a>
    
                            <a href="{{route('user.login.google')}}" class="login100-form-social-item flex-c-m bg3 m-r-5">
                                <i class="fa fa-google" aria-hidden="true"></i>
                            </a>
                            
                            <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>

                        </div>
                    </form>
    
                    <div class="login100-more" style="background-image: url('{{asset('asset-login/images/bg-01.jpg')}}');">
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--===============================================================================================-->
	<script src="{{asset('asset-login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset-login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset-login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('asset-login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset-login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset-login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('asset-login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset-login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset-login/js/main.js')}}"></script>

</body>
</html>