<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<include file="./Tpl/head.php" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
	<div data-options="region:'center',title:''">
    <!-- 中间 -->
    	<div id="main" class="easyui-tabs" data-options="fit:true">  
            <div title="登陆页面">  
            	<form method="post" action="__APP__/Index/login">
                <table width="500" border="1" align="center">
                	<tr>
                    	<th colspan="2"><h2>系统登陆</h2></th>
                    </tr>
                	<tr>
                    	<td align="center">用户名</td>
                        <td align="center"><input type="text" name="loginname"/></td>
                    </tr>
                    <tr>
                    	<td align="center">密码</td>
                        <td align="center"><input type="password" name="password"/></td>
                    </tr>
                    <tr>
                    	<td align="center"></td>
                        <td align="center"><input type="submit" value="登陆"/></td>
                    </tr>
                </table>
            	</form>
            </div>
        </div>  
    </div>
    
</body>

</html>
