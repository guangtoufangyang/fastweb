<?php


/**
* 基础的html封装
* 
* 对基本的html标签的封装
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/

function ColorEventMouseOver($color = "#ffff66")
{
	return "onmouseover=\"this.style.backgroundColor='".$color."';\"";
}

function ColorEventMouseOut($color = "#d4e3e5")
{
	return "onmouseout=\"this.style.backgroundColor='".$color."';\"";
}


?>