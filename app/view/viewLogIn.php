<?php
require_once "View.php";

class viewLogIn extends View{
    public function output(){
        ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='<?php echo URLROOT; ?>public/js/menu.js'></script>
<?php require APPROOT.'/model/homemenu.php'; ?>
<title>Log In</title>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="<?php echo URLROOT; ?>public/js/logIn.js"></script>
<link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/logIn.css">;
<body onload='homePage()'>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/banner_img.png" alt="IMG">
				</div>
							<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title">
						Welcome To Amoun
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="sub">
							Login
						</button>
					</div>
                                <br>

					<div class="text-center p-t-136">
						<a class="txt2" href="Registration.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				<body>
			</div>
		</div>
	</div>
<?php 
    require_once '../app/model/logIn.php';
    }
}

?>