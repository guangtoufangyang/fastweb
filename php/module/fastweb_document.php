<?php


/**
* 基础的html封装
* 
* 对基本的html标签的封装
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/

require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_basic.php';

$fastweb_font = array(
	"'STHeiti',华文黑体",
	"'STKaiti',华文楷体",
	"'STSong',华文宋体",
	"'STFangsong',华文仿宋",
	"'SimHei',黑体",
	"'SimSun',宋体",
	"'NSimSun',新宋体",
	"'FangSong',仿宋",
	"'KaiTi',楷体",
	"'FangSong_GB2312',仿宋_GB2312",
	"'KaiTi_GB2312',楷体_GB2312",
	"'Microsoft JhengHei',微软正黑体",
	"'Microsoft YaHei',微软雅黑体",
	"'LiSu',隶书",
	"'YouYuan',幼圆",
	"'STXihei',华文细黑",
	"'STKaiti',华文楷体",
	"'STSong',华文宋体",
	"'STZhongsong',华文中宋",
	"'STFangsong',华文仿宋",
	"'FZShuTi',方正舒体",
	"'FZYaoti',方正姚体",
	"'STCaiyun',华文彩云",
	"'STHupo',华文琥珀",
	"'STLiti',华文隶书",
	"'STXingkai',华文行楷",
	"'STXinwei',华文新魏");
/**
* AddText 
* 添加段落
*
* @access
* @param mixed $text		文本内容
* @param mixed $pos			对齐方式:0-左对齐,1-居中,2-右对齐
* @param mixed $fontNum		字体编号
* @param mixed $fontSize	字体大小
* @param mixed $lineDouble	行高倍数
* @since 1.0
* @return
*/
function AddText($text, $pos = 0, $fontNum = 0, $fontSize = 24, $lineDouble = 1.2)
{
	global $fastweb_font;
	if(($fontNum >= count($fastweb_font)) || ($fontNum < 0))
	{
		$fontNum = 0;
	}
	
	$textAlign = 'text-align:left;';
	if(1 == $pos)
	{
		$textAlign = 'text-align:center;';
	}
	else if(2 == $pos)
	{
		$textAlign = 'text-align:right;';
	}
	//StartSimpleDiv
	StartP(array('style' => 'font-family:'.$fastweb_font[$fontNum].';font-size:'.$fontSize.'px;line-height:'.($fontSize * $lineDouble).'px;'.$textAlign.'width:100%;'));
	echo $text;
	EndP();
}

function AddTextByClass($text, $c = 'fastweb_p_text_style1')
{
	StartP(array("class" => $c));
	echo $text;
	EndP();
}

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