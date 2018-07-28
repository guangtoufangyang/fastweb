
<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_display.php';
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
				DisplayText("popup1");
			EndDiv();
		
			StartDiv(array("style" => "width:100%;"));
				$pop = new CPopup();
	
				$pop->PopupOpenControlLink("打开弹窗");
				
				$pop->StartPopup();
				
				
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
				
				
				$pop->EndPopup();
				
				
				$pop->SetPrefix("aaaaaaa");
				$pop->PopupOpenControlLink("打开弹窗1");
				
				$pop->StartPopup("200px","200px","600px","600px");
				$pop->PopupCloseControlLink("关闭弹窗");
				$pop->EndPopup();
				
				unset($pop);
				
			EndDiv();
			
			StartDiv(array("style" => "width:100%;"));
				$pop = new CPopupCloseBlock("CPopupCloseBlock_");				
				$pop->StartRelativePopup("300px", "300px", "", "0", "0", "");
						
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
				$pop->EndPopup();
				unset($pop);

			
			EndDiv();
			
			StartDiv(array("style" => "width:100%;"));

				$pop = new CPopupCloseBlock("CPopupCloseBlock1_");	
				$pop->StartFixedPopup("300px", "300px", "", "", "0", "0");
						
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
				$pop->EndPopup();

				
				unset($pop);
				
				
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
