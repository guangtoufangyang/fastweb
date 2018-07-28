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
* AddMultiCheckBox 
* 添加一个多选框
*
* @access
* @param mixed $name			
* @param mixed $info	 		
* @since 1.0
* @return
*/
function AddMultiCheckBox($name, $info)
{
	$attr = array();
	$attr["name"] = $name;
	foreach ($info as $val)
	{
		$attr["value"] = $val["value"];
		$attr["text"] = $val["text"];
		$attr["checked"] = $val["checked"];
		AddCheckBox($attr);
	}
}

/**
* AddMultiCheckBoxWithFieldset 
* 添加一个多选框
*
* @access
* @param mixed $fieldInfo			
* @param mixed $boxName	
* @param mixed $boxInfo	 		
* @since 1.0
* @return
*/
function AddMultiCheckBoxWithFieldset($fieldInfo, $boxName, $boxInfo)
{
	StartFieldset($fieldInfo);
	AddMultiCheckBox($boxName, $boxInfo);
	EndFieldset();
}

/**
* AddTree 
* 添加一颗树
*
* @access
* @param mixed $data			
* @param mixed $branchTag		 		
* @since 1.0
* @return
*/
function AddTree($data, $branchTag = "fastweb_tree_branch_tag")
{
	$tree = new CTree($branchTag);
	$tree->AddTreeData($data);
	unset($tree);
}

/**
* AddRollPlayImg 
* 添加一颗树
*
* @access
* @param mixed $data			
* @param mixed $contain
* @param mixed $slide		 		
* @since 1.0
* @return
*/
function AddRollPlayImg($data, $contain = "fastweb_rollplay_contain", $slide = "fastweb_rollplay_slide")
{
	$roll = new CHorizontalRollPlay();
	foreach ($data as $val)
	{
		$roll->AddRollImg($val);
	}
	
	unset($roll);
}

/**
* DisplayFile 
* 显示一个文本文件
*
* @access
* @param mixed $path		文件路径			
* @param mixed $lineEnd		行结束符
* @param mixed $trim		是否去除两边空白符		 		
* @since 1.0
* @return
*/
function DisplayFile($path, $lineEnd = '', $trim = false)
{
	$file = fopen($path, 'r');
	if(false === $file)
	{
		return;
	}
	while (! feof($file)) {
		$line = fgets($file);
		$line = htmlspecialchars($line);
		if($trim)
		{
			$line = trim($line);
		}
		echo $line.$lineEnd;
	}
	fclose($file);
}


/**
* DisplayCode 
* 显示一个文本文件
*
* @access
* @param mixed $path		文件路径			
* @param mixed $lineEnd		行结束符
* @param mixed $trim		是否去除两边空白符		 		
* @since 1.0
* @return
*/
function DisplayCode($path, $lineEnd = '', $trim = false)
{
	$file = fopen($path, 'r');
	if(false === $file)
	{
		return;
	}
	StartDiv(array("class" => "fastweb_code_frame"));
	$i = 0;
	StartOl(array("start" => 1, "class" => "fastweb_code_num"));
	while (! feof($file)) {
		$line = fgets($file);
		$line = htmlspecialchars($line);
		if($trim)
		{
			$line = trim($line);
		}
		++$i;
		if($i % 2)
		{
			AddLi(array("class" => "fastweb_code_line", "style" => "background-color: rgb(248,248,248);"), $line.$lineEnd);
		}
		else
		{
			AddLi(array("class" => "fastweb_code_line", "style" => "background-color: rgb(255,255,255);"), $line.$lineEnd);
		}
		
	}
	fclose($file);
	EndOl();
	
	EndDiv();
}


?>