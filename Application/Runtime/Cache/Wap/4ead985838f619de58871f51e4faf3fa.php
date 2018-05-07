<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>会员办理</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Cache-Control" content="no-transform" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="renderer" content="webkit">
        <!--uc浏览器判断到页面上文字居多时，会自动放大字体优化移动用户体验。添加以下头部可以禁用掉该优化-->
        <meta name="wap-font-scale" content="no">
        <meta content="telephone=no" name="format-detection"/>
        <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <link rel="stylesheet" href="/cleancar/Public/wap/css/html5.css" />
        <link rel="stylesheet" href="/cleancar/Public/wap/css/index.css" />
        <script type="text/javascript" src="/cleancar/Public/wap/js/jquery-1.10.2.min.js" ></script>
        <script type="text/javascript" src="/cleancar/Public/wap/js/screenSize.js" ></script>
    </head>  
    <body style="display: none;background-color: #fff;">
        <div class="box">
            <header>
                <i onClick="javascript :history.back(-1);"></i>
                <p>会员办理</p>
            </header>	
            <div class="huiyuanbanli">
                <h5><?php echo ($noticeinfo["title"]); ?></h5>
                <p><?php echo ($noticeinfo["content"]); ?>
                </p>
                <div class="huiyuanbanli_check c">
                    <input id="checkment" type="checkbox" checked="checked" />
                    <span >我已看过并同意以上服务信息</span>
                </div>
                <button id="button" onclick="javascrtpt:window.location.href = '<?php echo U('login/register');?>'">办理会员</button>
            </div> 
        </div>
    </body>
    <script>
        $("body").show();
        $(function () {
            $("#checkment").on("change", function () {
                if ($(this).is(':checked')) {
                    console.log("checked")
                    $("#button").css("background-color","#21a5ff").removeAttr("disabled")
                }else{ 
                    $("#button").css("background-color","#999999").attr("disabled","disabled")

                }
            })
        })
    </script>
</html>