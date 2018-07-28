<?php


/**
* 基础的html封装
* 
* 对基本的html标签的封装
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/

require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_module.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_data.php';


/**
* AddSearchBar 
* 添加一个搜索框
*
* @access
* @param mixed $searchUrl		搜索链接的url前缀
* @param mixed $btText	 		按钮上的文字
* @param mixed $name			传递的参数名称
* @param mixed $method			传参方式，get或者post
* @param mixed $placeholder		占位字符
* @param mixed $style			搜索框样式
* @since 1.0
* @return
*/
function AddSearchBar($searchUrl, $btText = "", $name = "word", $method = "get", $placeholder = "", $style = "fastweb_search_bar_style1")
{
	StartDiv(array("class" => $style));
	StartForm(array("action" => $searchUrl, "method" => $method));
	AddTextInput(array("placeholder" => $placeholder, "name" => $name));
	if(!empty($btText))
	{
		AddSubmit(array(), $btText);
	}
	else
	{
		AddSubmit(array("class" => "fastweb_search_bar_icon_style1"));
	}
	
	EndForm();
	EndDiv();
}


?>