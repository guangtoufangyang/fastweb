<?php

$dataTable = array(
	"libai" => array("title" => "静夜思", "author" => "李白", "paragraph" => array("床前明月光，", "疑是地上霜，", "举头望明月，", "低头思故乡。")),
	"fastweb" => array("title" => "title", "info" => array(array("link" => "#", "text" => "fastweb"), array("link" => "#", "text" => "fastweb"),array("link" => "#", "text" => "fastweb"),array("link" => "#", "text" => "fastweb"),array("link" => "#", "text" => "fastweb"),array("link" => "#", "text" => "fastweb"))),
	
);


function DataGetByKey($k, &$data)
{
	global $dataTable;
	if(array_key_exists($k, $dataTable))
	{
		$data = $dataTable[$k];
		return true;
	}
	
	return false;
}

?>
