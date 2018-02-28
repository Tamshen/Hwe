<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title><?php echo $tdata["biaoti"] ?></title>
	<meta name="keywords" content="<?php echo $hwegjz ?>,Hwe.我爱你" />
	<meta name="description" content="<?php echo $hwejs ?>" />
	<link href="<?php if (empty($tdata["ICO"])) { echo $turl."/love.png";}else{echo $tdata["ICO"];} ?>" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo $turl; ?>/style.css" />
    <script src="https://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
    <script>
		$(document).ready(function(e) {$(document).scrollTop(300);timer = setInterval("$.change()", 6000);t = 0;$("#t-" + t).fadeIn();<?php if(empty($tdata["auto"])){echo"clearInterval(timer);";}else{}?>
        $("#520").click(function(){clearInterval(timer);$.change()});
		$.change = function() {$("#zhdh").slideDown(1500).fadeIn();t++;if (t <= $(".tittle").length) {$(".tittle").slideUp(1500).fadeOut();$("#t-" + t).slideDown(1500).fadeIn()} else {
		$("#jx").fadeOut();window.location = "#<?php echo $tdata["biaoti"] ?>";}}});
    </script>
</head>
<body style="background:<?php echo$tdata["bgys"];?>;" oncontextmenu="return false;" onselectstart="return false">
    <div class="main" id="520">
<?php 
	$nxsdh = $tdata["nxsdh"];
	$bfdz = explode("\r\n", $nxsdh);
	foreach( $bfdz as $i => $val) 
	{
		$Data = explode('$', $val );
		$garbage = strstr($val, "t$"); 
		if($garbage == false) 
		{ 
			echo '<div class="tittle" style="background:'.$tdata["bgys"].'" id="t-'.$i.'"><table width="100%" border="0" height="100%"><tr><td align="center">'.$Data["1"].'</td></tr></table></div>';
	  	} 
	  	else 
	  	{ 
			echo '<div class="tittle" style="background:'.$tdata["bgys"].'" id="t-'.$i.'"><table width="100%" border="0" height="100%"><tr><td align="center" style="background-image: url('.$Data["1"].');cursor: pointer;background-repeat: no-repeat;background-size: cover;background-position: center center;background-origin: border-box;"></td></tr></table></div>';
	  	} 
	}
?> 
<div id="zhdh"><?php echo $tdata["zhdh"] ?>
<div align="center" style="width: 100%;text-align: center;">
    <span class="tishiContent" onclick="t = -1;$('#jx').fadeIn();">再看一遍</span>
</div>
</div>
<div align="center" class="tishi">
    <span class="tishiContent" id="jx">轻触继续</span>
</div>
</div>



<?php if (empty($tdata["yykg"])) {}else{if (empty($tdata["bgmusic"])) {?>
	<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=0 height=0 src="//music.163.com/outchain/player?type=2&id=<?php echo $tdata["nbgmusic"] ?>&auto=1&height=66"></iframe>
<?php } else { ?>
	<div align="center"><audio src="<?php echo $tdata["bgmusic"] ?>" preload autoplay loop>Your browser does not support the audio element.</audio></div>
<?php }}?>
<?php if (empty($tdata["fx"])) {}else{ ?>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":["sqq","qzone","weixin","tsina","tqq","copy","tieba","mshare"],"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"6","bdPos":"right","bdTop":"250"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>    
<?php }?>
</body>
</html>


