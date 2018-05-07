<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Cache-Control" content="no-transform" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<title>消息详情</title> 
		<link rel="stylesheet" href="/cleancar/Public/wap/css/html5.css" />
        <link rel="stylesheet" href="/cleancar/Public/wap/css/index.css" />
        <script type="text/javascript" src="/cleancar/Public/wap/js/jquery-1.10.2.min.js" ></script>
		<script>
			(function(doc, win) {
				var docEl = doc.documentElement,
					resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
					recalc = function() {
						var clientWidth = docEl.clientWidth;
						if(!clientWidth) return;
						docEl.style.fontSize = 27 * (clientWidth / 720) + 'px';
					};
				if(!doc.addEventListener) return;
				win.addEventListener(resizeEvt, recalc, false);
				doc.addEventListener('DOMContentLoaded', recalc, false);
			})(document, window);
		</script>
	</head>
	<body>
		<style type="text/css">
			body{background: #fff;}
			.tcdl{margin-top:10px; margin-bottom: 0;}
			.xiaoxixiangqing{ width:100%; margin-top:2.963rem; padding:1rem 0.5rem;}
			.xiaoxixiangqing .head{ text-align:center; border-bottom:1px solid #f5f5f5; padding-bottom:0.5rem;}
			.xiaoxixiangqing .head h4{font-size:0.75rem; color:#333;}
			.xiaoxixiangqing .head span{display:block; font-size:0.5rem; color:#999; margin-top:0.5rem;}
			.xiaoxixiangqing .ct{padding:0.5rem 0.5rem 0; }
		</style>
		<!--头部-->
		<div class="box">
		    <header>
	            <i onclick="tiao()"></i>
	            <p>消息详情</p>
	        </header>
			<div class="xiaoxixiangqing">
				<div class="head">
					<h4><?php echo ($message['0']['msg_title']); ?></h4>
					<span>
						<i><?php echo (date("Y-m-d H:i:m ",$message['0']['msg_addtime'])); ?></i>
					</span>
				</div>
				<div class="ct">
					<p>
	                <?php echo ($message['0']['msg_content']); ?>
					</p>
				</div>
			</div>
		</div>
		<script>
			$(function(){
				$("body").show()
			})
			function tiao(){
				window.location.href="<?php echo U('system/message');?>";
			}
		</script>
	</body>
</html>