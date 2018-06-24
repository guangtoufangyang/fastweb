
<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/display.php';
DisplayHead();

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
				DisplayText("table1");
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
				DisplayText("table2");
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
				DisplayText("table3");
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
		
		
		
		EndDiv();
		ClearFloat();
	EndDiv();
EndDiv();

EndBody();
?>
