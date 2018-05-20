
<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/display.php';
DisplayHead();
?>

<body topMargin=0 leftMargin=0 rightMargin=0>

<?php

DisplayTop();


$frame = new CDiv("fastweb_div_frame");
$divInside = new CDiv("fastweb_div_middle");
	$textDiv = new CDiv('', 'width:40%;border:1px solid red;float:left;');
	DisplayText("libai");
	unset($textDiv);
	
	$textDiv = new CDiv('', 'width:40%;border:1px solid red;float:right;');
	DisplayNew("fastweb");
	unset($textDiv);
	
	ClearFloat();
	
unset($divInside);
unset($frame);


$frame = new CDiv("fastweb_div_frame");
	AddHtml("Bottom.html");
unset($frame);

?>

</body>
</html>
