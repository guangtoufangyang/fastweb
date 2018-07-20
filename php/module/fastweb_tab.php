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
* 选项卡样式类
*
* 生成选项卡结构
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CTab
{
	private $iMax;					//tab编号最大值
	private $iCur;					//tab序号
	private $iHeight;				//tab区的高度
	private $iOffset;				//tab标签定位偏移
	private $sTabPrefix;			//每个tab的id前缀
	private $arrTabList;			//tab标签数组
	
	/**
	* __construct 
	* 构造函数
	*
	* @access public
	* @param mixed $arr			包含每个选项卡名称是数组
	* @param mixed $height 		选项卡的高度
	* @param mixed $sTabPrefix	每个选项卡的id前缀(一个页面包含多个Ctab时需要指定不同的前缀)
	* @param mixed $offset 		选项卡名称的占位偏移
	* @since 1.0
	* @return
	*/
	function __construct($arr, $height = "400px", $sTabPrefix = "fastweb_tab_box_tab", $offset = 0)
	{
		$this->iMax = count($arr);
		$this->iCur = 0;
		$this->sTabPrefix = $sTabPrefix;
		$this->iHeight = $height;
		$this->iOffset = $offset;
		$this->arrTabList = $arr;
		$this->AddTabList($this->arrTabList);
	}
	
	function __destruct()
	{
		EndDiv();
		StartUl(array("id" => "fastweb_tab_box_nav"));
		for($i = 1; $i<= $this->iMax; ++$i)
		{
			StartLi(array("style" => "width:".(100/$this->iMax - $this->iOffset)."%;"));
			AddLink(array("href" => "#".$this->sTabPrefix.(string)$i, "target" => "_self"), $this->arrTabList[$i - 1]);
			EndLi();
		}
		EndUl();
		EndDiv();
		$this->TabCss();
	}
	
	/**
	* TabCss 
	* 生成选项卡对应的css样式
	*
	* @access private
	* @since 1.0
	* @return
	*/
	private function TabCss()
	{
		echo '<style type="text/css">';
		for($i = 1; $i< $this->iMax; ++$i)
		{
			echo '#'.$this->sTabPrefix.$i.',';
		}
		echo '#'.$this->sTabPrefix.$this->iMax;
		echo '{width:100%;display:block;}';
		
		echo '</style>';
	}
	
	/**
	* AddTabList 
	* 生成选项卡名称列表
	*
	* @access private
	* @param mixed $arr			包含每个选项卡名称是数组
	* @since 1.0
	* @return
	*/
	private function AddTabList($arr)
	{
		StartDiv(array("id" => "fastweb_tab_box", "style" => "height:".$this->iHeight.";"));
		/*StartUl(array("id" => "fastweb_tab_box_nav"));
		for($i = 1; $i<= $this->id; ++$i)
		{
			StartLi();
			AddLink(array("href" => "#".$this->sTabPrefix.(string)$i, "target" => "_self"), $this->arrTabList[$i - 1]);
			EndLi();
		}
		EndUl();*/
		StartDiv(array("id" => "fastweb_tab_box_content", "style" => "height:".$this->iHeight.";"));
	}
	
	/**
	* StartTab 
	* 开始一个选项卡
	*
	* @access public
	* @since 1.0
	* @return
	*/
	function StartTab()
	{
		StartDiv(array("id" => $this->sTabPrefix.(string)$this->iCur, "style" => "height:".$this->iHeight.";"));
		++$this->iCur;
	}
	
	/**
	* StartTab 
	* 结束一个选项卡
	*
	* @access public
	* @since 1.0
	* @return
	*/
	function EndTab()
	{
		EndDiv();
	}
	
}

