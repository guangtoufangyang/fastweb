
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
				DisplayText("popup1");
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
				$pop = new CPopup();
	
				$pop->PopupOpenControlLink("打开弹窗");
				
				$pop->PopupStart();
				
				
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
				$pop->PopupCloseControlLink("关闭弹窗");
				$table->EndTd();
				unset($table);
				
				
				$pop->PopupEnd();
				
				
				$pop->SetPrefix("aaaaaaa");
				$pop->PopupOpenControlLink("打开弹窗1");
				
				$pop->PopupStart("200px","200px","600px","600px");
				$pop->PopupCloseControlLink("关闭弹窗");
				$pop->PopupEnd();
				
			EndDiv();
			
			StartDiv(array("class" => "fastweb_align_left", "style" => "width:100%;"));
				StartFieldset(array("class" => "fastweb_fieldset_style1"),  "页面代码");
				DisplayFile(basename(__FILE__), "</br>");
				EndFieldset();
			EndDiv();
			
		EndDiv();
		ClearFloat();
	EndDiv();
EndDiv();

Repeat('</br>', 6);
StartDiv(array("class" => "fastweb_div_frame fastweb_pos_bottom fastweb_pos_fixed fastweb_opacity_80"));
	AddHtml("Bottom.html");
EndDiv();

EndBody();
?>
