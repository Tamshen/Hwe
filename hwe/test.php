<?php  
/* 
 * 2018-01-28 后台验证
 *(c) Copyright 2018 Tamshen. All Rights Reserved. 
 * 
 */
include './pass.php'; //密码数据
session_start();   	//创建  
    if(empty($_SESSION['loginhwe'.$密码]))//判断登录时session是否存在
    {
        header("Location:login.php"); //不存在 回到登录页面  
        exit;
    }  
?>