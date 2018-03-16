<?php 
/* 
 * 2018-01-28 后台首页
 *(c) Copyright 2018 Tamshen. All Rights Reserved. 
 * 
 */
include './data.php'; //程序数据
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charthemes="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <title><?php echo $hwe; ?> - Hwe</title>
    <link href="https://q.qlogo.cn/g?b=qq&nk=774024602@qq.com&s=100" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./tamshen.css" data-for="result">
</head>
<body>
<header class="caidan">
 	<div class="container">
 		<ul class="cdnav">
 			<li id="home" <?php if($hwe=="首页"){echo "class='hover'";} ?>><a href="./">首页</a> </li>
 			<?php themesset2(); ?>
 			<li id="options" <?php if($hwe=="基本设置"){echo "class='hover'";} ?>><a href="?hwe=options">基本设置</a> </li>
 			<li id="upload_file" <?php if($hwe=="上传管理"){echo "class='hover'";} ?>><a id="scgl" target="_blank" href="?hwe=upload_file">上传管理</a> </li>
         </ul>
         <div class="you">
         <ul class="cdnav">
             <li id="user" <?php if($hwe=="用户设置"){echo "class='hover'";} ?>><a href="?hwe=user"><?php echo $用户名;?></a></li>
             <li><a href="?hwe=out">登出</a></li>
             <li><a href="<?php echo "//".$_SERVER['SERVER_NAME'],hwedz;?>" target="_blank">网站</a></li>
             </ul>
        </div>
 	</div>
</header>
<div class="container" style="padding-top:60px">
	<div class="houtai">
		<div class="houtaixx">
			<div class="title"><?php echo $hwe; ?></div>
