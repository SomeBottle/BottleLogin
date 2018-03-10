<?php
session_start();
session_destroy();
session_write_close();
echo "<script>window.open('login.php','_self');</script>";
?>
<h1>正在卸载箱子...</h1>