<?php 
session_start(); // memulai session untuk membuat / mendapatkan nilai session

/** 
 * menyisipkan file config.php untuk mendapatkan
 * variable $url
 */
require 'config.php';

?>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/custome.css">
	<!-- Script jQuery CDN google library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="body">

	<!-- Form Login -->
	<div class="col-md-offset-4 login col-md-4">

		<h2 class="text-center">Login</h2>
		<div class="boxed">
			<?php
			if( isset($_SESSION['error_login']) )
			{
				echo '<div class="alert alert-danger" role="alert">'.$_SESSION['error_login'].'</div>';
				
				// menghapus session error 
				unset($_SESSION['error_login']);
			}
			?>
			<form action="<?php echo $url;?>/?page=check-login" role="form" method="post">
				<label for="">Username</label>
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
				  <input type="text" class="form-control" name="username" placeholder="Username" aria-describedby="basic-addon1">
				</div>
				<label for="">Password</label>
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
				  <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon1">
				</div>
				<button class="btn btn-primary btn-block">Login</button>
			</form>
		</div>	
		
	</div>
	<!-- End Form Login -->

</body>
</html>