
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
				DisplayText("close1");
			EndDiv();
		
			StartDiv(array("class" => "fastweb_pos_right_middle fastweb_pos_fixed"));
				$closeBlock = new CCloseBlock();
				AddImgWithLink(array("src" => SITE_URL."image/fastweb.png", "href" => "#"));
				unset($closeBlock);
			EndDiv();
			
		EndDiv();
		ClearFloat();
	EndDiv();
EndDiv();

EndBody();
?>