<?php switch ($hwe){case "主题设置":{ themesset();//主题设置?>
<?php } break;case "用户设置":{//用户设置?>
<!--用户设置-->
	<form method = "post" action = "save.php?hwesave=user">
    		<p>
    			<label for="name">账号</label>
    			<input id="name" type="text" name="name" class="w-100" autocomplete="off" placeholder="<?php echo $用户名;?>" >
    			<p class="description">请勿使用特殊字符！建议使用字母或数字的混编样式（5-16位）。</p>
    		</p>
    		<p>
    			<label for="password">新密码</label>
    			<input id="password"  type="password" name="password" class="w-100" autocomplete="off" placeholder="请输入修改后的密码" >
    			<p class="description">建议使用特殊字符与字母、数字的混编样式（5-16位）。</p>
    			<label for="password2">重复密码</label>
    			<input id="password2"  type="password" name="password2" class="w-100" autocomplete="off" placeholder="请输入修改后的密码" >
    			<p class="description">再输入一次修改的密码。</p>
			</p>
			<p>
    			<label for="password3">原来的密码</label>
    			<input id="password3" type="password" name="password3" class="w-100" autocomplete="off" placeholder="请输入原来的密码" >
    			<p class="description">输入原来的密码验证你是本人。</p>
    		</p>
			<button type = "submit" value="xiugai" class="btn w-100">确定</button>
		</form>
<!--用户设置end-->
<?php } break;case "上传管理":{ //上传管理?>
<!--上传管理-->
<form action="upload_file.php?up=sc" method="post" enctype="multipart/form-data">
	<p>
		<label for="file">上传文件</label>
		<input type="file" name="file" id="file"  class="w-100"/> 
		<p class="description">最大上传限制：<?php echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"<script>alert('不允许上传附件！请检查服务器配置！');window.close()</script>"; ?></p>
		<p class="description">上传相同文件名将覆盖！</p>
		<p class="description">文件名请不要有特殊字符！</p>
	</p>
	<button type="submit" value="xiugai" class="btn w-100">确定</button>
</form>
<div class="houtaixx">
		<div class="title">Upload文件列表</div>
		<div class="xtxx">
			<label for="file">上传文件夹：<?php echo $GLOBALS['hwedz'].'/upload';?></label>
			<p>
			<img id="upimgyl" src="" height="66px" style="display: none;"/>
			</p>
			<p>
			<table class="w-100 uplist">
			<thead><th>文件名</th><th>文件地址</th><th>大小</th><th>预览</th><th>管理</th></tr></thead>
        	<tbody><?php upload_file(); ?></tbody>
    		</p>	
		</div>
<!--上传管理end-->
<?php } break;case "基本设置":{ //基本设置?>
<!--基本设置-->
	<p class="description">*请别用特殊字符，读取不出来我也没法噢！</p>
	<form method="post" action="save.php?hwesave=options">
			<p>
				<label for="hwedz">网站是否二级目录</label>
				<input id="hwedz" type="text" name="hwedz" class="w-100" autocomplete="off" placeholder="<?php echo hwedz;?>" value="<?php echo hwedz;?>">
				<p class="description">比如：/hwe（http://yoursite.com/hwe）  地址最后不要带“/”，不是二级目录请忽略留空！</p>
			</p>
			<p>
				<label for="hwebt">网站标题</label>
				<input id="hwebt" type="text" name="hwebt" class="w-100" autocomplete="off" placeholder="<?php echo hwebt;?>" value="<?php echo hwebt;?>">
			</p>
			<p>
				<label for="hwezb">网站站标</label>
				<input id="hwezb" type="text" name="hwezb" class="w-100" autocomplete="off" placeholder="<?php echo hwezb;?>" value="<?php echo hwezb;?>">
			</p>
			<p>
				<label for="hwegjz">网站关键字（请用英文逗号,分隔！）</label>
				<input id="hwegjz" type="text" name="hwegjz" class="w-100" autocomplete="off" placeholder="<?php echo hwegjz;?>" value="<?php echo hwegjz;?>">
			</p>
			<p>
				<label for="hwejs">网站介绍</label>
				<textarea id="hwejs" type="text" name="hwejs" class="w-100" autocomplete="off" placeholder="<?php echo hwejs;?>"><?php echo hwejs;?></textarea>
			</p>
			<p>
				<label for="hwezt">网站主题</label>
				<select name="hwezt" id="hwezt" class="w-100">
         			<optgroup label="下面是主题的路径"><?php themes(); ?></optgroup>
     			</select>
     		</p>
			<button type="submit" value="xiugai" class="btn w-100">确定</button>
	</form>
<!--基本设置end-->
<?php } break;default:{ //首页?>	
<!--首页 -->
		<div class="zxxx">
			<p>hwe 是由Tamshen一个人开发的一个PHP小项目。</p>
			<p>hwe 是Tamshen的第一个PHP项目。</p>
		</div>
	</div>
	<div class="houtaixx">
		<div class="title">最新消息</div>	
		<div class="zxxx"><?php gonggao(); ?></div>
	</div>
	<div class="houtaixx">
		<div class="title">系统信息</div>
		<div class="xtxx">
			<p>程序版本： <span><?php echo hwev;?></span> <a id="jcgx" href="upload.php"></a></p>
			<p>系统时间：<span><?php echo date("Y-m-d G:i:s"); ?></span></p>
			<p>网站地址：<span><?php echo $_SERVER['SERVER_NAME'],hwedz;?></span></p>
			<p>服务器操作系统：<span> <?php echo PHP_OS; ?> </span></p>
			<p>PHP程式版本： <span><?php echo PHP_VERSION; ?></span></p>
			<p>最大上传限制：<span><?php echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件"; ?> </span></p>
			<p>数据文件检测：</p><p><?php if(is_writable("./pass.php")){echo "<span style=\"color: green\">用户文件 - 可写 ●</span>\n";}else{echo "<span style=\"color: red;font-weight: bold;\">用户文件 - 不可写 ●</span>\n";}?></p><p>
			<?php if(is_writable("../config.php")){echo "<span style=\"color: green\">基本设置配置文件 - 可写 ●</span>\n";}else{echo "<span style=\"color: red;font-weight: bold;\">基本设置配置文件  - 不可写 ●</span>\n";}?></p><p>
			<?php if(is_writable("../themes")){echo "<span style=\"color: green\">主题文件夹 - 可写 ●</span>\n";}else{echo "<span style=\"color: red;font-weight: bold;\">主题文件夹 - 不可写 ●</span>\n";}?></p>
		</div>
<!--首页 end-->
<?php }}?>
	</div>
	</div>
</div><!--container-->
<?php copyright(); ?>
</body>
</html>