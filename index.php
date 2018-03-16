<?php
/* 
 * 程序首页
 * 创建于 2018-01-28 
 * 版本号 20180316
 * (c) Copyright 2018 Tamshen. All Rights Reserved. 
 * 
 */
error_reporting(E_ALL & ~E_NOTICE);//报告除了警告以外的所有错误
date_default_timezone_set("Asia/Chongqing");//时区
include './config.php'; //引入网站核心数据
$surl = '//'.$_SERVER['SERVER_NAME']; //网站地址
$turl = $surl.hwedz.hwezt; //主题地址
$t = include(".".hwezt."/config.php");//引入主题数据文件
include ".".hwezt."/index.php";//读取主题文件
?>



