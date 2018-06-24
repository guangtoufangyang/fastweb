
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
				DisplayText("crumb1");
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
				AddCrumb(array(array("href" => "#", "text" => "首页"), array("href" => "#", "text" => "频道"), array("href" => "#", "text" => "栏目"), array( "text" => "fastweb")));
			EndDiv();
			
		EndDiv();
		ClearFloat();
	EndDiv();
EndDiv();

EndBody();
?>
