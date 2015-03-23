<?php 
/** cegah akses langsung pada file */
if( !defined('index') ) { die('Halaman Di lindungi'); }

/**
 * paging.php berfungsi untuk menangan perpindahan halaman dan 
 * menghindari mengakses file secara langsung( ini masih sederhana )
 * fungsi ini didasarkan pada $_GET untuk menangkap parameter dari URL
 * contoh : http://localhost/login/?page=check-login
 * maka parameter yang ditangkap adalah page dengan syntax $_GET['page']
 * yang kemudian di eksekusi dengan IF inline dan Switch Case 
 */

$paging = ( isset($_GET['page']) && $_GET['page'] ) ? $_GET['page'] : '';

switch ($paging) {
	case 'check-login':
		require includes . '/check-login.php';
		break;
	case 'logout':

		/**
		 * menghapus session login yang tersimpan di browser */
		session_destroy();

		/** kembali kehalaman Login*/
		header('location:'.$url.'/login-page.php');

		break;
	default:
		require themes . '/index.php';
		break;
}