<?php
/* 
 * 2018-01-28 程序首页
 * Hwe Beta 1.01（20180130）
 *(c) Copyright 2018 Tamshen. All Rights Reserved. 
 * 
 */
error_reporting(E_ALL & ~E_NOTICE);//报告除了警告以外的所有错误
date_default_timezone_set("Asia/Chongqing");//时区
include './config.php'; //读取网站核心数据
$turl = $hwedz.$hwezt;


$tdata=include(".".$hwezt."/config.php");
include ".".$hwezt."/index.php";//读取主题文件
?>