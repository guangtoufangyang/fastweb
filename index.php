
<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/display.php';
DisplayHead();

ParamInfo($paramInfo);
StartBody();

DisplayTop();

StartDiv(array("class" => "fastweb_div_frame"));
	StartDiv(array("class" => "fastweb_div_middle"));
		DisplayMenuH("liH");
	EndDiv();
	
	StartDiv(array("class" => "fastweb_div_middle"));
	?>
	

	
	<?php
	
	/*
	$closeBlock = new CCloseBlock();
	AddImg(array("src" => "http://p1.qhimg.com/t01726f477d76f8cf82.png"));
	unset($closeBlock);
	*/
	EndDiv();
	
	StartDiv(array("class" => "fastweb_div_middle"));
		AddNavigationL1(array(array("href" => "#", "text" => "菜单1"), array("href" => "#", "text" => "菜单2"), array("href" => "#", "text" => "菜单3") ), "菜单1");
	EndDiv();
	
	StartDiv(array("class" => "fastweb_div_middle"));
	
		StartDiv(array("style" => "width:78%;float:left;"));
			StartSimpleDiv(array("style" => "float:left;"));
			StartDiv(array("style" => "width:48%;float:left;"));
			DisplayText("libai");
			EndDiv();
		
			StartDiv(array("style" => "width:48%;float:right;"));
			DisplayText("libai");
			EndDiv();
			EndDiv();
			
			StartSimpleDiv(array("style" => "float:left;"));
			StartDiv(array("style" => "width:48%;float:left;"));
			DisplayNew("fastweb");
			EndDiv();
			
			StartDiv(array("style" => "width:48%;float:right;"));
			DisplayNew2("fastweb", 2);
			EndDiv();			
			
			EndDiv();
			
			StartSimpleDiv(array("style" => "float:left;"));
			StartDiv(array("style" => "width:48%;float:left;"));
			DisplayNew2("fastweb", 3);
			EndDiv();
			
			StartDiv(array("style" => "width:48%;float:right;"));
			DisplayNew("fastweb");
			EndDiv();
			EndDiv();
			
			StartSimpleDiv(array("style" => "float:left;"));
			StartDiv(array("style" => "width:48%;float:left;"));
			DisplayNew("fastweb");
			EndDiv();
			
			StartDiv(array("style" => "width:48%;float:right;"));
			DisplayNew("fastweb");
			EndDiv();
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
	StartDiv(array("style" => "width:30%;float:left;"));
		DisplayTree("tree", "tree1_");
	EndDiv();
		
	StartDiv(array("style" => "width:30%;float:left;"));
		$tree = new CTree("tree2_", array("nav1"), "fastweb_tree_nav");
		$tree->StartBranch("nav", "#");
			$tree->AddLeaf("栏目", "#");
			$tree->AddLeaf("栏目");
		$tree->EndBranch();
		$tree->StartBranch("nav1", "#");
			$tree->AddLeaf("栏目");
			$tree->AddLeaf("栏目", "#");
			$tree->AddLeaf("栏目", "#");
		$tree->EndBranch();
		unset($tree);
	EndDiv();
	
	StartDiv(array("style" => "width:30%;float:right;"));
		$tree = new CTree("tree3_", array("树枝open1", "树枝open2", "树枝open3"));
		$tree->StartBranch("树枝open1", "#");
			$tree->StartBranch("树枝open2");
				$tree->StartBranch("树枝open3");
					$tree->AddLeaf("树叶", "#");
					$tree->AddLeaf("树叶", "#");
				$tree->EndBranch();
			$tree->EndBranch();
			$tree->AddLeaf("树叶", "#");
		$tree->EndBranch();
		$tree->StartBranch("树枝");
			$tree->AddLeaf("树叶", "#");
		$tree->EndBranch();
		unset($tree);
	EndDiv();
	ClearFloat();
EndDiv();

