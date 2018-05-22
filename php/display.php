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
	$divExt = new CDiv("fastweb_div_top_frame", "width:100%;");
	$divInside = new CDiv("fastweb_div_top_middle", "width:1300px;");
		AddSpan("fastweb真是简单啊！");
	unset($divInside);
	unset($divExt);
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

}

?>
