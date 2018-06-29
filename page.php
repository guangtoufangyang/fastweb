
<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/display.php';
DisplayHead($defaultHeadConfig);

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
			
			StartDiv(array("class" => "fastweb_align_left", "style" => "width:100%;"));
				StartFieldset(array("class" => "fastweb_fieldset_style1", "style" => "padding-left:50px;"),  "页面代码");
				DisplayCode(basename(__FILE__));
				EndFieldset();
			EndDiv();
		
		EndDiv();
		ClearFloat();
	EndDiv();
EndDiv();

Repeat('<br />', 6);
StartDiv(array("class" => "fastweb_div_frame fastweb_pos_bottom fastweb_pos_fixed fastweb_opacity_80"));
	AddHtml("Bottom.html");
EndDiv();

EndBody();
?>
