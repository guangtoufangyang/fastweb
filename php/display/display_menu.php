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
* AddNavigationL1 
* 添加一个水平的一级导航菜单
*
* @access
* @param mixed $arr				菜单信息
* @param mixed $curNav	 		当前菜单
* @since 1.0
* @return
*/
function AddNavigationL1($arr, $curNav)//, $bgColor = "#f3f3f3", $onColor = "#4CAF50")
{
	StartUl(array("class" => "fastweb_navigation"));
	foreach($arr as $val)
	{
		StartLi();
		if($val["text"] != $curNav)
		{
			AddLink(array("href" => $val["href"]), $val["text"]);
		}
		else
		{
			AddLink(array("href" => $val["href"], "class" => "fastweb_navigation_active"), $val["text"]);
		}
		
		EndLi();
	}
	
	EndUl();
}

/**
* AddMenuH 
* 添加一个水平的二级导航菜单
*
* @access
* @param mixed $data			菜单信息
* @since 1.0
* @return
*/
function AddMenuH($data)
{
	StartNav(array("class" => "fastweb_menu_h"));
	StartUl();
	foreach ($data as $val)
	{
		StartLiWithLink(array(), $val["name"], "#");
		foreach ($val["list"] as $lis)
		{
			StartUl();
			AddLiWithLink(array("href" => $lis["link"]), $lis["name"]);
			EndUl();
		}
		EndLi();
	}
	EndUl();
	EndNav();
}

/**
* AddMenuV 
* 添加一个垂直的二级导航菜单
*
* @access
* @param mixed $data			菜单信息
* @since 1.0
* @return
*/
function AddMenuV($data)
{
	StartSimpleDiv();
	StartNav(array("class" => "fastweb_menu_v"));
	StartUl();
	foreach ($data as $val)
	{
		StartLiWithLink(array("style" => "width:100%;"), $val["name"], "#");
		foreach ($val["list"] as $lis)
		{
			StartUl();
			AddLiWithLink(array("href" => $lis["link"]), $lis["name"]);
			EndUl();
		}
		EndLi();
	}
	EndUl();
	EndNav();
	EndDiv();
}

/**
* AddMenuH2 
* 添加一个水平的二级导航菜单
*
* @access
* @param mixed $data			菜单信息
* @since 1.0
* @return
*/
function AddMenuH2($data)
{
	foreach ($data as $val)
	{
		StartDiv(array("class" => "fastweb_div_dropdown", "style" => "float:left;"));
		AddLink(array("href" => "#", "class" => "fastweb_span_menu"), $val["name"]);
		StartDiv(array("class" => "fastweb_div_dropdown_content"));
		foreach ($val["list"] as $lis)
		{
			AddLink(array("href" => $lis["link"]), $lis["name"]);
		}
		
		EndDiv();
		EndDiv();
	}
}


?>