StartDiv(array("class" => "fastweb_div_middle"));
	DisplayMenuV("liH");	
EndDiv();

StartDiv(array("class" => "fastweb_div_middle"));
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
	AddRollPlayImg(array("//www.baidu.com/img/bd_logo1.png","//www.baidu.com/img/bd_logo1.png","//www.baidu.com/img/bd_logo1.png"));
	$tab->EndTab();
	
	$tab->StartTab();
	//AddRollPlayImg(array(array("src" => "//www.baidu.com/img/bd_logo1.png", "href" => "#"), array("src" => "//www.baidu.com/img/bd_logo1.png", "href" => "#"), array("src" => "//www.baidu.com/img/bd_logo1.png", "href" => "#")));
	$tab->EndTab();
	
	unset($tab);
	ClearFloat();	
EndDiv();
/*
StartDiv(array("class" => "fastweb_div_middle"));
	$tab = new CTab(array("水平菜单", "新闻", "垂直菜单", "单选框", "多选框", "播放"), "200px", "fastweb_tab_box_tab_prefix");
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
*/

StartDiv(array("class" => "fastweb_div_middle"));
	//AddRollPlay(array(array("text" => "图片1", "src" => "./pic/bg1.jpg"),array("text" => "图片2", "src" => "./pic/bg2.jpg"),array("text" => "图片3", "src" => "./pic/bg3.jpg"),array("text" => "图片4", "src" => "./pic/bg4.jpg"),array("text" => "图片5", "src" => "./pic/bg5.jpg")));
	StartDiv(array("style" => "width:48%;float:left;"));
	
	$table = new CTable();
	$table->SetTdColor(array("fastweb_bgcolor_fcf", "fastweb_bgcolor_ffc", "fastweb_bgcolor_cff"));
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->StartTd();
	DisplayText("libai");
	$table->EndTd();
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->StartTd();
	DisplayText("libai");
	$table->EndTd();
	unset($table);
	
	EndDiv();
	
	StartDiv(array("style" => "width:48%;float:right;"));
	
	$table = new CTable();
	$table->SetTrMouse();
	$table->SetWidthArr(array("1%","1%","1%"));
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->StartTd();
	DisplayText("libai");
	$table->EndTd();
	unset($table);
	
	EndDiv();
	
ClearFloat();
EndDiv();


StartDiv(array("class" => "fastweb_div_middle"));
	$table = new CTable(10);
	$table->SetTdColor(array("fastweb_bgcolor_fcf", "fastweb_bgcolor_ffc", "fastweb_bgcolor_cff"));
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTh("标题");
	$table->AddTd("两行三列",2,3);
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("三行四列",3,4);
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("两行三列",2,3);
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("两行三列",2,3);
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	$table->AddTd("内容");
	unset($table);
EndDiv();

StartDiv(array("class" => "fastweb_div_middle"));
AddPageTurningBySize(isset($paramInfo["page"]) ? $paramInfo["page"] : 1, "//localhost/fastweb?page=");
AddPageTurning(5, 12, isset($paramInfo["page"]) ? $paramInfo["page"] : 8, "//localhost/fastweb?page=");
EndDiv();

EmptyLind(6);

StartDiv(array("class" => "fastweb_div_frame fastweb_pos_bottom fastweb_pos_fixed fastweb_opacity_50"));
	AddHtml("Bottom.html");
EndDiv();

StartDiv(array("class" => "fastweb_pos_right_middle fastweb_pos_fixed"));
	$closeBlock = new CCloseBlock();
	AddImg(array("src" => SITE_URL."image/fastweb.png"));
	unset($closeBlock);
EndDiv();

StartDiv(array("class" => "fastweb_pos_left_middle fastweb_pos_fixed"));
	$closeBlock = new CCloseBlock();
	AddImgWithLink(array("src" => SITE_URL."image/fastweb.png", "href" => "#"));
	unset($closeBlock);
EndDiv();

EndBody();
?>
