
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
				DisplayText("menu1");
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
				AddNavigationL1(array(array("href" => "#", "text" => "菜单1"), array("href" => "#", "text" => "菜单2"), array("href" => "#", "text" => "菜单3") ), "菜单1");
			EndDiv();
			
			StartDiv(array("style" => "width:100%;"));
				DisplayText("menu2");
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
				$data = array(array("name" => "菜单1", "list" => array(array("name" => "子菜单11", "link" => "#"),array("name" => "子菜单12", "link" => "#"),array("name" => "子菜单13", "link" => "#"))),array("name" => "菜单2", "list" => array(array("name" => "子菜单21", "link" => "#"),array("name" => "子菜单22", "link" => "#"),array("name" => "子菜单23", "link" => "#"))),array("name" => "菜单3", "list" => array(array("name" => "子菜单31", "link" => "#"),array("name" => "子菜单32", "link" => "#"),array("name" => "子菜单33", "link" => "#"))));
				AddMenuH($data);
			EndDiv();
			
			StartDiv(array("style" => "width:100%;"));
				DisplayText("menu3");
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
				$data = array(array("name" => "菜单1", "list" => array(array("name" => "子菜单11", "link" => "#"),array("name" => "子菜单12", "link" => "#"),array("name" => "子菜单13", "link" => "#"))),array("name" => "菜单2", "list" => array(array("name" => "子菜单21", "link" => "#"),array("name" => "子菜单22", "link" => "#"),array("name" => "子菜单23", "link" => "#"))),array("name" => "菜单3", "list" => array(array("name" => "子菜单31", "link" => "#"),array("name" => "子菜单32", "link" => "#"),array("name" => "子菜单33", "link" => "#"))));
				AddMenuV($data);
				ClearFloat();
			EndDiv();
			
		EndDiv();
		ClearFloat();
	EndDiv();
EndDiv();

EndBody();
?>