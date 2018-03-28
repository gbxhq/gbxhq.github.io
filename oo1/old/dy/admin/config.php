<?php
/* 本源码由 枫叶网：www.maple5.com 破解授权 */
session_start();
error_reporting(0);
include ('../inc/aik.config.php');
define('SYSPATH', $aik['path']);
$rep = 'foot';
if ($_SESSION['admin_aik'] !== base64_decode('aHR0cDovL3d3dy5mZjYud2FuZy8=')) {
	header('location: ./login.php');
	exit;
}
$nav = '';
function md5ff($xzv_1 = 1) {
	return md5($xzv_1 . 'ff371');
} ?>