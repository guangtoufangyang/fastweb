<?php


/**
* 基础的html封装
* 
* 对基本的html标签的封装
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/

require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_module.php';

/**
* AddNew 
* 生成一个新闻列表
*
* @access
* @param mixed $data			新闻参数
* @param mixed $titleClass	 	标题栏的类属性
* @param mixed $contentClass	列表栏的类属性
* @since 1.0
* @return
*/
function AddNew($data, $titleClass = "fastweb_new_module_title", $contentClass = "fastweb_new_module_content")
{
	StartSimpleDiv();
		if(!empty($data["title"]))
		StartDiv(array("class" => $titleClass));
		AddSpan(array(), $data["title"]);
		EndDiv();

		StartDiv(array("class" => $contentClass));
		
		foreach($data["info"] as $val){
			AddLineLink(array("href" => $val["link"]), $val["text"]);
		}
		EndDiv();
	EndDiv();
}

/**
* AddNew2 
* 生成一个新闻列表
*
* @access
* @param mixed $data			新闻参数
* @param mixed $perLineCnt		每列的数据条数
* @param mixed $titleClass	 	标题栏的类属性
* @param mixed $contentClass	列表栏的类属性
* @since 1.0
* @return
*/
function AddNew2($data, $perLineCnt = 1, $titleClass = "fastweb_new_module_title", $contentClass = "fastweb_new_module_content")
{
	StartSimpleDiv();
		if(!empty($data["title"]))
		StartDiv(array("class" => $titleClass));
		AddSpan(array(), $data["title"]);
		EndDiv();

		StartDiv(array("class" => $contentClass));
		
		$width = 100 / $perLineCnt - 1;
		foreach($data["info"] as $val){
			StartSimpleDiv(array("class" => "fastweb_align_center", "style" => "float:left;width:".$width."%;"));
			AddLineLink(array("href" => $val["link"]), $val["text"]);
			EndDiv();
		}
		ClearFloat();
		EndDiv();
	EndDiv();
}

/**
* AddTag 
* 生成一个标签栏目
*
* @access
* @param mixed $data			标签参数
* @param mixed $titleClass	 	标题栏的类属性
* @param mixed $contentClass	列表栏的类属性
* @param mixed $contentClass	标签的类属性
* @since 1.0
* @return
*/
function AddTag($data, $titleClass = "fastweb_tag_module_title", $contentClass = "fastweb_tag_module_content", $tagClass = "fastweb_tag_module_tag")
{
	StartSimpleDiv();
		if(!empty($data["title"]))
		StartDiv(array("class" => $titleClass));
		AddSpan(array(), $data["title"]);
		EndDiv();

		StartDiv(array("class" => $contentClass));
		foreach($data["info"] as $val){
			StartDiv(array("class" => $tagClass));
			AddLineLink(array("href" => $val["link"]), $val["text"]);
			EndDiv();
		}
		ClearFloat();
		EndDiv();
	EndDiv();
}


?>