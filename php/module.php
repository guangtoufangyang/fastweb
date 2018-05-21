<?php


require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/html.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/pdo.php';


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
			$oDoc->ParagraphStart();
			AddSpan($val);
			$oDoc->ParagraphEnd();
		}
	}
	
	
	unset($oDoc);
}


function AddNew($data)
{
	$frame = new CSimpleDiv();
		if(!empty($data["title"]))
		$title = new CDiv("fastweb_new_module_title");
		AddSpan($data["title"]);
		unset($title);
		
		$content = new CDiv("fastweb_new_module_content");
		foreach($data["info"] as $val){
			AddLink($val["link"],$val["text"]);
		}
		unset($content);
	unset($frame);
	
}

function AddMenuH($data)
{
	
	foreach ($data as $val)
	{
		$div_dropdown = new CDiv("fastweb_div_dropdown", "float:left;");
		AddLink("#", $val["name"], "fastweb_span_menu");
		$div_dropdown_content = new CDiv("fastweb_div_dropdown_content");
		foreach ($val["list"] as $lis)
		{
			AddLink($lis["link"], $lis["name"]);
		}
		
		unset($div_dropdown_content);
		unset($div_dropdown);
	}
	
	
}

?>
