<?php
$url = $_GET['it'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- css -->
<head>
<link rel="stylesheet" href="skin/default/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="skin/default/css/css.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="skin/default/css/font-awesome.min.css"/>
<script type="text/javascript" src="skin/default/js/jquery.1.7.2.js"></script>
<script type="text/javascript" src="skin/default/js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<!-- css end -->
<body>
<div>
<!-- top -->
<div class="top_bg_100">
	<div class="w1004 top">
	</div>
</div>
<div class="top_nav_100">
	<div class="w1004 navs">
	  <ul id="nav" class="nav clearfix">
		<li class="nLi"><h3><a href="index.html" target="_self">首页</a></h3></li>
		<li class='nLi'><h3><a href='./list_chanshi.php?it=a'>禅师介绍</a></h3><ul class='sub'><li><a href='./list_chanshi.php?it=paauk'>帕奥禅师</a></li><li><a href='./list_chanshi.php?it=shengfa'>圣法大长老</a></li><li><a href='./list_chanshi.php?it=shengxi'>圣喜长老</a></li><li><a href='list_103.html'>玛欣德尊者</a></li><li><a href='list_104.html'>吉祥尊者</a></li><li><a href='list_105.html'>佛护尊者</a></li><li><a href='list_106.html'>燃灯尼师</a></li></ul></li><li class='nLi'><h3><a href='list_11.html'>禅修中心</a></h3><ul class='sub'><li><a href='list_19.html'>禅修报名</a></li><li><a href='list_20.html'>活动护持</a></li></ul></li><li class='nLi'><h3><a href='list_13.html'>共修中心</a></h3><ul class='sub'><li><a href='list_41.html'>上海共修</a></li><li><a href='list_42.html'>深圳共修</a></li></ul></li><li class='nLi'><h3><a href='list_14.html'>资料共享</a></h3><ul class='sub'><li><a href='list_56.html'>录音资料</a></li><li><a href='list_57.html'>视频资料</a></li><li><a href='list_58.html'>电子书</a></li></ul></li><li class='nLi'><h3><a href='list_15.html'>功能模块</a></h3><ul class='sub'><li><a href='list_88.html'>论坛</a></li><li><a href='list_90.html'>聊天室</a></li><li><a href='list_89.html'>信息发布</a></li></ul></li><li class='nLi'><h3><a href='act.html'>信息化护持</a></h3><ul class='sub'><li><a href='act_1.html'>帮助本站</a></li><li><a href='act_2.html'>护持培训</a></li></ul></li><li class='nLi'><h3><a href='list_17.html'>保留</a></h3><ul class='sub'><li><a href='wish.html'>保留1</a></li><li><a href='list_76.html'>保留2</a></li></ul></li>	  </ul>
	  <script id="jsID" type="text/javascript">
				jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",triggerTime:100,defaultPlay:false});
			</script> 
	</div>
</div> 
<!-- top end -->
<!-- content begin!!!!!!!! -->
<div class="w1004 bg wrap">
<div class="left" id="left">
<ul class="leftClass"><!-- left menu -->
	禅修中心
</ul>	
<ul class='leftList'><li><a href="./chanxiu/chanxiu.html"  target="chanshi_frame">禅修活动</a></li></ul>
<ul class='leftList'><li><a href="./chanxiu/huchi.html" target="chanshi_frame">护持活动</a></li></ul>  
<div class="c"></div><div class="leftBot"></div>
</div>
		
<div class="right" id="right">
<div class="c"></div>  
<div class="right">
	<iframe id="chanshi_frame" name="chanshi_frame" src="<?php echo './chanxiu/'.$url.'.html' ?>"  width="100%" height="100%"   frameborder="0" scrolling="no" style="overflow:visible;"></iframe>
	<div class="c"></div>
	<div class="ContPage"></div>
	<div clear="clear"></div>
</div></div>	</div>
<!-- content end -->
<!-- footer -->
<div class="footer">
		<p>地址：上海浦东浦西</p>
		<p>电话: 0573-xxxxxxx  </p>
		<p>邮箱: ekin8051@163.com </p>
		<p><script src="http://s4.cnzz.com/stat.php?id=1254273679&web_id=1254273679" language="JavaScript"></script></p>
</div>
<!-- footer end -->
<div>
</body>

</html>

<script type="text/javascript">
	function calcPageHeight(doc) {
		try{
				var cHeight = doc.body.clientHeight;
				var sHeight = doc.body.scrollHeight;
				var height = Math.max(cHeight, sHeight);
				
				return height;
		}
		catch(e)
		{
				var cHeight = doc.documentElement.clientHeight;
				var sHeight = doc.documentElement.scrollHeight;
				var height = Math.max(cHeight, sHeight);
				return height;
		}
	}
var ifr = document.getElementById('chanshi_frame');
	ifr.onload = function() {

		try{
				var iDoc = ifr.contentDocument ;
				var height = calcPageHeight(iDoc);
				//ifr.style.height = height + 'px';
				ifr.style.height = height + 'px';
		//alert("1->"+height);
		}

		catch(e)
		{
				var iDoc =  ifr.document;
				var height = calcPageHeight(iDoc);
				ifr.style.height = height + 'px';
				//alert("2->"+height);
		}
}
</script>
