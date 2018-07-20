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
* 弹窗类
*
* 显示一个弹窗
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CPopup{
	private $idPrefix;
	/**
	* __construct 
	* 构造函数
	*
	* @access public
	* @param mixed $prefix	弹出窗口的div的id前缀,不同的弹窗必须设置不同的前缀
	* @since 1.0
	* @return
	*/
	public function __construct($prefix = "fastweb_class_popup_"){
		$this->idPrefix = $prefix;
	}
	
	/**
	* SetPrefix 
	* 设置弹窗的id前缀
	*
	* @access public
	* @param mixed $prefix	弹出窗口的div的id前缀,不同的弹窗必须设置不同的前缀
	* @since 1.0
	* @return
	*/
	public function SetPrefix($prefix = "fastweb_class_popup_"){
		$this->idPrefix = $prefix;
	}
	
	/**
	* PopupOpenControlLink 
	* 生成一个控制打开弹窗的链接
	*
	* @access public
	* @param mixed $text	链接的文字
	* @param mixed $class	链接的样式类
	* @since 1.0
	* @return
	*/
	public function PopupOpenControlLink($text, $class = "fastweb_popup_a_style")
	{
		$arr = array();
		$arr["href"] = "javascript:void(0)";
		//必须增加"_self"属性，否则可能同时打开一个空白的新窗口
		$arr["target"] = "_self";
		$arr["class"] = $class;
		$arr["onclick"] = "document.getElementById('".$this->idPrefix."light').style.display='block';document.getElementById('".$this->idPrefix."fade').style.display='block'";
		AddLink($arr, $text);
		
		StartDiv(array("id" => $this->idPrefix."fade", "class" => "fastweb_popup_fade_style", "style" => "display:none;"));
		EndDiv();
	}
	
	/**
	* PopupCloseControlLink 
	* 生成一个控制关闭弹窗的链接
	*
	* @access public
	* @param mixed $text	链接的文字
	* @param mixed $class	链接的样式类
	* @since 1.0
	* @return
	*/
	public function PopupCloseControlLink($text, $class = "fastweb_popup_a_style")
	{
		$arr = array();
		$arr["href"] = "javascript:void(0)";
		$arr["target"] = "_self";
		$arr["class"] = $class;
		$arr["onclick"] = "document.getElementById('".$this->idPrefix."light').style.display='none';document.getElementById('".$this->idPrefix."fade').style.display='none'";
		AddLink($arr, $text);
	}
	
	/**
	* StartPopup 
	* 弹窗开始
	*
	* @access public
	* @param mixed $width	弹窗宽度
	* @param mixed $height	弹窗高度
	* @param mixed $left	弹窗左边距
	* @param mixed $top		弹窗上边距
	* @param mixed $right	弹窗右边距
	* @param mixed $bottom	弹窗下边距
	* @since 1.0
	* @return
	*/
	public function StartPopup($width = "600px", $height = "400px", $left = "", $top = "", $right = "", $bottom = "")
	{
		$arr = array();
		$arr["id"] = $this->idPrefix."light";
		$arr["class"] = "fastweb_popup_light_style";
		$arr["style"] = "width:".$width.";height:".$height.";left:".$left.";top:".$top.";right:".$right.";bottom:".$bottom.";";
		StartDiv($arr);
	}
	
	/**
	* EndPopup 
	* 弹窗结束
	*
	* @access public
	* @since 1.0
	* @return
	*/
	public function EndPopup()
	{
		EndDiv();
	}
	
	public function __destruct(){
		
	}
}


?>