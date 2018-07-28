
<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_display.php';
$headArr = $defaultHeadConfig;
$headArr["base"] = SITE_URL."tab.php";
DisplayHead($headArr);

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
				if(DataGetByKey("tab1", $data))
				{
					AddDoc($data);
				}
			EndDiv();
			
			AddH3(array("style" => "text-align:left;line-height:50px;"), "选项卡1");
			StartDiv(array("style" => "width:100%;"));
				$tab = new CTab(array("水平菜单", "新闻", "垂直菜单", "单选框", "多选框", "播放", "带链接播放"), "300px", 3);
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
			
			AddH3(array("style" => "text-align:left;line-height:50px;"), "选项卡2");
			StartDiv(array("style" => "width:100%;"));
				$tab = new CTabByJs(array("水平菜单", "新闻", "垂直菜单", "单选框", "多选框", "播放", "带链接播放"), "auto", 1, "fastweb_tab1_", 0);
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
			
			AddH3(array("style" => "text-align:left;line-height:50px;"), "选项卡3");
			StartDiv(array("style" => "width:100%;"));
				$tab = new CTabByJs(array("水平菜单", "新闻", "垂直菜单", "单选框", "多选框", "播放", "带链接播放"), "auto", 2, "fastweb_tab2_", 0);
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
			
			AddH3(array("style" => "text-align:left;line-height:50px;"), "选项卡4");
			StartDiv(array("style" => "width:100%;"));
				$tab = new CTabByJs(array("水平菜单", "新闻", "垂直菜单", "单选框", "多选框", "播放", "带链接播放"), "auto", 3, "fastweb_tab3_");
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
			
			AddH3(array("style" => "text-align:left;line-height:50px;"), "选项卡5");
			StartDiv(array("style" => "width:100%;"));
				$tab = new CTabByJs(array("水平菜单", "新闻", "垂直菜单", "单选框", "多选框", "播放", "带链接播放"), "auto", 4, "fastweb_tab4_");
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
			
			StartDiv(array("class" => "fastweb_align_left", "style" => "width:100%;"));
				StartFieldset(array("class" => "fastweb_fieldset_style1", "style" => "padding-left:50px;word-wrap:break-word;word-break:break-all;"),  "页面代码");
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
