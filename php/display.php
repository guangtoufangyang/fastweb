<?php


require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_basic.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_module.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/module.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/pdo.php';

function DisplayHead($para = array())
{
	$head = new CHead();
	$head->HeadConfig($para);
	unset($head);
}

function DisplayTop()
{
	StartDiv(array("class" => "fastweb_div_frame", "style" => "background-color:#2f3e45;"));
	StartDiv(array("class" => "fastweb_div_middle", "style" => "background-color:#2f3e45;line-height:50px;"));
		AddSpan(array(), "fastweb真是简单啊！");
	EndDiv();
	EndDiv();
}

function DisplayText($k)
{
	if(!DataGetByKey($k, $jsonData))
	{
		return;
	}
	
	$arrData = json_decode($jsonData, true);
	
	AddDoc($arrData);
}

function DisplayNew($k)
{
	if(!DataGetByKey($k, $data))
	{
		return;
	}
	AddNew($data);
}

function DisplayNew2($k, $cnt)
{
	if(!DataGetByKey($k, $data))
	{
		return;
	}
	AddNew2($data, $cnt);
}

function DisplayMenuH($k)
{
	if(!DataGetByKey($k, $data))
	{
		return;
	}
	
	AddMenuH($data);

}

function DisplayMenuV($k)
{
	if(!DataGetByKey($k, $data))
	{
		return;
	}
	
	AddMenuV($data);
	ClearFloat();
}

function DisplayOptions($k)
{
	if(!DataGetByKey($k, $data))
	{
		return;
	}
	
	AddSelect(array(), $data);
}

function DisplayCheckbox($k)
{
	if(!DataGetByKey($k, $data))
	{
		return;
	}
	
	foreach ($data as $val)
	{
		AddCheckBox($val, $val["text"]);
	}
}

function DisplayTree($k, $branchTag = "")
{
	if(!DataGetByKey($k, $data))
	{
		return;
	}
	
	if(empty($branchTag))
	{
		AddTree($data);
	}
	else
	{
		AddTree($data, $branchTag);
	}
}

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

/*----------------fastweb网站功能函数--------------------*/
function DisplayFastwebFunclist($openNode)
{
	global $funcList;
	$data = json_decode($funcList, true);
	$tree = new CTree("funclist_", array($openNode), "fastweb_tree_nav");
	$tree->AddTreeData($data);
	unset($tree);
}

?>
