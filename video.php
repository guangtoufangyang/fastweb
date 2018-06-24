
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
				DisplayText("video1");
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
				AddVideoSwf(SITE_URL."video/100pian.swf", 360, 480);
			EndDiv();
			
		EndDiv();
		ClearFloat();
	EndDiv();
EndDiv();

EndBody();
?>
