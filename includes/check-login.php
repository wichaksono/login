<?php
if( isset($_POST) )
{
	// check nilai $_POST dengan IF inline
	$username = ( isset($_POST['username']) && !empty($_POST['username']) ) ? $_POST['username'] : FALSE;
	$password = ( isset($_POST['password']) && !empty($_POST['password']) ) ? $_POST['password'] : FALSE;

	/**
	 * jika terjadi Error, Error akan disimpan di Session
	 */
	$error = '';
	if( !$username ){
		$error = 'Username tidak boleh kosong'; 
	
	}else if( !$password ){
		$error = 'Password tidak boleh kosong';
	
	}else{

		// escape value untuk hindari SQL injection
		$username = $koneksi->escape_string($username);
		$password = $koneksi->escape_string($password);

		// Encryption password dengan MD5
		$password = md5($password);

		/**
		 * memulai melakukan check ke database apakah username dan password yang sudah dienkripsi
		 * terdapat didalam table users. 
		 */
		$sql 	= "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$result	= $koneksi->query($sql);
		
		/**
		 * Jika akun login yang dimaksud Ada
		 */
		if ($result->num_rows > 0)
		{
			$_SESSION['_login']     = 'open';
			$_SESSION['_username']  = ucfirst($username);

			header('location:'. $url.'/admin');
			exit();
		}else{

			$error = 'Username dan Password yang ada masukan tidak dikenali';
		}

	}

	/**
	 * jika terdapat error, laporan error disimpan di session
	 * kemudian user akan dibawa kehalaman login kembali
	 */
	if( $error != '' )
	{
		$_SESSION['error_login'] = $error;
		header('location:'.$url.'/login-page.php');
		exit();
	}
}