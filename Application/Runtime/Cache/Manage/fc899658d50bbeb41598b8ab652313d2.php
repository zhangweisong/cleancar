<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>欢迎登陆后台管理系统</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="/cleancar/Public/manage/http/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.staticfile.org/font-awesome/4.4.0/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/cleancar/Public/manage/http/css/bootstrap.min.css" rel="stylesheet">
    <link href="/cleancar/Public/manage/css/style.min.css" rel="stylesheet">
    <link href="/cleancar/Public/manage/css/index.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html"/><![endif]-->
    <script>if (window.top !== window.self) {
        window.top.location = window.location;
    }</script>
</head>
<body class="gray-bg">
<style>
	.gray-bg{
			background-image: url(/cleancar/Public/manage/images/backgrounds/noise.png), url(/cleancar/Public/manage/images/backgrounds/1.jpg);background-repeat: repeat, no-repeat;background-position: left top;
			background-size: auto, cover;
			width:100%; height:100%;
	}
	.text{ font-size:25px; color:#fff;}
	.logo-name{ margin-top:0; width:100%;}
	.logo-name img{ display:block; width:100%;}
	.pd-t50{ padding-top:50px;}
	.form-control, .single-line{ background-color: rgba(0, 0, 0, 0.2);border: 1px transparent;  transition: all 0.3s linear;
	 border-radius:4px;color: white;}
	.loginscreen.middle-box{ height:100%;background-color: rgba(0, 0, 0, 0.3); width:360px; padding:0 50px 0; box-sizing: content-box; overflow-y:auto;}
	.form-control:focus{background-color: rgba(0, 0, 0, 0.4);}
	@media screen and (max-width: 479px){ .loginscreen.middle-box{width:70%;}}
</style>
<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div class="pd-t50">
        <div>
            <h1 class="logo-name">H+</h1>
        </div>
        <h3 class="text">洗车行智能管理系统</h3>
        <form class="m-t" role="form" action="<?php echo U('login/login');?>" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="用户名" name="username" required maxlength='11'>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="密码" name="password" required maxlength='15'>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
        </form>
    </div>
</div>
<script src="/cleancar/Public/manage/http/js/jquery.min.js"></script>
<script src="/cleancar/Public/manage/http/js/bootstrap.min.js"></script>
</body>
</html>