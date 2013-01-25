<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<include file="./Tpl/head.php" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
html, body{margin:0; padding:0; border:0 none;font:14px Tahoma,Verdana;line-height:150%;background:white}
a{text-decoration:none; color:#174B73; border-bottom:1px dashed gray}
a:hover{color:#F60; border-bottom:1px dashed gray}
div.message{margin:10% auto 0px auto;clear:both;padding:5px;border:1px solid silver; text-align:center; width:45%}
span.wait{color:blue;font-weight:bold}
span.error{color:red;font-weight:bold}
span.success{color:blue;font-weight:bold}
div.msg{margin:20px 0px}
</style>
</head>
<body class="easyui-layout">
	<div data-options="region:'north',border:false" style="height:60px;padding:10px">
    <!-- 顶部 -->
        <img src="__TPL__/images/logo.png" width="48" style="float:left"/>
        <h1>嘉银融资担保管理系统</h1>
    </div>
    
	<div data-options="region:'south',border:false" style="height:50px;padding:10px;">
    <!-- 底部 -->
    	footer
    </div>
	<div data-options="region:'center',title:'用户：韩三平&nbsp;【总经理】'">
    <!-- 中间 -->
        <div class="message" style="margin-left:350px;">
            <div class="msg">
                <present name="message" >
                <span class="success">{$msgTitle}{$message}</span>
                <else/>
                <span class="error">{$msgTitle}{$error}</span>
                </present>
                </div>
                <div class="tip">
                <present name="closeWin" >
                    The page will be closed after <span class="wait">{$waitSecond}</span> secends, <a href="{$jumpUrl}">Click here</a> to close right now.
                <else/>
                    The page will be refresh after <span class="wait">{$waitSecond}</span> secends, <a href="{$jumpUrl}">Click here</a> to refresh right now.
                </present>
            </div>
        </div>
    </div>
    
</body>

</html>


