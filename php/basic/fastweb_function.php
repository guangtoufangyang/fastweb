<?php


/**
* 基础的html封装
* 
* 对基本的html标签的封装
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/


function ParamInfo(&$paramArr)
{
	$paramArr = array();
	
	foreach($_GET as $key=>$value)
	{
		$paramArr[$key] = $value;
	}
	
	foreach($_POST as $key=>$value)
	{
		$paramArr[$key] = $value;
	}
	return;
}

function ClearFloat()
{
	echo '<div style="clear:both"></div>'.PHP_EOL;
}

function Repeat($data, $cnt = 1)
{
	for($i = 0; $i < $cnt; ++$i)
	{
		echo $data;
	}
}

function AddHtml($path){
	include GLOBAL_HTML.$path;
}




?>