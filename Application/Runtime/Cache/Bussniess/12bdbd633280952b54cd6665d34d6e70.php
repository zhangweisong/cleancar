<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>商家中心</title>
		<!--说明文字编码-->
		<meta http-equiv="Content-type" content="text/html" charset="utf-8">
		<!--针对 IE8 版本的一个特殊文件头标记，用于为 IE8 指定不同的页面渲染模式-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--设备物理宽度等于等于页面宽度,页面初始缩放1:1,禁止用户调整缩放-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
		<!--控制状态栏显示样式-->
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<!--解决uc字体变大问题-->
		<meta name="wap-font-scale" content="no">
		<!--手机号码不被显示为拨号链接-->
		<meta content="telephone=no" name="format-detection" />
		<!--页面缓存时间的最大值是0秒，目的是不让页面缓存，每次访问必须到服务器读取-->
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Cache-Control" content="no-cache">
		<meta http-equiv="Expires" content="0">
		<link rel="stylesheet" type="text/css" href="/cleancar/Public/bussniess/css/public.css" />
		<link rel="stylesheet" href="/cleancar/Public/bussniess/css/sjsy.css" />
	</head>
	<body>
		<div class="hdbg">
			<div class="hdcont">
				<p><?php echo ($sellertel); ?></p>
				<a href="tel:<?php echo ($sellertel); ?>">拨打</a>   
			</div>
		</div>
		<div class="head">
			<!--<a href="javascript:history.go(-1);">
				<img src="/cleancar/Public/bussniess/images/back.png" />
			</a>-->
			<h1>商家中心</h1>
		</div>
		<div class="clear" style="height: 4rem;"></div>
		<div class="header">
			<img src="<?php echo ($sellerinfo['avatar']); ?>"  />
			<p><?php echo ($sellerinfo['sellername']); ?></p>
			<p><?php echo ($sellerinfo['selleraddress']); ?></p>
		</div>
		<ul class="cont">
			<li>
				<a href="<?php echo U('index/bussniessinfo');?>">
					<img src="/cleancar/Public/bussniess/images/icon01.png"  />
					<p>商家信息</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('number/numcount');?>">
					<img src="/cleancar/Public/bussniess/images/icon02.png"  />
					<p>数据统计</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('record/index');?>">
					<img src="/cleancar/Public/bussniess/images/icon03.png"  />
					<p>洗车记录</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('index/message');?>">
					<img src="/cleancar/Public/bussniess/images/icon04.png"  />
					<p>消息通知</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('user/userinfo');?>">
					<img src="/cleancar/Public/bussniess/images/icon05.png"  />
					<p>会员办理</p>
				</a>
			</li>
			<li class="phone">
				<a href="###">
					<img src="/cleancar/Public/bussniess/images/icon06.png"  />
					<p>联系我们</p>
				</a>
			</li>
		</ul>
		<script type="text/javascript" src="/cleancar/Public/bussniess/js/screenSize.js" ></script>
		<script type="text/javascript" src="/cleancar/Public/bussniess/js/jquery-3.1.1.min.js" ></script>
		<script>
			$(".phone").click(function(){
				$(".hdbg").animate({height:"100%"},100);
			});
			$(".hdbg").click(function(){
				$(".hdbg").animate({height:"0"},100);
			});
			 $('.hdcont').bind("click",function(event){
		        event.stopPropagation();    
		    });
			$(function(){
				$("body").show()
			})
		</script>
	</body>
</html>