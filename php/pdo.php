<?php

$dataTable = array(
	"libai" => array("title" => "静夜思", "author" => "李白", "paragraph" => array("床前明月光，", "疑是地上霜，", "举头望明月，", "低头思故乡。")),
	"fastweb" => array("title" => "title", "info" => array(array("link" => "#", "text" => "fastweb"), array("link" => "#", "text" => "fastweb"),array("link" => "#", "text" => "fastweb"),array("link" => "#", "text" => "fastweb"),array("link" => "#", "text" => "fastweb"),array("link" => "#", "text" => "fastweb"))),
	"liH" => array(array("name" => "菜单1", "list" => array(array("name" => "子菜单11", "link" => "#"),array("name" => "子菜单12", "link" => "#"),array("name" => "子菜单13", "link" => "#"))),array("name" => "菜单2", "list" => array(array("name" => "子菜单21", "link" => "#"),array("name" => "子菜单22", "link" => "#"),array("name" => "子菜单23", "link" => "#"))),array("name" => "菜单3", "list" => array(array("name" => "子菜单31", "link" => "#"),array("name" => "子菜单32", "link" => "#"),array("name" => "子菜单33", "link" => "#")))),
	
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
