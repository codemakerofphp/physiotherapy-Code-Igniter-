<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel • HRSOFTBD News Portal Admin Panel</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Description" content="Admin Panel • HRSOFTBD News Portal Admin Panel is a dynamic admin panel which allows multiple user at a time. Users could loogin and publish newses from personal site.">
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Admin Panel • HRSOFTBD News Portal Admin Panel" />
	<meta property="og:description" content="Admin Panel • HRSOFTBD News Portal Admin Panel is a dynamic admin panel which allows multiple user at a time. Users could loogin and publish newses from personal site. " />
	<meta name="author" content="HRSOFTBD Web Development Team">
	<meta property="og:site_name" content="Admin Panel • HRSOFTBD News Portal Admin Panel" />
	<meta property="article:publisher" content="https://www.facebook.com/hrsoftbd" />
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:description" content="Admin Panel • HRSOFTBD News Portal Admin Panel is a dynamic admin panel which allows multiple user at a time. Users could loogin and publish newses from personal site. "/>
	<meta name="twitter:title" content="Admin Panel • HRSOFTBD News Portal Admin Panel"/>
	<meta name="twitter:creator" content="@rzroky"/>
	
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">
	<style>
		#snackbar {
				visibility: hidden;
				min-width: 250px;
				margin-top: 0px;
				background-color: #333;
				color: #fff;
				text-align: center;
				border-radius: 2px;
				padding: 16px;
				position: fixed;
				z-index: 1;
				right: 5%;
				top: 30px;
				font-size: 17px;
		}
		

		#snackbar.show {
				visibility: visible;
				-webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
				animation: fadein 0.5s, fadeout 0.5s 2.5s;
		}

		@media screen and (min-width: 400px) {
				
		}

		@-webkit-keyframes fadein {
				from {bottom: 0; opacity: 0;} 
				to {top: 30px; opacity: 1;}
		}

		@keyframes fadein {
				from {top: 0; opacity: 0;}
				to {top: 30px; opacity: 1;}
		}

		@-webkit-keyframes fadeout {
				from {top: 30px; opacity: 1;} 
				to {top: 0; opacity: 0;}
		}

		@keyframes fadeout {
				from {top: 30px; opacity: 1;}
				to {top: 0; opacity: 0;}
		}
</style>
<script>
//alert(screen.width);
</script>

</head>
<body class="hold-transition login-page" <?php if($this->session->flashdata('message')) echo "onload='setTimeout(snackbar_function, 100)';" ?> >
<div class="login-box">
	<div class="login-logo">
		<center><img src="<?php echo base_url()."assets/dist/img/hrsoftbd_logo2.png" ; ?>" class="img img-responsive" width="100"></center>
		<a href="http://hrsoftbd.com" target="_blank"><b>HRSOFTBD</b></a> News Portal Admin Panel
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Sign into Your Panel</p>

		<form action="<?php echo base_url('login/login_validation'); ?>" method="post">
			<div class="form-group has-feedback">
				<input type="text" class="form-control" name="email" placeholder="Username or email"  required >
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" name="password" placeholder="Password" required >
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label>
							<input type="checkbox" class="form-control" name="remember_me" required> I am Not a Robot
						</label>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div>
				<!-- /.col -->
			</div>
		</form>

		<a href="#">I forgot my password</a><br>

	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<div id="snackbar"><?php echo $this->session->flashdata('message') ; ?></div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		});
	});
</script>
<script>
function snackbar_function() {
		var x = document.getElementById("snackbar")
		x.className = "show";
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
</body>
</html>
