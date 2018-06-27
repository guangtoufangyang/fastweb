<?php


require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/html.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/pdo.php';

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

function AddMultiCheckBoxWithFieldset($fieldInfo, $boxName, $boxInfo)
{
	StartFieldset($fieldInfo);
	AddMultiCheckBox($boxName, $boxInfo);
	EndFieldset();
}

function AddNavigationL1($arr, $curNav, $bgColor = "#f3f3f3", $onColor = "#4CAF50")
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
/*常用的显示10，不提供页数参数，简化调用，左边显示5个页码，右边显示4个页码*/
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
		AddLink(array("href" => $urlPrefix.($currNum - 1), "text" => "上一页"));
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

function AddDoc($data)
{
	$oDoc = new CDocument();
	
	if(isset($data["title"]))
	{
		$oDoc->AddTitle($data["title"]);
	}
	
	if(isset($data["author"]))
	{
		$oDoc->AddAuthor($data["author"], 2);
	}
	
	if(isset($data["paragraph"]))
	{
		foreach ($data["paragraph"] as $val)
		{
			$oDoc->StartParagraph();
			AddSpan(array(), "&#12288;&#12288;".$val);
			$oDoc->EndParagraph();
		}
	}
	
	
	unset($oDoc);
}


function AddNew($data)
{
	StartSimpleDiv();
		if(!empty($data["title"]))
		StartDiv(array("class" => "fastweb_new_module_title"));
		AddSpan(array(), $data["title"]);
		EndDiv();

		StartDiv(array("class" => "fastweb_new_module_content"));
		
		foreach($data["info"] as $val){
			AddLineLink(array("href" => $val["link"]), $val["text"]);
		}
		EndDiv();
	EndDiv();
}

function AddNew2($data, $perLineCnt = 1)
{
	StartSimpleDiv();
		if(!empty($data["title"]))
		StartDiv(array("class" => "fastweb_new_module_title"));
		AddSpan(array(), $data["title"]);
		EndDiv();

		StartDiv(array("class" => "fastweb_new_module_content"));
		
		$width = 100 / $perLineCnt - 1;
		foreach($data["info"] as $val){
			StartSimpleDiv(array("class" => "fastweb_align_center", "style" => "float:left;width:".$width."%;"));
			AddLineLink(array("href" => $val["link"]), $val["text"]);
			EndDiv();
		}
		ClearFloat();
		EndDiv();
	EndDiv();
}

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


function AddTree($data, $branchTag = "fastweb_tree_branch_tag")
{
	$tree = new CTree($branchTag);
	$tree->AddTreeData($data);
	unset($tree);
}

function AddRollPlayImg($data, $contain = "fastweb_rollplay_contain", $slide = "fastweb_rollplay_slide")
{
	StartDiv(array("class" => $contain));
	StartUl(array("class" => $slide));
	
	foreach ($data as $val)
	{
		StartLi();
		AddImg(array("src" => $val));
		EndLi();
	}
	
	EndUl();
	EndDiv();
}
/*
function AddRollPlayImgWithLink($data, $contain = "fastweb_rollplay_contain", $slide = "fastweb_rollplay_slide")
{
	StartDiv(array("class" => $contain));
	StartUl(array("class" => $slide));
	
	foreach ($data as $val)
	{
		StartLi();
		AddImg($val);
		EndLi();
	}
	
	EndUl();
	EndDiv();
}
*/
function AddRollPlay1($data)
{
	StartDiv(array("id" => "fast_web_roll_play_frame"));
	$max = count($data);
	for($i = 1; $i<= $max; ++$i)
	{
		AddLink(array("text" => (string)$i, "id" => "fast_web_roll_play_pic_id".(string)$i, "class" => "fast_web_roll_play_target"));
	}
	
	StartDiv(array("id" => "fast_web_roll_play_photos", "class" => "fast_web_roll_play_target"));
	
	for($i = 1; $i<= $max; ++$i)
	{
		AddImg(array("src" => $data[$i - 1]["src"]));
	}
	
	StartUl(array("id" => "fast_web_roll_play_text"));
	for($i = 1; $i<= $max; ++$i)
	{
		AddLi(array(), array("text" => $data[$i - 1]["text"]));
	}
	
	EndUl();
	EndDiv();
	EndDiv();
	ClearFloat();
}


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

function AddCrumb($data)
{
	StartSimpleDiv(array("class" => "fastweb_crumb"));
	
	$cnt = count($data);
	$max = $cnt - 1;
	for($i = 0; $i < $max; ++$i)
	{
		if(isset($data[$i]["href"]) && isset($data[$i]["text"]))
		{
			AddLink(array("href" => $data[$i]["href"]), $data[$i]["text"]);
			echo " &gt; ";
		}
		else
		{
			echo $data[$i]["text"]." &gt; ";
		}
	}
	
	if(isset($data[$max]["href"]) && isset($data[$max]["text"]))
	{
		AddLink(array("href" => $data[$max]["href"]), $data[$max]["text"]);
	}
	else
	{
		echo $data[$max]["text"];
	}
	
	EndDiv();
}

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
