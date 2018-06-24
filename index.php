
<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/display.php';
DisplayHead();

ParamInfo($paramInfo);
StartBody();

DisplayTop();

StartDiv(array("class" => "fastweb_div_frame"));
	StartDiv(array("class" => "fastweb_div_middle"));
		StartDiv(array("style" => "width:23%;float:left;"));
			$tree = new CTree("funclist_", array(), "fastweb_tree_nav");
			$data = json_decode($funcList, true);
			$tree->AddTreeData($data);
			unset($tree);
		EndDiv();
		
		StartDiv(array("style" => "width:73%;float:right;"));
			StartDiv(array("style" => "width:100%;"));
				DisplayText("index1");
			EndDiv();
		EndDiv();
	
		ClearFloat();
	EndDiv();
EndDiv();	

EndBody();
?>
