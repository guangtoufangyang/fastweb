<?php


/**
* 基础的html封装
* 
* 对基本的html标签的封装
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/

require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_basic.php';

$fastweb_table_class = array(
	0 => "fastweb_table_style1"
);

/**
* 表格类
*
* 生成表格
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CTable{
	private $mTd;						//当前行所属列
	private $mMaxTd;					//最大列数
	private $mLineNum;					//行数
	private $mTrMouseOn;				//鼠标覆盖行事件
	private $mTrMouseOut;				//鼠标移开行事件
	//private $mTdWidth;
	private $mTableEnd;					//table结束标识
	private $mTdWidArr;					//宽度数组
	private $mTdColorClass;				//背景色数组
	private $mTdColorClassCnt;			//背景色数组大小
	private $mLineTd;					//当前行的td计数大小
	private $mMultiTd;					//跨行跨列信息
	
	/**
	* __construct 
	* 构造函数
	*
	* @access public
	* @param mixed $max			表格列数
	* @param mixed $c 			table所属类
	* @param mixed $style		自定义的table样式
	* @param mixed $summary 	table的summay属性
	* @since 1.0
	* @return
	*/
	function __construct($max=3, $classNum = 0 /*= "fastweb_table_style1"*/, $style="", $summary=""){
		global $fastweb_table_class;
		$this->mTd = 0;
		$this->mTableEnd = 0;
		$this->mLineNum = 0;
		$this->mLineTd = 0;
		$this->mMultiTd = array();
		$this->mMaxTd = $max;
		echo '<table summary = "'.$summary.'" class="'.$fastweb_table_class[$classNum % count($fastweb_table_class)].'" style="'.$style.'">'.PHP_EOL ;
		if($this->mMaxTd <= 0)
		{
			$this->mMaxTd = 3;
		}
	}
	function __destruct(){
		
		if(0 != $this->mTd)
		{
			for(;$this->mTd < $this->mLineTd; ++$this->mTd){
				echo '<td></td>'.PHP_EOL ;
			}
		}
		$this->EndTr();
		$this->mTd = 0;
		
		if(!empty($this->mTdWidArr))
		{
			if($this->mTdColorClassCnt > 0)
			{
				$this->StartTr(array("class" => $this->mTdColorClass[$this->mLineNum % $this->mTdColorClassCnt]));
			}
			else
			{
				$this->StartTr();
			}
			/*宽度占位行，单独处理，否则不好处理td占多列问题*/
			foreach($this->mTdWidArr as $val)
			{
				echo '<td style="width:'.$val.';"></td>'.PHP_EOL;
			}
			$this->EndTr();
		}
		
		$this->TableTail();
	}
	/**
	* CalcLineTd 
	* 计算当前列需要多少个td计数
	*
	* @access private
	* @since 1.0
	* @return
	*/
	private function CalcLineTd()
	{
		$this->mLineTd = $this->mMaxTd;
		
		foreach($this->mMultiTd as $key => &$val)
		{
			--$val["rows"];
			if(0 == $val["rows"])
			{
				unset($this->mMultiTd[$key]);
			}
			else
			{
				$this->mLineTd = $this->mLineTd - $val["cols"];
			}
		}
		
	}
	
	/**
	* TableTail 
	* table结束
	*
	* @access private
	* @since 1.0
	* @return
	*/
	private function TableTail(){
	    if($this->mTableEnd == 0)
	    {
	        echo "</table>".PHP_EOL ;
	        $this->mTableEnd = 1;
	    }		
	}
	
	/**
	* SetTdColor 
	* 指定一个颜色数组,没一行数据将以此显示不同的颜色
	*
	* @access public
	* @param mixed $arrAttr			颜色数组
	* @since 1.0
	* @return
	*/
	function SetTdColor($arrAttr = array())
	{
		$this->mTdColorClass = $arrAttr;
		$this->mTdColorClassCnt = count($arrAttr);
	}
	
	/**
	* SetTrMouse 
	* 指定鼠标移动到tr和移开tr时的颜色
	*
	* @access public
	* @param mixed $colorOn			鼠标移到tr时的背景色
	* @param mixed $colorOut		鼠标离开tr时的背景色
	* @since 1.0
	* @return
	*/
	function SetTrMouse($colorOn = "#ffff66", $colorOut = "#d4e3e5")
	{
		$this->mTrMouseOn = ColorEventMouseOver($colorOn);
		$this->mTrMouseOut = ColorEventMouseOut($colorOut);
	}
	
	/**
	* StartTr 
	* 开始一行数据
	*
	* @access public
	* @param mixed $arrAttr			tr的属性数组
	* @since 1.0
	* @return
	*/
	function StartTr($arrAttr = array())
	{
		echo "<tr ".$this->mTrMouseOn." ".$this->mTrMouseOut;

		if(is_array($arrAttr))
		{
			if(array_key_exists("name", $arrAttr))
			{
				echo ' name="'.$arrAttr["name"].'"';
			}
			if(array_key_exists("id", $arrAttr))
			{
				echo ' id="'.$arrAttr["id"].'"';
			}
			if(array_key_exists("class", $arrAttr))
			{
				echo ' class="'.$arrAttr["class"].'"';
			}
		}

		echo ">".PHP_EOL ;
		++$this->mLineNum;
		$this->CalcLineTd();
	}
	
	/**
	* EndTr 
	* 结束一行数据
	*
	* @access public
	* @since 1.0
	* @return
	*/
	function EndTr()
	{
		echo "</tr>".PHP_EOL ;
	}
	
	/**
	* StartTr 
	* 开始一个单元格
	*
	* @access public
	* @param mixed $rows			单元格跨行数量
	* @param mixed $cols			单元格跨列数量
	* @since 1.0
	* @return
	*/
	function StartTd($rows = 1, $cols = 1)
	{
		if($this->mTd==0){
			if($this->mTdColorClassCnt > 0)
			{
				$this->StartTr(array("class" => $this->mTdColorClass[$this->mLineNum % $this->mTdColorClassCnt]));
			}
			else
			{
				$this->StartTr();
			}
			
		}
		echo "<td";
		if(($rows > 1) || $cols > 1)
		{
			echo ' rowspan="'.$rows.'" colspan="'.$cols.'"';
		}
		echo ">";
		
		$this->mLineTd = $this->mLineTd - $cols + 1;
		array_push($this->mMultiTd, array("rows" => $rows, "cols" => $cols));		
	}
	
	/**
	* EndTd 
	* 结束一个单元格
	*
	* @access public
	* @since 1.0
	* @return
	*/
	function EndTd()
	{
		echo "</td>".PHP_EOL ;
		++$this->mTd;
		if($this->mTd >= $this->mLineTd){
			$this->EndTr();
			$this->mTd = 0;
		}
	}
	
	/**
	* StartTh 
	* 开始一个标题行
	*
	* @access public
	* @param mixed $rows			单元格跨行数量
	* @param mixed $cols			单元格跨列数量
	* @since 1.0
	* @return
	*/
	function StartTh($rows = 1, $cols = 1)
	{
		if($this->mTd==0){
			$this->StartTr();
		}
		echo "<th ";
	
		if(($rows > 1) || $cols > 1)
		{
			echo ' rowspan="'.$rows.'" colspan="'.$cols.'"';
		}
		$this->mLineTd = $this->mLineTd - $cols + 1;
		
		array_push($this->mMultiTd, array("rows" => $rows, "cols" => $cols));
		
		echo ">";
	}
	
	/**
	* EndTh 
	* 结束标题行
	*
	* @access public
	* @since 1.0
	* @return
	*/
	function EndTh()
	{
		echo "</th>".PHP_EOL ;
		++$this->mTd;
		if($this->mTd >= $this->mLineTd){
			$this->EndTr();
			$this->mTd = 0;
		}
	}
	
	/**
	* AddTh 
	* 添加一格标题
	*
	* @access public
	* @param mixed $text			单元格文字
	* @since 1.0
	* @return
	*/
	function AddTh($text)
	{
		$this->StartTh();
		echo $text;
		$this->EndTh();
	}
	
	/**
	* AddTh 
	* 添加一格数据
	*
	* @access public
	* @param mixed $text			单元格文字
	* @since 1.0
	* @return
	*/
	function AddTd($text, $rows = 1, $cols = 1)
	{
		$this->StartTd($rows, $cols);
		echo $text;
		$this->EndTd();
	}
	
	/**
	* AddCaption 
	* 添加caption信息
	*
	* @access public
	* @param mixed $cap			文字
	* @since 1.0
	* @return
	*/
	function AddCaption($cap){
		echo '<caption>'.$cap.'</caption>'.PHP_EOL ;
		$this->mTd = 0;
	}
	
	/**
	* SetWidthArr 
	* 设置单元格宽度
	*
	* @access public
	* @param mixed $widthArr	宽度数组,必须与构造函数中的列数相同
	* @since 1.0
	* @return
	*/
	function SetWidthArr($widthArr){
		if(!is_array($widthArr))
		{
			return;
		}
		
		if($this->mMaxTd != count($widthArr))
		{
			return;
		}
		
		$this->mTdWidArr = $widthArr;
	}

}



?>