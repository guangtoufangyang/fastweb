
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
			AddText(CHINESE_BLANK.CHINESE_BLANK.'AddText($text, $pos = 0, $fontNum = 0, $fontSize = 24, $lineDouble = 1.2)用于添加一段文字,$text表示文字内容,$pos参数表示居左(0)|居中(1)|居右(2),$fontNum表示字体编号,$foneSize表示字体大小,$lineDouble表示行高与字号的倍数。', 0, 2, 24, 1.4);
			StartDiv(array("style" => "width:100%;"));
				AddText("春江花月夜", 1, 0, 50, 2);
				AddText("【作者】张若虚 【朝代】唐", 1, 1, 30, 1.5);
				AddText("春江潮水连海平，海上明月共潮生。", 2, 2, 30);
				AddText("滟滟随波千万里，何处春江无月明！", 1, 3, 20);
				AddText("江流宛转绕芳甸，月照花林皆似霰；", 0, 4, 30, 5);
				AddText("空里流霜不觉飞，汀上白沙看不见。", 1, 5, 30, 1);
				AddText("江天一色无纤尘，皎皎空中孤月轮。", 2, 6, 30, 1.3);
				AddText("江畔何人初见月？江月何年初照人？", 1, 7, 30, 1.3);
				AddText("人生代代无穷已，江月年年只相似。", 0, 8, 30, 1.3);
				AddText("不知江月待何人，但见长江送流水。", 1, 9, 30, 1.3);
				AddText("白云一片去悠悠，青枫浦上不胜愁。", 2, 10, 30, 1.3);
				AddText("谁家今夜扁舟子？何处相思明月楼？", 1, 11, 30, 1.3);
				AddText("可怜楼上月徘徊，应照离人妆镜台。", 0, 12, 30, 1.3);
				AddText("玉户帘中卷不去，捣衣砧上拂还来。", 1, 13, 30, 1.3);
				AddText("此时相望不相闻，愿逐月华流照君。", 2, 14, 30, 1.3);
				AddText("鸿雁长飞光不度，鱼龙潜跃水成文。", 1, 15, 30, 1.3);
				AddText("昨夜闲潭梦落花，可怜春半不还家。", 0, 16, 30, 1.3);
				AddText("江水流春去欲尽，江潭落月复西斜。", 1, 17, 30, 1.3);
				AddText("斜月沉沉藏海雾，碣石潇湘无限路。", 2, 18, 30, 1.3);
				AddText("不知乘月几人归，落月摇情满江树。", 1, 22, 30, 1.3);
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
