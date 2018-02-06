<div class="zxxx">
    <p>主题目测：VIP解析</p>
	<p>主题介绍：本主题是一个解析页面，可以设置网站公告、解析接口、评论代码</p>
	<p>关于设置：留空表示不显示！</p>
	<p>主题作者：Tamshen</p>
</div>
<hr>
	<label>选择你要显示的：</label>
	<label for="chl"><input type="checkbox" name="chl" id="xtj" value="chl"<?php 
   	if (empty($tdata["chl"])) {}else{echo 'checked="checked"';}?> /> 我藏好了</label>
   <label for="xtj"><input type="checkbox" name="xtj" id="xtj" value="xtj"<?php 
   	if (empty($tdata["xtj"])) {}else{echo 'checked="checked"';}?> /> 推荐视频</label>
   <label for="xhz"><input type="checkbox" name="xhz" id="xhz" value="xhz" <?php 
   	if (empty($tdata["xhz"])) {}else{echo 'checked="checked"';}?> /> 合作伙伴</label>
   <label for="xyl"><input type="checkbox" name="xyl" id="xyl" value="xyl" <?php 
   	if (empty($tdata["xyl"])) {}else{echo 'checked="checked"';}?> /> 友情链接</label>
<p>
	<label for="gonggao">网站公告</label>
	<input id="gonggao" type="text" name="gonggao" class="w-100" autocomplete="off" placeholder="网站公告" value="<?php echo $tdata["gonggao"];?>">
</p>
<p>
	<label for="logo">网站LOGO</label>
	<input id="logo" type="text" name="logo" class="w-100" autocomplete="off" placeholder="网站LOGO" value="<?php echo $tdata["logo"];?>">
</p>
<p>
	<label for="vmrdz">默认地址</label>
	<input id="vmrdz" type="text" name="vmrdz" class="w-100" autocomplete="off" placeholder="网站iframe默认打开地址" value="<?php echo $tdata["vmrdz"];?>">
</p>
<p>
	<label for="tjdz">推荐地址</label>
	<input id="tjdz" type="text" name="tjdz" class="w-100" autocomplete="off" placeholder="推荐地址" value="<?php echo $tdata["tjdz"];?>">
</p>
<p>
	<label for="jiekou">解析接口</label>
	<textarea id="jiekou" type="text" rows="8" name="jiekou" class="w-100" autocomplete="off" placeholder="解析接口"><?php echo $tdata["jiekou"];?></textarea>
	<p class="description">接口一行一个，格式为：接口名称$接口地址</p>		
</p>
<p>
	<label for="tuijian">推荐视频</label>
	<textarea id="tuijian" type="text" rows="8" name="tuijian" class="w-100" autocomplete="off" placeholder="推荐视频：留空表示没有，不显示。"><?php echo $tdata["tuijian"];?></textarea>
	<p class="description">视频一行一个，格式为：视频名称$视频地址</p>		
</p>
<p>
	<label for="dsqrcode">打赏二维码</label>
	<input id="dsqrcode" type="text" name="dsqrcode" class="w-100" autocomplete="off" placeholder="打赏二维码：留空表示没有，不显示。" value="<?php echo $tdata["dsqrcode"];?>">
</p>
<p>
	<label for="pinglun">评论代码</label>
	<textarea id="pinglun" type="text" rows="3" name="pinglun" class="w-100" autocomplete="off" placeholder="评论代码：留空表示没有，不显示。"><?php echo $tdata["pinglun"];?></textarea>
</p>
<p>
	<label for="tongji">统计代码/广告代码</label>
	<textarea id="tongji" type="text" rows="6" name="tongji" class="w-100" autocomplete="off" placeholder="评论代码"><?php echo $tdata["tongji"];?></textarea>
</p>
<p>
	<label for="links">友情链接</label>
	<textarea id="links" type="text" rows="3" name="links" class="w-100" autocomplete="off" placeholder="友情链接"><?php echo $tdata["links"];?></textarea>
	<p class="description">链接一行一个，格式为：链接名称$链接地址</p>		
</p>
<p>
	<label for="yxsj">运行时间</label>
	<input id="yxsj" type="text" name="yxsj" class="w-100" autocomplete="off" placeholder="运行时间：留空表示没有，不显示。" value="<?php echo $tdata["yxsj"];?>">
	<p class="description">运行时间格式为：本站已经稳定运行$2017-5-20（这里留空不显示）</p>		
</p>
	




