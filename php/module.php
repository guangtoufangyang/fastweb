<?php


require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_basic.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_module.php';
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


function AddTree($data, $branchTag = "fastweb_tree_branch_tag")
{
	$tree = new CTree($branchTag);
	$tree->AddTreeData($data);
	unset($tree);
}

function AddRollPlayImg($data, $contain = "fastweb_rollplay_contain", $slide = "fastweb_rollplay_slide")
{
	$roll = new CHorizontalRollPlay();
	foreach ($data as $val)
	{
		$roll->AddRollImg($val);
	}
	
	unset($roll);
}




?>
