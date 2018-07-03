
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
				DisplayText("rollplay1");
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
				
				$roll = new CRollPlay("fastweb_rollplay_slide_AAA", 600, "400px", "10s");
				$roll->AddRollImg(SITE_URL."image/fastweb.png");
				$roll->AddRollImg(SITE_URL."image/fastweb.png", "#");
				$roll->AddRollImg(SITE_URL."image/fastweb.png");
				$roll->RollStart();
					$jsonData = '{"title":"静夜思", "author":"李白", "paragraph":["床前明月光，", "疑是地上霜，", "举头望明月，", "低头思故乡。"]}';
					$arrData = json_decode($jsonData, true);
					AddDoc($arrData);
				$roll->RollEnd();
				unset($roll);
							
				
			EndDiv();
			
			StartDiv(array("style" => "width:100%;"));
				
				$roll = new CVerticalRollPlay(600, "10s");
				$roll->AddRollImg(SITE_URL."image/fastweb.png");
				$roll->AddRollImg(SITE_URL."image/fastweb.png", "#");
				$roll->AddRollImg(SITE_URL."image/fastweb.png");
				$roll->RollStart();
					$jsonData = '{"title":"静夜思", "author":"李白", "paragraph":["床前明月光，", "疑是地上霜，", "举头望明月，", "低头思故乡。"]}';
					$arrData = json_decode($jsonData, true);
					AddDoc($arrData);
				$roll->RollEnd();
				unset($roll);
							
				
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
