<?php
session_start();

/* Check Apakah user sudah login atau belum*/
if( !isset($_SESSION['_login']) )
{
	header('location:'.$url.'/login-page.php');
	exit;

}else{

	if( !defined('index') )
	{
		define('index', 'boleh akses');
	}
}

/** 
 * menyisipkan file load.php, agar bisa menggunakan variable yang sudah dibuat 
 */
require ( './../load.php');

?>

<html>
<head>
	<title>Halaman Administrator</title>
	<link rel="stylesheet" href="<?php echo $url?>/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $url?>/assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $url?>/assets/custome.css">
	
	<script scr="<?php echo $url?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="body home-page">
		
	<!-- Fixed bar -->

	<nav class="fixed-bar">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<h1 class="title-site">
						<a href="#">Halaman Administrator</a>
					</h1>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4 text-right">
				<span class="user">Hi, <?php echo $_SESSION['_username'];?></span>
					<a href="<?php echo $url;?>/login-page.php" class="btn btn-sm btn-danger"><i class="fa fa-sign-out"></i>  Logout</a>	
				</div>
			</div>
		</div>
	</nav>

	<!-- End Fixed bar -->

	<div class="col-md-offset-2 content col-md-8">
	<pre>
		ini adalah halaman yang hanya ditunjukan kepada admin saja.
		user : admin
		pass : admin
	</pre>
	</div>
	
	<footer class="footer">
		<div class="text-center">
			&copy; 2015 <a href="http://wakhidw.blogpost.com">Wakhid W</a>
		</div>
	</footer>
</body>
</html>
