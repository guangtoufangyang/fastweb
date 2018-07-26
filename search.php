
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
				//DisplayText("search1");
				AddTextByClass("AddSearchBar生成搜索框", 1, "fastweb_p_title_style1");
				AddTextByClass(CHINESE_BLANK.CHINESE_BLANK.'AddSearchBar($searchUrl, $btText, $name, $method, $placeholder, $style)用于生成一个搜索框，$searchUrl表示触发的url；$btText表示搜索按钮上的文字，为空则将展示一个放大镜按钮；$name表示提交后的参数名称；$method填写post或者get；$placeholder表示默认占位符；$style目前支持fastweb_search_bar_style1和fastweb_search_bar_style2。');
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
				AddTextByClass(CHINESE_BLANK.CHINESE_BLANK.'范例：AddSearchBar("", "")。');
				AddSearchBar("", "");
			EndDiv();
			StartDiv(array("style" => "width:100%;"));
				AddTextByClass(CHINESE_BLANK.CHINESE_BLANK.'范例：AddSearchBar("", "搜")。');
				AddSearchBar("", "搜");
			EndDiv();
			
			StartDiv(array("style" => "width:100%;"));
				AddTextByClass(CHINESE_BLANK.CHINESE_BLANK.'范例：AddSearchBar("", "", "name", "post", "搜索文字", "fastweb_search_bar_style2")。');
				AddSearchBar("", "", "name", "post", "搜索文字", "fastweb_search_bar_style2");
			EndDiv();
			StartDiv(array("style" => "width:100%;"));
				AddTextByClass(CHINESE_BLANK.CHINESE_BLANK.'范例：AddSearchBar("", "search", "name", "post", "搜索文字", "fastweb_search_bar_style2")。');
				AddSearchBar("", "search", "name", "post", "搜索文字", "fastweb_search_bar_style2");
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
