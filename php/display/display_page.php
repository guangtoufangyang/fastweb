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
* AddPageTurningBySize 
* 生成翻页，最大显示10个页码，不提供页数参数以简化调用，左边显示5个页码，右边显示4个页码
*
* @access
* @param mixed $currNum			当前页码
* @param mixed $urlPrefix	 	翻页url前缀
* @param mixed $globalMax		全局最大页码数
* @since 1.0
* @return
*/
function AddPageTurningBySize($currNum, $urlPrefix, $globalMax = 100)
{
	if($currNum < 1) $currNum = 1;
	if($currNum > $globalMax) $currNum = $globalMax;
	
	$minNum = 0;
	$maxNum = 0;
	if($currNum < 6)
	{
		$minNum = 1;
		$maxNum = 10;
	}
	else if($currNum > ($globalMax - 4))
	{
		$minNum = $globalMax - 10;
		$maxNum = $globalMax;
	}
	else
	{
		$minNum = $currNum - 5;
		$maxNum = $currNum + 4;
	}
	
	StartUl(array("class" => "fastweb_page"));
	if($currNum > 1)
	{
		StartLi();
		AddLink(array("href" => $urlPrefix.($currNum - 1)), "上一页");
		EndLi();
	}
	
	for($i = $minNum; $i <= $maxNum; ++$i)
	{
		StartLi();
		if($i != $currNum)
		{
			AddLink(array("href" => $urlPrefix.strval($i)), $i);
		}
		else
		{
			AddLink(array("href" => $urlPrefix.strval($i), "class" => "fastweb_page_active"), $i);
		}	
		
		
		EndLi();
	}
	
	if($currNum < $globalMax)
	{
		StartLi();
		AddLink(array("href" => $urlPrefix.($currNum + 1)), "下一页");
		EndLi();
	}
	
	EndUl();
}

/**
* AddPageTurning 
* 生成翻页
*
* @access
* @param mixed $minNum			页面显示的页码区间最小值
* @param mixed $maxNum			页面显示的页码区间最大值
* @param mixed $currNum			当前页码
* @param mixed $urlPrefix	 	翻页url前缀
* @param mixed $globalMax		全局最大页码数
* @since 1.0
* @return
*/
function AddPageTurning($minNum, $maxNum, $currNum, $urlPrefix, $globalMax = 100)
{
	if(($currNum < $minNum) || ($currNum > $maxNum))
	{
		$currNum = $minNum;
	}
	
	StartUl(array("class" => "fastweb_page"));
	if($currNum > 1)
	{
		StartLi();
		AddLink(array("href" => $urlPrefix.($currNum - 1)), "上一页");
		EndLi();
	}
	
	for($i = $minNum; $i <= $maxNum; ++$i)
	{
		StartLi();
		if($i != $currNum)
		{
			AddLink(array("href" => $urlPrefix.strval($i)), $i);
		}
		else
		{
			AddLink(array("href" => $urlPrefix.strval($i), "class" => "fastweb_page_active"), $i);
		}	
		
		
		EndLi();
	}
	
	if(($currNum < $globalMax) || ($currNum < $maxNum))
	{
		StartLi();
		AddLink(array("href" => $urlPrefix.($currNum + 1)), "下一页");
		EndLi();
	}
	
	EndUl();
}

?>