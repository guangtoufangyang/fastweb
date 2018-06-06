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

function AddDoc($data)
{
	$oDoc = new CDocument();
	
	if(isset($data["title"]))
	{
		$oDoc->AddTitle($data["title"]);
	}
	
	if(isset($data["author"]))
	{
		$oDoc->AddAuthor($data["author"]);
	}
	
	if(isset($data["paragraph"]))
	{
		foreach ($data["paragraph"] as $val)
		{
			$oDoc->StartParagraph();
			AddSpan(array("text" => $val));
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
		AddSpan(array("text" => $data["title"]));
		EndDiv();

		StartDiv(array("class" => "fastweb_new_module_content"));
		foreach($data["info"] as $val){
			AddLineLink(array("href" => $val["link"], "text" => $val["text"]));
		}
		EndDiv();
	EndDiv();
}

function AddMenuH($data)
{
	StartNav(array("class" => "fastweb_menu_h"));
	StartUl();
	foreach ($data as $val)
	{
		StartLiWithLink(array("href" => "#", "text" => $val["name"]));
		foreach ($val["list"] as $lis)
		{
			StartUl();
			AddLiWithLink(array("href" => $lis["link"], "text" => $lis["name"]));
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
		StartLiWithLink(array("href" => "#", "text" => $val["name"], "style" => "width:100%;"));
		foreach ($val["list"] as $lis)
		{
			StartUl();
			AddLiWithLink(array("href" => $lis["link"], "text" => $lis["name"]));
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
		AddLink(array("href" => "#", "text" => $val["name"], "class" => "fastweb_span_menu"));
		StartDiv(array("class" => "fastweb_div_dropdown_content"));
		foreach ($val["list"] as $lis)
		{
			AddLink(array("href" => $lis["link"], "text" => $lis["name"]));
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
		AddLi(array("text" => $data[$i - 1]["text"]));
	}
	
	EndUl();
	EndDiv();
	EndDiv();
	ClearFloat();
}

?>
