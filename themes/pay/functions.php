<div class="zxxx">
    <p>主题名字：Pay</p>
	<p>主题介绍：三码整合支付</p>
	<p>主题作者：Tamshen</p>
</div>
<hr>
<p>
	<label for="dl"><input type="checkbox" name="dl" id="dl" value="dl"<?php 
   	if (empty($t["dl"])) {}else{echo 'checked="checked"';}?> /> 是否开启删除[建议关闭以防被爆破]</label>
   	<label for="gg"><input type="checkbox" name="gg" id="gg" value="gg"<?php 
   	if (empty($t["gg"])) {}else{echo 'checked="checked"';}?> /> 是否开启公告</label>
</p>
<p>
	<label for="biaoti">网站标题</label>
	<input id="biaoti" type="text" name="biaoti" class="w-100" autocomplete="off" placeholder="网站的标题" value="<?php echo $t["biaoti"];?>">
	<label for="dashang">打赏地址</label>
	<input id="dashang" type="text" name="dashang" class="w-100" autocomplete="off" placeholder="网站的标题" value="<?php echo $t["dashang"];?>">
	<label for="zdyjb">自定义角部</label>
	<textarea id="zdyjb" type="text" rows="4" name="zdyjb" class="w-100" autocomplete="off" placeholder="自定义角部"><?php echo $t["zdyjb"];?></textarea>
	<p class="description">统计代码什么的...</p>		
</p>

<p>	
	<label for="ggbt">网站提示/公告/说明</label>
	<input id="ggbt" type="text" name="ggbt" class="w-100" autocomplete="off" placeholder="标题" value="<?php echo $t["ggbt"];?>">
	<textarea id="ggnr" type="text" rows="8" name="ggnr" class="w-100" autocomplete="off" placeholder="内容"><?php echo $t["ggnr"];?></textarea>
	<p class="description">可使用HTML标签！</p>		
<p>
	
	

