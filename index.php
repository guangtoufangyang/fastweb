
<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/display.php';
DisplayHead();
StartBody();


DisplayTop();

StartDiv(array("class" => "fastweb_div_frame"));
	StartDiv(array("class" => "fastweb_div_middle"));
		DisplayMenuH("liH");
	EndDiv();
	StartDiv(array("class" => "fastweb_div_middle"));
	
		StartDiv(array("style" => "width:78%;float:left;"));
			StartDiv(array("style" => "width:48%;float:left;"));
			DisplayText("libai");
			EndDiv();
		
			StartDiv(array("style" => "width:48%;float:right;"));
			DisplayText("libai");
			EndDiv();
			
			StartDiv(array("style" => "width:48%;float:left;"));
			DisplayNew("fastweb");
			EndDiv();
			
			StartDiv(array("style" => "width:48%;float:right;"));
			DisplayNew("fastweb");
			EndDiv();
			
			StartDiv(array("style" => "width:48%;float:left;"));
			DisplayNew("fastweb");
			EndDiv();
			
			StartDiv(array("style" => "width:48%;float:right;"));
			DisplayNew("fastweb");
			EndDiv();
			
			StartDiv(array("style" => "width:48%;float:left;"));
			DisplayNew("fastweb");
			EndDiv();
			
			StartDiv(array("style" => "width:48%;float:right;"));
			DisplayNew("fastweb");
			EndDiv();
		
		EndDiv();
		
		StartDiv(array("style" => "width:20%;float:right;"));
			DisplayNew("fastweb");
			DisplayNew("fastweb");
			DisplayNew("fastweb");
		EndDiv();
		ClearFloat();
	EndDiv();

EndDiv();

StartDiv(array("class" => "fastweb_div_middle"));
	StartDiv(array("style" => "width:68%;float:left;"));
		DisplayTree("tree", "tree1_");
	EndDiv();
		
	StartDiv(array("style" => "width:30%;float:right;"));
		DisplayTree("tree", "tree2_");
	EndDiv();
	ClearFloat();
EndDiv();

StartDiv(array("class" => "fastweb_div_middle"));
	DisplayMenuV("liH");	
EndDiv();

StartDiv(array("class" => "fastweb_div_middle"));
	$tab = new CTab(array("水平菜单", "新闻", "垂直菜单", "单选框", "多选框", "播放"));
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

	$tab->EndTab();
	
	unset($tab);
	ClearFloat();	
EndDiv();

StartDiv(array("class" => "fastweb_div_middle"));
	//AddRollPlay(array(array("text" => "图片1", "src" => "./pic/bg1.jpg"),array("text" => "图片2", "src" => "./pic/bg2.jpg"),array("text" => "图片3", "src" => "./pic/bg3.jpg"),array("text" => "图片4", "src" => "./pic/bg4.jpg"),array("text" => "图片5", "src" => "./pic/bg5.jpg")));

	
ClearFloat();
EndDiv();

StartDiv(array("class" => "fastweb_div_frame"));
	AddHtml("Bottom.html");
EndDiv();

EndBody();
?>
