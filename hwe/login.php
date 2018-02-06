<?php  
/* 
 * 2018-01-28 后台登陆
 *(c) Copyright 2018 Tamshen. All Rights Reserved. 
 * 
 */
include './pass.php'; //密码数据
session_start();  
	if(empty($_SESSION['loginhwe'.$密码]))//判断登录时session是否存在
{?>
<html>    
    <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="format-detection" content="telephone=no,email=no,adress=no"/>  
    <link href="https://q.qlogo.cn/g?b=qq&nk=774024602@qq.com&s=100" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./tamshen.css" data-for="result">
    <title>登陆 - Login</title>
    </head>
    <body class="login">
        <div class="loginc">
        	<div class="loginz">
            	<div class="loginzz">
            		<h3>登陆 / Login</h3>
               		<form method = "post" action = "login_test.php" onsubmit="return validateCode()">  
   					<p>
   					 	<label for="name" class="name">用户名</label>
   					 	<input type = "text"  id="name" name = "name" class="logindl w-100">
   					</p>
   					<p>
   					 	<label for="password" class="name">密码</label>
   					 	<input type = "password" id="password" name = "password"  class="logindl w-100">
   					</p>
   					<p>
   						<button type = "submit" value="login" class="btn w-100">登录</button>
					</p>
    				</form>
    				<a href="../">返回首页</a>
            	</div>
        	</div>
        </div>
    </body>
</html>
<?php  } else{
    header("Location:index.php");
    exit; 
}?>