<?php


/**
* 基础的html封装
* 
* 对基本的html标签的封装
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/

require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_module.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_data.php';


/**
* AddCrumb 
* 添加一个面包屑导航条
*
* @access
* @param mixed $data			导航参数
* @since 1.0
* @return
*/
function AddCrumb($data)
{
	StartSimpleDiv(array("class" => "fastweb_crumb"));
	
	$cnt = count($data);
	$max = $cnt - 1;
	for($i = 0; $i < $max; ++$i)
	{
		if(isset($data[$i]["href"]) && isset($data[$i]["text"]))
		{
			AddLink(array("href" => $data[$i]["href"]), $data[$i]["text"]);
			echo " &gt; ";
		}
		else
		{
			echo $data[$i]["text"]." &gt; ";
		}
	}
	
	if(isset($data[$max]["href"]) && isset($data[$max]["text"]))
	{
		AddLink(array("href" => $data[$max]["href"]), $data[$max]["text"]);
	}
	else
	{
		echo $data[$max]["text"];
	}
	
	EndDiv();
}


?>