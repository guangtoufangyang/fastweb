<?php

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
		AddSpan(array("text" => "fastweb真是简单啊！"));
	EndDiv();
	EndDiv();
}

function DisplayText($k)
{
	if(!DataGetByKey($k, $data))
	{
		return;
	}
	
	AddDoc($data);
}

function DisplayNew($k)
{
	if(!DataGetByKey($k, $data))
	{
		return;
	}
	
	AddNew($data);

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
	
	AddSelect($data);
}

function DisplayCheckbox($k)
{
	if(!DataGetByKey($k, $data))
	{
		return;
	}
	
	foreach ($data as $val)
	{
		AddCheckBox($val);
	}
}

?>
