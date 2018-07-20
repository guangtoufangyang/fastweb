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
* 关闭模块
*
* 制作一个初始为显示状态的可关闭模块
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CPopupCloseBlock{
	private $idPrefix;
	
	/**
	* __construct 
	* 构造函数
	*
	* @access public
	* @param mixed $prefix			模块的id前缀,一个页面存在多个CPopupCloseBlock时需要指定不同值
	* @since 1.0
	* @return
	*/
	public function __construct($prefix = "fastweb_close_block_popup_"){
		$this->idPrefix = $prefix;
	}
	
	/**
	* SetPrefix 
	* 设置模块id前缀
	*
	* @access public
	* @param mixed $prefix			模块的id前缀,一个页面存在多个CPopupCloseBlock时需要指定不同值
	* @since 1.0
	* @return
	*/
	public function SetPrefix($prefix = "fastweb_close_block_popup_"){
		$this->idPrefix = $prefix;
	}
	
	/**
	* PopupCloseControlLink 
	* 添加关闭模块的控制链接
	*
	* @access public
	* @param mixed $text			链接文字
	* @param mixed $class			链接样式
	* @since 1.0
	* @return
	*/
	public function PopupCloseControlLink($text, $class = "fastweb_popup_a_style")
	{
		$arr = array();
		$arr["href"] = "javascript:void(0)";
		$arr["target"] = "_self";
		$arr["class"] = $class;
		$arr["onclick"] = "document.getElementById('".$this->idPrefix."light').style.display='none';";
		AddLink($arr, $text);
	}
	
	/**
	* StartPopup 
	* 开始一个模块
	*
	* @access private
	* @param mixed $width			模块宽度
	* @param mixed $height			模块高度
	* @param mixed $left			模块左边距
	* @param mixed $top				模块上边距
	* @param mixed $right			模块右边距
	* @param mixed $bottom			模块下边距
	* @param mixed $pos				模块定位方式
	* @since 1.0
	* @return
	*/
	private function StartPopup($width = "600px", $height = "400px", $left = "", $top = "", $right = "", $bottom = "", $pos = "")
	{
		$arr = array();
		$arr["id"] = $this->idPrefix."light";
		$arr["class"] = "fastweb_close_block_pop";
		
		$arr["style"] = "width:".$width.";height:".$height.";left:".$left.";top:".$top.";right:".$right.";bottom:".$bottom.";position:".$pos.";";
		StartDiv($arr);
	}
	
	/**
	* StartFixedPopup 
	* 开始一个绝对位置的模块
	*
	* @access public
	* @param mixed $width			模块宽度
	* @param mixed $height			模块高度
	* @param mixed $left			模块左边距
	* @param mixed $top				模块上边距
	* @param mixed $right			模块右边距
	* @param mixed $bottom			模块下边距
	* @since 1.0
	* @return
	*/
	public function StartFixedPopup($width = "600px", $height = "400px", $left = "", $top = "", $right = "", $bottom = "")
	{
		$this->StartPopup($width, $height, $left, $top, $right, $bottom, "fixed");
	}
	
	/**
	* StartRelativePopup 
	* 开始一个相对位置的模块
	*
	* @access public
	* @param mixed $width			模块宽度
	* @param mixed $height			模块高度
	* @param mixed $left			模块左边距
	* @param mixed $top				模块上边距
	* @param mixed $right			模块右边距
	* @param mixed $bottom			模块下边距
	* @since 1.0
	* @return
	*/
	public function StartRelativePopup($width = "600px", $height = "400px", $left = "", $top = "", $right = "", $bottom = "")
	{
		$this->StartPopup($width, $height, $left, $top, $right, $bottom, "relative");
	}
	
	/**
	* StartRelativePopup 
	* 结束一个模块
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


/**
* 点击关闭类
*
* 生成一个点击关闭模块
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CCloseBlock{
	public function __construct(){
		AddCheckBox(array("class" => "fastweb_close_block"));
		StartDiv();
	}
	public function __destruct(){
		EndDiv();
	}
}


/**
* 点击关闭类
*
* 此模块生成的模块,点击模块区域任意位置均会关闭
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CCloseBlockHold{
	public function __construct(){
		StartLabel(array("class" => "fastweb_close_block_hold"));
		AddCheckBox(array("class" => "fastweb_close_block_checkbox"));
		StartDiv();
	}
	public function __destruct(){
		EndDiv();
		EndLabel();
	}
}

?>