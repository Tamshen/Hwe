<div class="zxxx">
    <p>主题名字：520</p>
	<p>主题介绍：本主题是一个简单的表白页面！</p>
	<p>关于设置：留空表示不显示！</p>
	<p>主题作者：Tamshen</p>
</div>
<hr>
	<label>选择你要显示的：</label>
	<label for="fx"><input type="checkbox" name="fx" id="fx" value="fx"<?php if (empty($tdata["fx"])) {}else{echo 'checked="checked"';}?> /> 分享按钮</label>
	<label for="yykg"><input type="checkbox" name="yykg" id="yykg" value="yykg"<?php if (empty($tdata["yykg"])) {}else{echo 'checked="checked"';}?> /> 音乐</label>
	<label for="auto"><input type="checkbox" name="auto" id="auto" value="auto"<?php if (empty($tdata["auto"])) {}else{echo 'checked="checked"';}?> /> 自动滚动</label>
<p>
	<label for="biaoti">网站标题</label>
	<input id="biaoti" type="text" name="biaoti" class="w-100" autocomplete="off" placeholder="网站的标题" value="<?php echo $tdata["biaoti"];?>">
</p>
<p>
	<label for="ICO">网站ICO</label>
	<input id="ICO" type="text" name="ICO" class="w-100" autocomplete="off" placeholder="网站的站标，留空使用默认。" value="<?php echo $tdata["ICO"];?>">
</p>
<p>
	<label for="bgys">背景颜色</label>
	<input id="bgys" type="text" name="bgys" class="w-100" autocomplete="off" placeholder="16进制颜色值（带#）" value="<?php echo $tdata["bgys"];?>">
	<p class="description">推荐值：#e91e63（胖次粉）、#00a9e0（基佬蓝）</p>
</p>
<p>
	<label for="bgmusic">背景音乐</label>
	<input id="bgmusic" type="text" name="bgmusic" class="w-100" autocomplete="off" placeholder="背景音乐，留空表示没有！" value="<?php echo $tdata["bgmusic"];?>">
	<p class="description">音乐可以在<a href="?hwe=upload_file" target="_blank"> 上传管理 </a>上传</p>
</p>
<p>
	<label for="nbgmusic">网易云音乐</label>
	<input id="nbgmusic" type="text" name="nbgmusic" class="w-100" autocomplete="off" placeholder="网易云音乐ID，留空表示没有！" value="<?php echo $tdata["nbgmusic"];?>">
	<p class="description">推荐：29312957（有背景音乐的情况下，默认启用背景音乐！不启用<a href="http://music.163.com/#/search/m/?s=201314" target="_blank">网易云音乐</a>。没有勾选上面<b> 音乐 </b>选项，音乐无效。）</p>
</p>
<p>
	<label for="nxsdh">你想说的话</label>
	<textarea id="nxsdh" type="text" rows="8" name="nxsdh" class="w-100" autocomplete="off" placeholder="解析接口"><?php echo $tdata["nxsdh"];?></textarea>
	<p class="description">一行一个，文字写：z$你想说的话 图片写：t$图片地址 （z$支持Html）</p>		
</p>
<p>
	<label for="zhdh">最后的话</label>
	<input id="zhdh" type="text" name="zhdh" class="w-100" autocomplete="off" placeholder="最后的话！" value="<?php echo $tdata["zhdh"];?>">
	<p class="description">最后的话，一个总结吧。</p>
</p>

