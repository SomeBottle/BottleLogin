﻿<?php
session_start();
require "./lconfig/configlogin.php";
$message=$_POST['mes'];
session_write_close();
?>
<head>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<title><?php echo $windowtitle;?></title>
</head>
<body>
<center>
<h2>&nbsp;</h2>
<h2><?php echo $maintitle;?></h2>
<h2>&nbsp;</h2>
<h3><?php echo $message;?></h3>
<form action="verify.php?do=login" method="post">
<div id="userinput">
<p><strong>Name:</strong><input type="text" class="form-control" id="user" name="user" placeholder="请输入名字"></input></p>
<input type="hidden" id="dotype" name="dotype" value="login.php"></input>
</div>
<div id="passinput">
<p><strong>Password:</strong><input type="password" class="form-control" id="pass" name="pass" placeholder="请输入密码"></input></p>
</div>
<div id="buttons">
<p><button type="submit" class="btn btn-default">提交</button>&nbsp;<button type="button" class="btn btn-info" onclick="goreg()">注册</button></p>
</div>
</form>
</center>
</body>
<?php
if(strpos($message,"Founded")!==false){
	?>
	<script>
	setTimeout("window.open('<?php echo $loginrefer;?>','_self');",2500);
	</script>
	<?php
}
?>
<script>
function goreg(){
	window.open('register.php','_self');
}
</script>