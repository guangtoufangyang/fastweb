
<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/display.php';
DisplayHead();
?>

<body topMargin=0 leftMargin=0 rightMargin=0>

<?php

DisplayTop();


StartDiv(array("class" => "fastweb_div_frame"));

	StartDiv(array("class" => "fastweb_div_middle"));
	StartDiv(array("style" => "width:40%;border:1px solid red;float:left;"));
	DisplayText("libai");
	EndDiv();
	
	StartDiv(array("style" => "width:40%;border:1px solid red;float:right;"));
	DisplayNew("fastweb");
	EndDiv();
	
	ClearFloat();
	
EndDiv();

StartDiv(array("class" => "fastweb_div_middle"));
	DisplayMenuH("liH");
	ClearFloat();	
EndDiv();

StartDiv(array("class" => "fastweb_div_middle"));
	DisplayMenuV("liH");	
EndDiv();


StartDiv(array("class" => "fastweb_div_middle"));
	StartDiv(array("stye" => "width:30%;"));
	
	EndDiv();
	
	StartDiv(array("class" => "width:60%;"));
	
	$tab = new CTab();
	$tab->StartTab("tab1");
	
	$tab->EndTab();
	
	$tab->StartTab("tab2");

	$tab->EndTab();
	
	$tab->StartTab("tab3");
	$tab->EndTab();
	unset($tab);
	ClearFloat();
	
	EndDiv();
	ClearFloat();	
EndDiv();

EndDiv();


StartDiv(array("class" => "fastweb_div_frame"));
	AddHtml("Bottom.html");
EndDiv();

?>

</body>
</html>
