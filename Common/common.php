<?php
//防注入字符串检测
function Check($arg1){
	//if(preg_match("([*|\+<>/'`;])",$arg1)>0) $arg1="";
	$arg1=str_replace("+","",$arg1);
	$arg1=str_replace("\'","",$arg1);
	$arg1=str_replace("/*","",$arg1);
	$arg1=str_replace("/","",$arg1);	
	$arg1=str_replace("'","",$arg1);
	$arg1=str_replace('"',"",$arg1);
	$arg1=str_replace("`","",$arg1);
	$arg1=str_replace(" ","&nbsp;",$arg1);
	$arg1=str_replace("\n;","<br/>",$arg1);
	$arg1=str_replace("<","",$arg1);
	$arg1=str_replace("&lt;","",$arg1);
	$arg1=str_replace(">","",$arg1);
	$arg1=str_replace("&gt;","",$arg1);
	$arg1=str_replace("\t"," ",$arg1);
	$arg1=str_replace("\r","",$arg1);
	$arg1=str_replace('script',"",$arg1);
	$arg1=str_replace('select',"",$arg1);
	$arg1=str_replace('union',"",$arg1);
	$arg1=str_replace('insert',"",$arg1);
	$arg1=str_replace('update',"",$arg1);
	$arg1=str_replace('delete',"",$arg1);
	$arg1=str_replace('drop',"",$arg1);
	$arg1=str_replace("/[\s\v]+/"," ",$arg1);
	$arg1=(!get_magic_quotes_gpc())?addslashes($arg1):$arg1;
	//$arg1=str_replace("_", "\_", $arg1);
	//$arg1=str_replace("%", "\%", $arg1);
	return $arg1;
}

//跳转页面
function linkTo($url)
{
	echo '<script>window.location.href="'.$url.'";</script>';
}
//弹出对话框
function alert($text)
{
	echo '<script>alert("'.$text.'");</script>';
}
//警告信息
function highlight($text)
{
	$html='<div class="ui-widget">';
	$html.='<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">';
	$html.='<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>';
	$html.=$text.'</p>';
	$html.='</div></div>';	
	echo $html;
}
//返回json信息
function getJsonMsg($msg)
{
	$json = "{msg:'$msg'}";
	return iconv("utf-8","gb2312",$json);
}
//tips
function Tips($text)
{
	$html='<div class="ui-overlay">';
	$html.='<div class="ui-widget-shadow ui-corner-all" style="width: 202px; height: 152px; position: absolute; left: 580px; top: 60px;"></div>';
	$html.='</div>';
	$html.='<div class="ui-widget ui-widget-content ui-corner-all" style="position: absolute; width: 180px; height: 130px;left: 580px; top: 60px; padding: 10px;" >';
	$html.='<div class="ui-dialog-content ui-widget-content" style="background: none; border: 0;">';
	$html.='<p style="color:gray;">';
	$html.='<img src="__TPL__/images/wand.png" width="30" />&nbsp;';
	$html.=$text.'</p>';
	$html.='</div></div>';	
	echo $html;
}

function dateToJson($data,$total)
{
	$rs['total']=$total;
	for($i=0;$i<count($data);$i++)
	{
		foreach($data[$i] as $key=>$value)
		{
			$rs['rows'][$i][$key]=$value;
		}
	}
	return json_encode($rs);	
}
?>