<?php
include './data.php'; //检测
$upf=$_GET['up']==''?'':$_GET['up']; 
switch ($upf){
case "sc":
if (($_FILES["file"]["size"] < get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件"))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    	  if ($_FILES["file"]["error"] = 1)
    	  {
    	  	echo "<script>alert('上传失败！超过上传附件最大大小或不允许上传！将跳转解决办法页面！ ');history.go(-1);window.open('https://zhidao.baidu.com/question/585041109.html?fr=iks&word=Hwe&ie=gbk')</script>";
    	  }
    	  else{
    	  	echo "<script>alert('上传失败！错误代码:". $_FILES["file"]["error"] . "');history.go(-1)</script>";
    	  }
    }
  else
    {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../upload/" . $_FILES["file"]["name"]);
      echo "<script>alert('上传成功！');history.go(-1)</script>";
    }
  }
else
  {
  echo "无效的文件";
  }
break;
default:

$file = $upf;
if (!unlink("../upload/".$file))
  {
  echo "<script>alert('删除错误：".$file."！请检查服务器设置。');history.go(-1)</script>";
  }
else
  {
  echo "<script>alert('成功删除文件：".$file."');history.go(-1)</script>";
  }
}
?>