<?php 
/* 
 * 2018-01-28 后台保存
 *(c) Copyright 2018 Tamshen. All Rights Reserved. 
 * 
 */
include './data.php';
$hwe=$_GET['hwesave']==''?'':$_GET['hwesave']; //获取地址数据 
switch ($hwe)
{
case "themes":
//主题设置开始
$content='<?php return '.var_export($_POST,true).';';
file_put_contents("../".$GLOBALS['hwezt']."/config.php", $content);
echo "<script>alert('修改成功！');history.go(-1)</script>";
//主题设置结束
break;
case "options":
//基本设置开始
if ($_POST['hwezt']=="THEMES")
{
	echo "<script>alert('修改失败！你倒是选择一个主题哇！');history.go(-1)</script>";
}
else{
$save233='<?php 
	$hwedz=\''.$_POST['hwedz'].'\';
	$hwebt=\''.$_POST['hwebt'].'\'; 
	$hwezb=\''.$_POST['hwezb'].'\';
	$hwegjz=\''.$_POST['hwegjz'].'\';
	$hwejs=\''.$_POST['hwejs'].'\';
	$hwezt=\''.$_POST['hwezt'].'\';
	?>';
file_put_contents('../config.php',$save233);	
echo "<script>alert('修改成功！');history.go(-1)</script>";
}
//基本设置结束
break;
case "user":
//用户设置开始 
if (!preg_match("/^[\w-\.]{5,16}$/",$_POST['name'])) 
{  
    echo "<script>alert('非法账号格式（长度限制5-16位）');history.go(-1)</script>"; 
}  
elseif (!preg_match("/^[\w-\.]{5,16}$/",$_POST['password'])) 
{  
  echo "<script>alert('非法密码格式（长度限制5-16位）');history.go(-1)</script>";  
}  
else 
{  
	if ($_POST['password'] == $_POST['password2'])
{
		if(md5($_POST['password3'])==$密码){
			$save233='<?php $用户名=\''.$_POST['name'].'\'; $密码=\''.md5($_POST['password']).'\';?>';
			file_put_contents('./pass.php',$save233);
			echo "<script>alert('修改成功！请重新登录！');history.go(-1)</script>";
    		unset($_SESSION['loginhwe'.$密码]);
		}
		else{
			echo "<script>alert('修改失败！原来的密码不一样啊！');history.go(-1)</script>";
		}
}
else
{
echo "<script>alert('两次密码不一样！');history.go(-1)</script>";
}
}
//用户设置结束
break;
default:
header("Location:./");
}
?>


