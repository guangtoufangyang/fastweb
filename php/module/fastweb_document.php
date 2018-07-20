<?php


/**
* 基础的html封装
* 
* 对基本的html标签的封装
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/

require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_basic.php';


/**
* 文章类
*
* 
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CDocument
{
	private $paraArr;				//记录段落属性的数组
	function __construct()
	{
		$this->paraArr = array();
	}
	
	function __destruct()
	{
	}
	/**
	* SetPara 
	* 设置段落的文字对齐方式及段落的格式类
	*
	* @access private
	* @param mixed $pos		对齐方式:0-左对齐,1-居中,2-右对齐
	* @param mixed $c 		段落格式的类
	* @since 1.0
	* @return
	*/
	private function SetPara($pos , $c)
	{
		array_splice($this->paraArr, 0, count($this->paraArr));
		if($pos == 1)
		{
			$this->paraArr["style"] = "text-align:left;";
		}
		else if($pos == 2)
		{
			$this->paraArr["style"] = "text-align:center;";
		}
		else if($pos == 3)
		{
			$this->paraArr["style"] = "text-align:right;";
		}
		$this->paraArr["class"] = $c;
	}
	/**
	* AddTitle 
	* 添加一段标题
	*
	* @access public
	* @param mixed $t		标题文字
	* @param mixed $pos		对齐方式:0-左对齐,1-居中,2-右对齐
	* @param mixed $c 		段落格式的类
	* @since 1.0
	* @return
	*/
	function AddTitle($t, $pos = 2, $c = 'fastweb_p_title_style1')
	{
		$this->SetPara($pos, $c);
		StartDiv($this->paraArr);
		AddSpan(array(), $t);
		EndDiv();
	}
	/**
	* AddAuthor 
	* 添加一段作者信息
	*
	* @access public
	* @param mixed $t		作者信息
	* @param mixed $pos		对齐方式:0-左对齐,1-居中,2-右对齐
	* @param mixed $c 		段落格式的类
	* @since 1.0
	* @return
	*/
	function AddAuthor($t, $pos = 3, $c = 'fastweb_p_author_style1')
	{
		$this->SetPara($pos, $c);
		StartDiv($this->paraArr);
		AddSpan(array(), $t);
		EndDiv();
	}
	/**
	* StartParagraph 
	* 开始一个段落
	*
	* @access public
	* @param mixed $pos		对齐方式:0-左对齐,1-居中,2-右对齐
	* @param mixed $c 		段落格式的类
	* @since 1.0
	* @return
	*/
	function StartParagraph($pos = 1, $c = 'fastweb_p_text_style1')
	{
		$this->SetPara($pos, $c);
		StartDiv($this->paraArr);
	}
	/**
	* EndParagraph 
	* 段落结束
	*
	* @access public
	* @since 1.0
	* @return
	*/
	function EndParagraph()
	{
		EndDiv();
	}
}


?>