<?php
/* 
 * 2018-01-28 后台登陆验证
 *(c) Copyright 2018 Tamshen. All Rights Reserved. 
 * 
 */
$name =  $_POST['name'] ;    
$password = md5($_POST['password']);
error_reporting(0);
include './pass.php';
if($password == $密码 and $name == $用户名)    
{    
  session_start();
  $_SESSION['loginhwe'.$密码]=$name;
  header("Location:./");  
  exit;  
}    
else    
{   
  echo "<script>alert('您输入的账号或密码不正确！');history.go(-1)</script>";  
}   
?>