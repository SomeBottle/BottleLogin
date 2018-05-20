<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require dirname(__FILE__)."/lconfig/configlogin.php";
$serverhostpath='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
$user=@$_SESSION[$sessionname.'username'];
function checklogin(){
	global $sessionname;
if(!isset($_SESSION[$sessionname.'iflogin'])||!isset($_SESSION[$sessionname.'username'])||$_SESSION[$sessionname.'iflogin']!=="yes"){
	$a=file_get_contents(dirname(__FILE__) .'/d.txt');
	if(!file_exists(dirname(__FILE__) .'/d.txt')){
		echo "<script>alert('BottleLogin没有初始化！');</script>";
		exit();
	}
	header('Location: '.$a.'m.php?t=login');
	exit();
}else{
	return 'yes';
}
}
function checkrefer(){
	global $sessionname;
	global $loginrefer;
	if($_SESSION[$sessionname.'iflogin']=="yes"){
		echo "<script>alert('已经登录！');window.open('$loginrefer','_self');</script>";
		exit();
	}	
}
function checklogged(){
	global $sessionname;
if(!isset($_SESSION[$sessionname.'iflogin'])||!isset($_SESSION[$sessionname.'username'])||$_SESSION[$sessionname.'iflogin']!=="yes"){
	return false;
}else{
	return true;
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
function setprofile($user,$item,$content){
	global $sessionname;
	if(empty($user)){
		$user=$_SESSION[$sessionname.'username'];
	}
	require dirname(__FILE__)."/user/$user/profile.php";
    $m[$item]=$content;
	$string='<?php $name="'.$name.'";$uid="'.$uid.'";$m='.var_export($m,true).';?>';
	file_put_contents(dirname(__FILE__)."/user/$user/profile.php",$string);
}
function getprofile($user,$item){
	global $sessionname;
	if(empty($user)){
		$user=$_SESSION[$sessionname.'username'];
	}
	require dirname(__FILE__)."/user/$user/profile.php";
	if(isset($m[$item])){
	return $m[$item];
	}else{
		return false;
	}
}
function removeprofile($user,$item){
	global $sessionname;
	if(empty($user)){
		$user=$_SESSION[$sessionname.'username'];
	}
	require dirname(__FILE__)."/user/$user/profile.php";
	unset($m[$item]);
	$string='<?php $name="'.$name.'";$uid="'.$uid.'";$m='.var_export($m,true).';?>';
	file_put_contents(dirname(__FILE__)."/user/$user/profile.php",$string);
}
function getname($id){
	global $sessionname;
	require dirname(__FILE__)."/userid/$id.php";
	return $username;
}
?>
