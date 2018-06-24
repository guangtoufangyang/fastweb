
<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/display.php';
DisplayHead(array("base" => SITE_URL."tab.php"));

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
				DisplayText("tab1");
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
				$tab = new CTab(array("水平菜单", "新闻", "垂直菜单", "单选框", "多选框", "播放", "带链接播放"));
				$tab->StartTab();
				DisplayMenuH("liH");
				$tab->EndTab();
				
				$tab->StartTab();
				DisplayNew("fastweb");
				$tab->EndTab();
				
				$tab->StartTab();
				DisplayMenuV("liH");
				$tab->EndTab();
				
				$tab->StartTab();
				DisplayOptions("option");
				$tab->EndTab();
				
				$tab->StartTab();
				DisplayCheckbox("checkbox");
				$tab->EndTab();
				
				$tab->StartTab();
				AddRollPlayImg(array(SITE_URL."image/fastweb.png",SITE_URL."image/fastweb.png",SITE_URL."image/fastweb.png"));
				$tab->EndTab();
				
				$tab->StartTab();

				$tab->EndTab();
				
				unset($tab);
				ClearFloat();	
			EndDiv();
			
		EndDiv();
		ClearFloat();
	EndDiv();
EndDiv();

EndBody();
?>
