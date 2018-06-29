
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
			StartDiv(array("style" => "width:48%;"));
				DisplayText("new1");
			EndDiv();
			
			StartDiv(array("style" => "width:30%;"));
				$jsonData = '{"title":"热门标签", "info":[{"link":"#","text":"标签1"},{"link":"#","text":"标签22"},{"link":"#","text":"标签标签标签"},{"link":"#","text":"标签"},{"link":"#","text":"标签333"},{"link":"#","text":"标签"},{"link":"#","text":"fastweb"},{"link":"#","text":"fastweb"},{"link":"#","text":"标签"},{"link":"#","text":"标签标签"},{"link":"#","text":"fastwebfastwebfastweb"},{"link":"#","text":"fastweb"},{"link":"#","text":"fastweb"},{"link":"#","text":"fastweb"}]}';
				$arrData = json_decode($jsonData,true);
				AddTag($arrData);
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
				DisplayNew("fastweb");
			EndDiv();
			
			StartDiv(array("style" => "width:100%;"));
				DisplayText("new2");
			EndDiv();
			StartDiv(array("style" => "width:100%;"));
				DisplayNew2("fastweb", 2);
			EndDiv();
			StartDiv(array("style" => "width:100%;"));
				DisplayNew2("fastweb", 3);
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
