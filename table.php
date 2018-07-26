
<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/display.php';
DisplayHead($defaultHeadConfig);

ParamInfo($paramInfo);
StartBody();

DisplayTop();

StartDiv(array("class" => "fastweb_div_frame"));
	StartDiv(array("class" => "fastweb_div_middle"));
		StartDiv(array("style" => "width:23%;float:left;"));
			DisplayFastwebFunclist("基本功能");
		EndDiv();
		
		StartDiv(array("style" => "width:73%;float:right;"));
			StartDiv(array("style" => "width:100%;"));
				//DisplayText("table1");
				AddTextByClass("CTable用于创建表格", 1, "fastweb_p_title_style1");
				AddTextByClass(CHINESE_BLANK.CHINESE_BLANK.'new CTable($max, $c, $style, $summary)创建一个表格，$max为表格列数，$c为table的类，$style为自定义的表格样式，$summary为表格的summary属性。');
				
				AddTextByClass("table使用方法(1)", 1, "fastweb_p_title_style1");
				AddTextByClass(CHINESE_BLANK.CHINESE_BLANK.'CTable::SetTdColor(array());指定每一行的背景颜色');
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
			
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
			$table->AddTd("内容");
			$table->AddTd("内容");
			$table->AddTd("内容");
			$table->AddTd("内容");
			$table->AddTd("内容内容内容内容内容内容内容");
			$table->AddTd("内容");
			$table->AddTd("内容");
			$table->AddTd("内容");
			$table->AddTd("内容");
			unset($table);
			
			EndDiv();
			
			StartDiv(array("style" => "width:100%;"));
				//DisplayText("table2");
				AddTextByClass("table使用方法(2)", 1, "fastweb_p_title_style1");
				AddTextByClass(CHINESE_BLANK.CHINESE_BLANK.'CTable::SetTrMouse();设置鼠标滑过/离开时的行背景色');
				AddTextByClass(CHINESE_BLANK.CHINESE_BLANK.'CTable::SetWidthArr();设置每列的宽度');
			EndDiv();
			
			StartDiv(array("style" => "width:100%;"));
			
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
			$table->AddTd("内容内容内容内容内容内容内容");
			$table->AddTd("内容");
			unset($table);
			
			EndDiv();

			StartDiv(array("style" => "width:100%;"));
				//DisplayText("table3");
				AddTextByClass("table使用方法(3)", 1, "fastweb_p_title_style1");
				AddTextByClass(CHINESE_BLANK.CHINESE_BLANK.'CTable::AddTd();可指定占多行多列');
			EndDiv();

			StartDiv(array("style" => "width:100%;"));
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
