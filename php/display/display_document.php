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
* AddDoc 
* 添加一段文章
*
* @access
* @param mixed $data		文章参数
* 举例:
*	$jsonData = '{"title":"静夜思", "author":"李白", "paragraph":["床前明月光，", "疑是地上霜，", "举头望明月，", "低头思故乡。"]}';
*	$arrData = json_decode($jsonData, true);
*	AddDoc($arrData);
* @since 1.0
* @return
*/
function AddDoc($data)
{
	$oDoc = new CDocument();
	if(isset($data["title"]))
	{
		$oDoc->AddTitle($data["title"]);
	}
	
	if(isset($data["author"]))
	{
		$oDoc->AddAuthor($data["author"], 2);
	}
	
	if(isset($data["paragraph"]))
	{
		foreach ($data["paragraph"] as $val)
		{
			$oDoc->StartParagraph();
			AddSpan(array(), "&#12288;&#12288;".$val);
			$oDoc->EndParagraph();
		}
	}
	unset($oDoc);
}

?>