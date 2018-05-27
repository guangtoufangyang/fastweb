
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
	DisplayMenuV("liH");	
EndDiv();

StartDiv(array("class" => "fastweb_div_middle"));
	//$tab = new CTab();
	$tab = new CDivTabBox(array("水平菜单", "新闻", "垂直菜单"));
	$tab->StartTab("tab1");
	DisplayMenuH("liH");
	$tab->EndTab();
	
	$tab->StartTab("tab2");
	DisplayNew("fastweb");
	$tab->EndTab();
	
	$tab->StartTab("tab3");
	DisplayMenuV("liH");
	$tab->EndTab();
	unset($tab);
	ClearFloat();	
EndDiv();



StartDiv(array("class" => "fastweb_div_frame"));
	AddHtml("Bottom.html");
EndDiv();

EndBody();
?>
