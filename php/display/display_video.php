<?php


/**
* 基础的html封装
* 
* 对基本的html标签的封装
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/

require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_module.php';


/**
* AddVideoSwf 
* 添加一个swf视频
*
* @access
* @param mixed $src				视频的url路径
* @param mixed $height	 		视频显示高度
* @param mixed $width			视频显示宽度
* @since 1.0
* @return
*/
function AddVideoSwf($src, $height = 0, $width = 0)
{
	StartObject();
	$parm = array();
	$parm["src"] = $src;
	if(($height > 0) && ($width > 0))
	{
		$parm["height"] = $height;
		$parm["width"] = $width;
	}
	$parm["play"] = "false";
	$parm["flashvars"] = "autoplay=false&play=false";
	$parm["menu"] = "true";
	$parm["hidden"] = "false";
	$parm["loop"] = "false";
	
	AddEmbed($parm);
	EndObject();
}

?>