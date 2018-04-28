<?php
require dirname(__FILE__)."/lconfig/configlogin.php";
$serverhostpath='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
$user=@$_SESSION[$sessionname.'username'];
function checklogin(){
	global $sessionname;
if(!isset($_SESSION[$sessionname.'iflogin'])||!isset($_SESSION[$sessionname.'username'])||$_SESSION[$sessionname.'iflogin']!=="yes"){
	echo "<script>alert('没有登录...');window.open('login.php','_self');</script>";
	exit();
}else{
	return 'yes';
}
}
function checkloginadmin(){
	global $sessionname;
if(!isset($_SESSION[$sessionname.'iflogin'])||!isset($_SESSION[$sessionname.'username'])||$_SESSION[$sessionname.'iflogin']!=="yes"){
	echo "<script>alert('没有登录...');window.open('./bottlelogin/login.php','_self');</script>";
	exit();
}else{
	return 'yes';
}
}
function checkrefer(){
	global $sessionname;
	if($_SESSION[$sessionname.'iflogin']=="yes"){
		echo "<script>alert('已经登录！');window.open('$loginrefer','_self');</script>";
	}
}
function getuser(){
	global $sessionname;
	return $_SESSION[$sessionname.'username'];
}
function getid($user){
	global $sessionname;
	if(empty($user)){
		$user=$_SESSION[$sessionname.'username'];
	}
	require dirname(__FILE__)."/user/$user/profile.php";
	return $uid;
}
function getname($id){
	global $sessionname;
	require dirname(__FILE__)."/userid/$id.php";
	return $username;
}
?>