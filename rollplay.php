
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
				DisplayText("rollplay1");
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
				
				$data = array(SITE_URL."image/fastweb.png",SITE_URL."image/fastweb.png",SITE_URL."image/fastweb.png");
				StartDiv(array("class" => "fastweb_rollplay_contain"));
				StartUl(array("class" => "fastweb_rollplay_slide"));
				
				foreach ($data as $val)
				{
					StartLi();
					AddImg(array("src" => $val));
					EndLi();
				}
				
				EndUl();
				EndDiv();
							
				
			EndDiv();
			
			StartDiv(array("class" => "fastweb_align_left", "style" => "width:100%;"));
				StartFieldset(array("class" => "fastweb_fieldset_style1"),  "页面代码");
				DisplayFile(basename(__FILE__), "<br />");
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
