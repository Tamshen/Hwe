<?php
/* 
 * 2018-01-28 后台主要数据
 *(c) Copyright 2018 Tamshen. All Rights Reserved. 
 * 
 */
error_reporting(E_ALL & ~E_NOTICE);//报告除了警告以外的所有错误
date_default_timezone_set("Asia/Chongqing");//时区
header("Content-Type:text/html;charset=utf-8");//utf8头
include './test.php'; //验证
include './pass.php'; //用户数据
include '../config.php'; //网站核心数据
define("hwev", "20180316"); //程序版本号
$hwegg = "http://api.tamshen.com/hwe/hwe.json";//
//后台地址数据
$hwe=$_GET['hwe']==''?'':$_GET['hwe'];
switch ($hwe){
case "themes":$hwe="主题设置";break;
case "options":$hwe="基本设置";break;
case "upload_file":$hwe="上传管理";break;
case "user":$hwe="用户设置";break;
case "out":session_destroy();echo "<script>alert('您已退出登录！');</script>";header("Location:./");break;
default:$hwe="首页";}
//程序公告
function gonggao()
{	
	$header = get_headers($GLOBALS['hwegg'], true);
	if(isset($header[0]) && (strpos($header[0], '200') || strpos($header[0], '304')))
	{
		$hwenr = file_get_contents($GLOBALS['hwegg']);
		$hwenrdata = json_decode($hwenr, true);
		$i=1;
		while($i<=$hwenrdata["gonggaot"])
		{
    		echo '<p><a target="_blank" style="'.$hwenrdata["gonggao"]["$i"]["ys"].'" href="'.$hwenrdata["gonggao"]["$i"]["lj"].'">'.$hwenrdata["gonggao"]["$i"]["nr"].'</a></p>';
    		$i++;
		}
		if($hwenrdata["hwev"] <= hwev){
			echo '<script>var jcgx="";</script>';
		}else{
			echo '<script>var jcgx="（更新到新版本：'.$hwenrdata["hwev"].'）";</script>';
		}
		
	}
	else
	{
		echo "无法读取公告和更新哇！嘤嘤嘤！";
	}
}
//基本设置 主题目录
function themes()
{	
	$tdz="../themes";
	$list = scandir($tdz);
	if (hwezt=="THEMES")
	{
    foreach($list as $file){
        $file_location=$tdz."/".$file;
        if(is_dir($file_location) && $file!="." &&$file!=".."){ //判断是不是文件夹  
        	$file_location = str_replace("..","",$file_location);
            echo '<option value="'.$file_location.'">'.$file_location.'</option>';
        }  
    }
    echo '<option value="THEMES" selected="selected">请选择一个主题</option>';
	}
	else{
	foreach($list as $file){
        $file_location=$tdz."/".$file;
        if(is_dir($file_location) && $file!="." &&$file!=".."){ //判断是不是文件夹  
        	$file_location = str_replace("..","",$file_location);
            echo '<option value="'.$file_location.'">'.$file_location.'</option>';
            
        }  
    }
    echo '<option value="'.hwezt.'" selected="selected">当前主题：'.hwezt.'</option>';
	}
    
}
//是否有主题设置
function themesset2()
{	
	if(file_exists("..".hwezt."/functions.php")){
		if($GLOBALS['hwe']=="主题设置")
		{
			echo '<li id="themes" class="hover"><a href="?hwe=themes">主题设置</a> </li>';
		}
		else
		{
			echo '<li id="themes"><a href="?hwe=themes">主题设置</a> </li>';
		}
	}
		
}
//读取主题设置
function themesset()
{	
	$t=include("..".hwezt."/config.php");//读取主题设置的内容
	echo '<form method="post" action="save.php?hwesave=themes">';
	include "..".hwezt."/functions.php";//读取主题设置的内容
	echo '<button type="submit" class="btn w-100">确定</button>';
	echo '</form>';
}
//读取上传文件夹
function upload_file()
{	
	
	$handler = opendir('../upload');
	while( ($filename = readdir($handler)) !== false ) 
	{	
 		if($filename != "." && $filename != "..")
		{  
		$size = (int)(filesize("../upload/".$filename ) / 1024);
		$filename = iconv("gb2312","utf-8//IGNORE",$filename);
		if (preg_match('/.(png|jpg|jpeg|bmp|svg)$/',$filename))
		{
			echo "<tr><td>".$filename."</td><td><input onfocus='this.select();' value='http://".$_SERVER['SERVER_NAME'].hwedz."/upload/".$filename."' placeholder='http://".$_SERVER['SERVER_NAME'].hwedz."/upload/".$filename."'></td><td>".$size."kb</td><td><a onclick=\"document.getElementById('upimgyl').src='http://".$_SERVER['SERVER_NAME'].hwedz."/upload/".$filename."';document.getElementById('upimgyl').style='display:block'\">查看</a></td><td class='dl'><a href='upload_file.php?up=".$filename."'>删除</td></tr>";
		
		}
		else
		{echo "<tr><td>".$filename."</td><td><input onfocus='this.select();' value='http://".$_SERVER['SERVER_NAME'].hwedz."/upload/".$filename."' placeholder='http://".$_SERVER['SERVER_NAME'].hwedz."/upload/".$filename."'><td>".$size."kb</td><td></td></td><td class='dl'><a href='upload_file.php?up=".$filename."'>删除</td></tr>";}
  		}
	}
}
//程序后台js log 版权
function copyright()
{
    echo '<script>if (jcgx.replace(/(^s*)|(s*$)/g, "").length ==0){}else{document.getElementById("jcgx").innerHTML=jcgx;};console.log("\n %c © Hwe '. hwev .' | Tamshen ","color:#ffffff;    background-image: linear-gradient(to right, #2aa8f2, #9db1fa);line-height: 8;padding:5px 0;border-radius:5px;")</script>';
}
?>