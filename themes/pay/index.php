<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title><?php echo $t["biaoti"] ?> - <?php echo hwebt; ?></title>
	<meta name="keywords" content="<?php echo hwegjz; ?>,Hwe.我爱你" />
	<meta name="description" content="<?php echo hwejs; ?>" />
	<link href="<?php echo hwezb; ?>" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo $turl; ?>/style.css" />
</head>
<body>
<?php
	define("dashang", $t['dashang']); 
	if ($_GET['id']==''?'':$_GET['id'])
	{
		$file = ".".hwezt."/data/".$_GET["id"].".json";
		if(is_file($file))
  			{
    			$sj  = file_get_contents($file);
				$paydata = json_decode($sj, true);
  			}
		else
  			{
  				header("Location:".$surl."");exit;
  			}
?>
<!--扫码页面-->
	<!-- 默认款码展示区域 -->
	<div class="code-item" id="code-all">
        <div class="code-title"></div>
        <div class="code-area"><img id="page-url" src=""></div>
        <div class="code-footer">扫描上面的二维码向我付款</div>
    </div>
	<!-- QQ钱包二维码展示区域 -->
    <div class="code-item" id="code-qq">
        <div class="code-title"></div>
        <div class="code-area"><img id="qq-url" src=""></div>
        <div class="code-footer">长按上面的二维码向我付款</div>
    </div>
	<!-- 微信二维码展示区域 -->
    <div class="code-item" id="code-wechat">
        <div class="code-title"></div>
        <div class="code-area"><img id="wechat-url" src=""></div>
        <div class="code-footer">长按上面的二维码向我付款</div>
    </div>
    <div class="footer">Copyright <?php echo date("Y"); ?> <?php echo $hwebt ?>.</div>
<script>
    var setting = {qqUrl: "<?php echo $paydata["qq"]; ?>",	wechatUrl: "<?php echo $paydata["wx"]; ?>",aliUrl: "<?php echo $paydata["ali"]; ?>",qrcodeApi: "http://pan.baidu.com/share/qrcode?w=300&h=300&url="}
    if(navigator.userAgent.match(/Alipay/i)) {
        window.location.href = setting.aliUrl; 
    } else if(navigator.userAgent.match(/MicroMessenger\//i)) {
        document.getElementById("wechat-url").src = setting.qrcodeApi + urlEncode(setting.wechatUrl);
        document.getElementById("code-wechat").style.display = "block";
    } else if(navigator.userAgent.match(/QQ\//i)) {
        document.getElementById("qq-url").src = setting.qrcodeApi + urlEncode(setting.qqUrl);
        document.getElementById("code-qq").style.display = "block";
    } else {
        document.getElementById("page-url").src = setting.qrcodeApi + urlEncode(window.location.href);
        document.getElementById("code-all").style.display = "block";
    }
    function urlEncode(String) {return encodeURIComponent(String).replace(/'/g,"%27").replace(/"/g,"%22");	}
</script>
<!--扫码页面end-->
<?php }
	//?de=文件名&mm=密码
	elseif ($_GET['de']==''?'':$_GET['de']) 
	{
		$file = ".".hwezt."/data/".$_GET["de"].".json";
		if(is_file($file))
  			{	$sj  = file_get_contents($file);
				$paydata = json_decode($sj, true);
  				if($paydata["mm"]  == $_GET['mm']){	
  					if (!unlink($file)){echo "<script>alert('删除错误！请检查服务器设置！');history.go(-1)</script>";}
                	else{echo "<script>alert('删除成功！');history.go(-1)</script>";}}
                else{echo "<script>alert('删除密码错误！');history.go(-1)</script>";}
  			}
		else{echo "<script>alert('Excuse me?没有这个文件！');history.go(-1)</script>";}
	}
  	//新建
  	elseif ($_GET['ts']==''?'':$_GET['ts']) 
  	{
  		if(empty($_POST['zdydz']) || empty($_POST['zdymm']) || empty($_POST['wx']) || empty($_POST['ali']) || empty($_POST['qq'])) //检测数据是否填写完整
  		{
  			echo "<script>alert('数据并没有填写完整！！');history.go(-1)</script>";
  		}
  		else
  		{
  			$wx = $_POST['wx'];$ali = $_POST['ali'];$qq = $_POST['qq'];$mm = $_POST['zdymm'];//定义各种变量
  			$file = ".".hwezt."/data/".$_POST['zdydz'].".json";//设置地址
  			if(is_file($file)) //检测文件是否存在
  			{
				echo "<script>alert('地址重复！');history.go(-1)</script>";
  			}
  			else//这里是不存在文件的，需要创建
  			{
  				$data = array('wx' => $wx,'ali' => $ali,'qq' => $qq,'mm' => $mm);
				$json_string = json_encode($data);
				file_put_contents($file, $json_string);
  				cjxg(); 
  				echo '<div class="footer">Copyright '.date("Y").' '.hwebt.'.</div>'; 
  			}
  		}
  	}
  	//新建--end
  	else {?>
<!--管理页面-->
<form method = "post" action = "?ts=save">
<div id="set">
	<a href="<?php echo $surl; ?>"><img src="<?php echo $turl; ?>/ico.png" /></a>
	<input id="zdydz" type="text" name="zdydz" autocomplete="off" placeholder="自定义地址，一旦设置不可修改！">
	<input id="zdymm" type="text" name="zdymm" autocomplete="off" placeholder="自定义密码，一旦设置不可修改！">
</div>
<!-- 微信钱包 -->
<div class="set" id="code-wechat">
	<div class="code-title set-title"></div>
	<label for="wx">微信支付支付地址</label>
	<input id="wx" type="text" name="wx" autocomplete="off" placeholder="微信支付支付地址">
</div>
<!-- 支付宝 -->
<div class="set" id="code-ali">
	<div class="code-title set-title"></div>
	<label for="ali">支付宝支付地址</label>
	<input id="ali" type="text" name="ali" autocomplete="off" placeholder="支付宝支付地址">
</div>
<!-- QQ钱包 -->
<div class="set" id="code-qq">
	<div class="code-title set-title"></div>
	<label for="qq">QQ钱包支付地址</label>
	<input id="qq" type="text" name="qq"  autocomplete="off" placeholder="QQ钱包支付地址" >
</div>
<div id="set" style="margin-top: 20px;">
<button type="submit" class="btn">确定</button>
</div>
</form>

<div class="set" id="de">
	<div class="de-title"></div>
	<label for="dedz">删除</label>
	<div class="s">
	<input id="dedz" type="text" name="qq"  autocomplete="off" placeholder="自定义的地址" >
	<input id="demm" type="text" name="qq"  autocomplete="off" placeholder="密码" >
	</div>
</div>
<div id="set" style="margin-top: 20px;">
	<a><button onclick="de233()" class="btn" style="background: #FF5722;">删除</button></a>
</div>
<div class="footer">Copyright <?php echo date("Y"); ?> <?php echo hwebt; ?>.</div>
 <script>
 document.body.style.backgroundColor="#f2f2f2";
    function de233() 
    {
        var dz = document.getElementById("dedz").value;
        var mm = document.getElementById("demm").value;
        if (dz.replace(/(^s*)|(s*$)/g, "").length ==0 ||mm.replace(/(^s*)|(s*$)/g, "").length ==0  )
        	{alert('密码地址都要填写啊！');}
        else{window.location.href='?de=' + dz +'&mm='+mm;}
    }
</script>
<!--管理页面end-->
<?php }?>	
</body>
</html>
<?php 
function cjxg()
{	
  	echo '<div id="set">
  			<a href="'.$GLOBALS['surl'].'"><img src="'.$GLOBALS['turl'].'/ico.png"></a>
				<label style="color:#000;">在线地址：</label>
				<input type="text" readonly="readonly" onfocus="this.select();" value="http:'.$GLOBALS['surl'].hwedz.'/?id='.$_POST['zdydz'].'">
				<label style="color:#000;">密码，请谨记！</label>
				<input type="text" readonly="readonly" onfocus="this.select();" value="'.$_POST['zdymm'].'">
			</div>
				<div id="set" style="margin-top: 20px;">
					<a href="?id='.$_POST['zdydz'].'" download="'.$_POST['zdydz'].'.html">
						<button type="submit" class="btn">下载HTML文件</button>
					</a>
				</div>
						<div id="set" style="margin-top: 20px;">
							<a target="_blank" href="'.dashang.'">
							<button type="submit" class="btn" style="background-color: #FF9800;">打赏我</button>
							</a>
						</div>
						<div id="set" style="margin-top: 20px;">
							<a href="javascript:history.go(-1);">
							<button type="submit" class="btn" style="background-color: #FF9800;">返回</button>
							</a>
						</div>
  				   ' ;
}
?>