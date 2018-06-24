
<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/display.php';
DisplayHead();

ParamInfo($paramInfo);
StartBody();

DisplayTop();

StartDiv(array("class" => "fastweb_div_frame"));
	StartDiv(array("class" => "fastweb_div_middle"));
		StartDiv(array("style" => "width:23%;float:left;"));
			DisplayFastwebFunclist("功能模块");
		EndDiv();
		
		StartDiv(array("style" => "width:73%;float:right;"));
			StartDiv(array("style" => "width:100%;"));
				DisplayText("page1");
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
			AddPageTurningBySize(isset($paramInfo["page"]) ? $paramInfo["page"] : 1, SITE_URL."page.php?page=");
			
	
			EndDiv();
			
			StartDiv(array("style" => "width:100%;"));
				DisplayText("page2");
			EndDiv();
			
			StartDiv(array("style" => "width:100%;"));
			
			AddPageTurning(5, 12, isset($paramInfo["page"]) ? $paramInfo["page"] : 8, SITE_URL."page.php?page=");
			
			EndDiv();		
		
		EndDiv();
		ClearFloat();
	EndDiv();
EndDiv();

EndBody();
?>
