<?php
session_start();

/**
 * @author 		Wakhid W
 * @link 		http://wakhidw.blogspot.com
 * @copyright	2015 Wakhid W
 * index.php adalah file yang akan pertama kali diakses ketika alamat website dikunjungi 
 * system ini bertumpu pada 3 file diantaranya
 * - load.php
 * - paging.php
 * - check-login.php 
 */

/** 
 * membuat variable untuk menghindari akses langsung ke file
 */
define('index', 'boleh akses');

require 'load.php';

require includes . '/paging.php';
?>
