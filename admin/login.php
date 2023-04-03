<?php

	session_start();
	if($_SESSION){
		
		//echo "<script>location.href='index.php';</script>";
	}
	require_once('cls_dbconfig.php');
	function __autoload($classname){
	  require_once("$classname.class.php");
	}
	$cls_customer_login = new cls_customer_login();
	
	
?>

<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="assets/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/aapple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/afavicon.png">
	<link rel="stylesheet" href="alert/alertify.min.css">
   <link rel="stylesheet" href="alert/default.min.css">
	<style>
	.auth-box{
		width:30%;	
	}
	.auth-box .content{
		width:90%;
	}
	</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
			<center>
				<div class="auth-box ">
						
						<div class="content">
							<div class="logo text-center"><h1>ADMIN LOGIN</h1><img src="assets/img/" alt="" class="img-responsive logo" width="90%" height="20"></div>
							<form class="form-auth-small" id="cuslogin">
								<div class="form-group">
									<label for="signup-email" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" id="signup-email" name="uname" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signup-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signup-password" name="password" placeholder="Password">
								</div>
								<!--<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>-->
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<!--<span><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>-->
								</div>
							</form>
					
					</div>
					
				</div>
				</center>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
  <script src="alert/alertify.min.js"></script>
  
  
  <script>
	$(function(){
		$("#cuslogin").submit(function(e){
				e.preventDefault();
				
				$.ajax({
					type:"post",
					url:"cus_login.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
					//alert(res);
					//return false;
					
					if(res == 'no'){
						alertify.error('Username or Password does not match !!');
						return false;
					}
					location.href='index.php';
				}
			})
			
		});
	});
	</script>
	
</body>

</html>