/**
* 选项卡样式类
*
* 生成选项卡结构
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CTabByJs
{
	private $iMax;					//tab编号最大值
	private $iCur;					//tab序号
	private $iHeight;				//tab区的高度
	private $iOffset;				//tab标签定位偏移
	private $sTabPrefix;			//每个tab的id前缀
	private $arrTabList;			//tab标签数组
	private $iMenuPos;				//tab标签位置，1:上，2:下，3:左，4:右
	
	/**
	* __construct 
	* 构造函数
	*
	* @access public
	* @param mixed $arr			包含每个选项卡名称是数组
	* @param mixed $height 		选项卡的高度
	* @param mixed $sTabPrefix	每个选项卡的id前缀(一个页面包含多个Ctab时需要指定不同的前缀)
	* @param mixed $offset 		选项卡名称的占位偏移
	* @since 1.0
	* @return
	*/
	function __construct($arr, $height = "400px", $menuPos = 1, $sTabPrefix = "fastweb_tab_box_by_js", $offset = 0)
	{
		$this->iMax = count($arr);
		$this->iCur = 0;
		$this->sTabPrefix = $sTabPrefix;
		$this->iHeight = $height;
		$this->iOffset = $offset;
		$this->arrTabList = $arr;
		if(($menuPos < 1) || ($menuPos > 4 ))
		{
			$this->iMenuPos = 1;
		}
		else
		{
			$this->iMenuPos = $menuPos;
		}
		
		StartDiv(array("id" => $sTabPrefix));
		if(1 == $this->iMenuPos)
		{
			StartSimpleDiv(array());
		}
		else if(3 == $this->iMenuPos)
		{
			StartSimpleDiv(array("style" => "float:left;width:15%;"));
		}
		
		if((1 == $this->iMenuPos) || (3 == $this->iMenuPos))
		{
			StartUl(array("id" => $sTabPrefix."_list", "class" => $sTabPrefix."_ul"));
			
			foreach ($arr as $key => $val)
			{
				if(0 == $key)
				{
					AddLi(array("class" => $sTabPrefix."_li active"), $val);
				}
				else
				{
					AddLi(array("class" => $sTabPrefix."_li"), $val);
				}
			}
			EndUl();
			EndDiv();
		}
		
		if(1 == $this->iMenuPos)
		{
			StartSimpleDiv(array());
		}
		else if(2 == $this->iMenuPos)
		{
			StartSimpleDiv(array());
		}
		else if(3 == $this->iMenuPos)
		{
			StartSimpleDiv(array("style" => "float:right;width:85%;"));
		}
		else if(4 == $this->iMenuPos)
		{
			StartSimpleDiv(array("style" => "float:left;width:85%;"));
		}
		
	}
	
	function __destruct()
	{
		EndDiv();
		
		if(2 == $this->iMenuPos)
		{
			StartSimpleDiv(array());
		}
		else if(4 == $this->iMenuPos)
		{
			StartSimpleDiv(array("style" => "float:right;width:15%;"));
		}
		
		if((2 == $this->iMenuPos) || (4 == $this->iMenuPos))
		{
			StartUl(array("id" => $this->sTabPrefix."_list", "class" => $this->sTabPrefix."_ul"));
			
			foreach ($this->arrTabList as $key => $val)
			{
				if(0 == $key)
				{
					AddLi(array("class" => $this->sTabPrefix."_li active"), $val);
				}
				else
				{
					AddLi(array("class" => $this->sTabPrefix."_li"), $val);
				}
			}
			EndUl();
			EndDiv();
		}
		
		
		EndDiv();
		$this->TabCss();
		$this->TabJs();
	}
	
	
	/**
	* TabCss 
	* 生成选项卡对应的Js样式
	*
	* @access private
	* @since 1.0
	* @return
	*/
	private function TabJs()
	{
		echo '<script>'.PHP_EOL ;
		echo '// JS实现选项卡切换'.PHP_EOL ;
		echo '//获取tabs下的所有div'.PHP_EOL ;
		//echo 'var tabs = document.getElementById("'.$this->sTabPrefix.'");'.PHP_EOL ;
		echo 'var '.$this->sTabPrefix.'_tabs_divs = document.getElementsByName("'.$this->sTabPrefix.'_tab_name");'.PHP_EOL ;
		echo '//获取lists下的所有li'.PHP_EOL ;
		echo 'var '.$this->sTabPrefix.'_tabs_ul = document.getElementById("'.$this->sTabPrefix.'_list");'.PHP_EOL ;
		echo 'var '.$this->sTabPrefix.'_tabs_lis = '.$this->sTabPrefix.'_tabs_ul.getElementsByTagName("li");'.PHP_EOL ;  

		echo '//给元素添加className'.PHP_EOL ;
		echo 'function '.$this->sTabPrefix.'_add_class(elem,value){'.PHP_EOL ;
		echo 'if(!elem.className){'.PHP_EOL ;
		echo 'elem.className = value; //如果元素没有class，直接加'.PHP_EOL ;
		echo '}else{'.PHP_EOL ;
		echo 'var newClassName = elem.className;//如果元素已有class，追加'.PHP_EOL ;
		echo 'newClassName +=" ";'.PHP_EOL ;
		echo 'newClassName +=value;'.PHP_EOL ;
		echo 'elem.className = newClassName;'.PHP_EOL ;
		echo '}'.PHP_EOL ;
		echo '}'.PHP_EOL ;
		echo '//给元素删除className'.PHP_EOL ;
		echo 'function '.$this->sTabPrefix.'_del_class(elem,value){'.PHP_EOL ;
		echo 'var newClassName = elem.className;'.PHP_EOL ;
		echo 'if(newClassName.indexOf(value)){//查找元素是否有需要删除的class'.PHP_EOL ;
		echo 'elem.className = newClassName.replace(value," ");//如果有，则替换掉'.PHP_EOL ;
		echo '}'.PHP_EOL ;
		echo '}'.PHP_EOL ;


		echo 'for(var i =0,len = '.$this->sTabPrefix.'_tabs_lis.length; i<len;i++){'.PHP_EOL ;
		echo $this->sTabPrefix.'_tabs_lis[i].index = i;'.PHP_EOL ;

		echo $this->sTabPrefix.'_tabs_lis[i].onclick = function(){'.PHP_EOL ;
		echo 'for(var j = 0;j<len;j++){'.PHP_EOL ;
		echo $this->sTabPrefix.'_del_class('.$this->sTabPrefix.'_tabs_lis[j],"active");'.PHP_EOL ;
		echo $this->sTabPrefix.'_del_class('.$this->sTabPrefix.'_tabs_divs[j],"active")'.PHP_EOL ;
		echo '}'.PHP_EOL ;
		echo $this->sTabPrefix.'_add_class(this,"active");'.PHP_EOL ;
		echo $this->sTabPrefix.'_add_class('.$this->sTabPrefix.'_tabs_divs[this.index],"active")'.PHP_EOL ;
		echo '}'.PHP_EOL ;
		echo '}'.PHP_EOL ;

		echo '</script>'.PHP_EOL ;
	}
	
	/**
	* TabCss 
	* 生成选项卡对应的css样式
	*
	* @access private
	* @since 1.0
	* @return
	*/
	private function TabCss()
	{
		echo '<style type="text/css">'.PHP_EOL;
		
		echo '#'.$this->sTabPrefix.'{'.PHP_EOL ;
		echo 'width:100%;'.PHP_EOL ;
		echo '}'.PHP_EOL ;
		
		echo 'ul.'.$this->sTabPrefix.'_ul {'.PHP_EOL ;
		echo 'list-style:none;'.PHP_EOL ;
		echo 'display:block;'.PHP_EOL ;
		echo 'height:30px;'.PHP_EOL ;
		echo 'line-height:30px;'.PHP_EOL ;
		echo '}'.PHP_EOL ;

		echo 'li.'.$this->sTabPrefix.'_li {'.PHP_EOL ;
		echo 'list-style:none;'.PHP_EOL ;
		echo 'float:left;'.PHP_EOL ;
		if((3 == $this->iMenuPos) || (4 == $this->iMenuPos))
		{
			echo 'width:100%;'.PHP_EOL ;
			echo 'border-bottom:1px solid #ffccff;'.PHP_EOL ;
		}
		else
		{
			echo 'width:'.(100/$this->iMax - $this->iOffset).'%;'.PHP_EOL;
			echo 'border-right:1px solid #ffccff;'.PHP_EOL ;
		}
		//echo 'width:90px;'.PHP_EOL ;
		echo 'height:30px;'.PHP_EOL ;
		//echo 'margin-left:2px;'.PHP_EOL ;
		//echo 'border:1px solid #ffccff;'.PHP_EOL ;
		echo 'text-align:center;'.PHP_EOL ;
		echo 'background-color:#ff0;'.PHP_EOL ;
		echo 'cursor:pointer;'.PHP_EOL ;
		echo '}'.PHP_EOL ;
		echo '#'.$this->sTabPrefix.'_list .active {'.PHP_EOL ;
		//echo 'border-top:2px solid red;'.PHP_EOL ;
		//echo 'border-bottom:2px solid #fff;'.PHP_EOL ;
		echo 'background-color:#f0f;'.PHP_EOL ;
		echo '}'.PHP_EOL ;
		echo 'li.'.$this->sTabPrefix.'_li:hover {'.PHP_EOL ;
		//echo 'border-top:2px solid red;'.PHP_EOL ;
		//echo 'border-bottom:2px solid #fff;'.PHP_EOL ;
		echo 'background-color:#0ff;'.PHP_EOL ;
		echo '}'.PHP_EOL ;
		//echo '#'.$this->sTabPrefix.' div {'.PHP_EOL ; 
		echo 'div[name="'.$this->sTabPrefix.'_tab_name"]{'.PHP_EOL ; 		
		echo 'width:100%;'.PHP_EOL ;
		echo 'height:'.$this->iHeight.';'.PHP_EOL ;
		//echo 'margin-top:3px;'.PHP_EOL ;
		//echo 'margin-left:34px;'.PHP_EOL ;
		//echo 'padding:15px;'.PHP_EOL ;
		//echo 'border:1px solid #369;'.PHP_EOL ;
		echo '} '.PHP_EOL ;
		echo '#'.$this->sTabPrefix.' .hide{'.PHP_EOL ;
		echo 'display:none;'.PHP_EOL ;
		echo '}'.PHP_EOL ;
		echo '#'.$this->sTabPrefix.' .active{'.PHP_EOL ;
		echo 'display:block !important;'.PHP_EOL ;
		echo '}'.PHP_EOL ;
		
		echo '</style>';
	}
	
	/**
	* StartTab 
	* 开始一个选项卡
	*
	* @access public
	* @since 1.0
	* @return
	*/
	function StartTab()
	{
		if(0 == $this->iCur)
		{
			StartDiv(array("class" => "hide active", "name" => $this->sTabPrefix."_tab_name"));
		}
		else
		{
			StartDiv(array("class" => "hide", "name" => $this->sTabPrefix."_tab_name"));
		}
		++$this->iCur;
	}
	
	/**
	* StartTab 
	* 结束一个选项卡
	*
	* @access public
	* @since 1.0
	* @return
	*/
	function EndTab()
	{
		EndDiv();
	}
	
}



?>