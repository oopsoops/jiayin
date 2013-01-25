<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>System Error</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<meta name="Generator" content="EditPlus"/>
<link rel="stylesheet" type="text/css" href="__TPL__/css/style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="__TPL__/css/iecss.css" />
<![endif]-->
<link type="text/css" href="__TPL__/css/ui-lightness/jquery-ui-1.8.23.custom.css" rel="stylesheet" />
<link type="text/css" href="__TPL__/css/page.css" rel="stylesheet" />
<script type="text/javascript" src="__TPL__/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="__TPL__/js/jquery-ui-1.8.23.custom.min.js"></script>
<script type="text/javascript" src="__TPL__/js/jquery.myPagination.js"></script>
<script type="text/javascript" src="__TPL__/js/ajaxfileupload.js"></script>
<script type="text/javascript">
	$(function(){
		// Tabs
		$('#tabs').tabs();
		// Accordion
		$('#accordion').accordion({header:"h3"});
		//Buttons
		$('.btn').button();
	});
</script>
<style>
body{
	font-family: 'Microsoft Yahei', Verdana, arial, sans-serif;
	font-size:14px;
}
a{text-decoration:none;color:#174B73;}
a:hover{ text-decoration:none;color:#FF6600;}
h2{
	border-bottom:1px solid #DDD;
	padding:8px 0;
    font-size:25px;
}
.title{
	margin:4px 0;
	color:#F60;
	font-weight:bold;
}
.message,#trace{
	padding:1em;
	border:solid 1px #000;
	margin:10px 0;
	background:#FFD;
	line-height:150%;
}
.message{
	background:#FFD;
	color:#2E2E2E;
		border:1px solid #E0E0E0;
}
#trace{
	background:#E7F7FF;
	border:1px solid #E0E0E0;
	color:#535353;
}
.notice{
    padding:10px;
	margin:5px;
	color:#666;
	background:#FCFCFC;
	border:1px solid #E0E0E0;
}
.red{
	color:red;
	font-weight:bold;
}
</style>
</head>
<body>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td class="top_left">&nbsp;</td>
		    <td width="1006" class="top">
				<include file="./Tpl/top_menu.php" />
			</td>
			<td class="top_right">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3">
				<div id="main">
					<div class="small_column">
    
                        <div class="notice" style="margin-left:350px;">
                            <h2> [ <A HREF="<?php echo(strip_tags($_SERVER['PHP_SELF']))?>">Try again</A> ] [ <A HREF="javascript:history.back()">Back</A> ] Or [ <A HREF="<?php echo(__APP__);?>">Back to Home</A> ]</div>
                            <?php if(isset($e['file'])) {?>
                            <p><strong>Error Location:</strong>　FILE: <span class="red"><?php echo $e['file'] ;?></span>　LINE: <span class="red"><?php echo $e['line'];?></span></p>
                            <?php }?>
                            <p class="title">[ Error Msg ]</p>
                            <p class="message"><?php echo strip_tags($e['message']);?></p>
                            <?php if(isset($e['trace'])) {?>
                            <p class="title">[ TRACE ]</p>
                            <p id="trace">
                            <?php echo nl2br($e['trace']);?>
                            </p>
                            <?php }?>
                            </div>
                            <div align="center" style="color:#FF3300;margin:5pt;font-family:Verdana"> Real Estate </span>
                        </div>

                        
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td class="bot_left">&nbsp;</td>
			<td class="bot_center">
				<include file="./Tpl/footer.php" />
			</td>
			<td class="bot_right">&nbsp;</td>
		</tr>
	</table>
</body>
</html>