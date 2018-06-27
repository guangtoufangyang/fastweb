<?php

require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/config.php';

function ColorEventMouseOver($color = "#ffff66")
{
	return "onmouseover=\"this.style.backgroundColor='".$color."';\"";
}

function ColorEventMouseOut($color = "#d4e3e5")
{
	return "onmouseout=\"this.style.backgroundColor='".$color."';\"";
}

function ParamInfo(&$paramArr)
{
	$paramArr = array();
	
	foreach($_GET as $key=>$value)
	{
		$paramArr[$key] = $value;
	}
	
	foreach($_POST as $key=>$value)
	{
		$paramArr[$key] = $value;
	}
	return;
}

function ShowAttr(&$arrAttr)
{
	foreach ($arrAttr as $key => $val)
	{
		echo ' '.$key.'="'.$val.'"';
	}
}

function AddSelect($arrAttr = array(), $arrOption = array())
{
	if(!is_array($arrAttr)) return;
	if(!is_array($arrOption)) return;
	echo '<select';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
	
	foreach ($arrOption as $val)
	{
		echo '<option value="'.$val["value"].'">'.$val["text"].'</option>'.PHP_EOL;
	}
	
	echo '</select>'.PHP_EOL;
}

function AddCheckBox($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<input type="checkbox"';
	ShowAttr($arrAttr);
	echo '/> '.PHP_EOL;
	
	if(!empty($text))
	{
		echo $arrAttr["text"].PHP_EOL;
	}
}

function AddEmbed($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<embed';
	ShowAttr($arrAttr);
	echo ' /> '.PHP_EOL;
	
}

function AddLi($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<li';
	ShowAttr($arrAttr);
	echo '> ';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</li>'.PHP_EOL;
}


function AddH1($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<h1';
	ShowAttr($arrAttr);
	echo '> ';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</h1>'.PHP_EOL;
}

function AddH2($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<h2';
	ShowAttr($arrAttr);
	echo '> ';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</h2>'.PHP_EOL;
}

function AddH3($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<h3';
	ShowAttr($arrAttr);
	echo '> ';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</h3>'.PHP_EOL;
}

function AddH4($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<h4';
	ShowAttr($arrAttr);
	echo '> ';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</h4>'.PHP_EOL;
}

function AddH5($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<h5';
	ShowAttr($arrAttr);
	echo '> ';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</h5>'.PHP_EOL;
}

function AddH6($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<h6';
	ShowAttr($arrAttr);
	echo '> ';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</h6>'.PHP_EOL;
}

function AddAbbr($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<abbr';
	ShowAttr($arrAttr);
	echo '> ';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</abbr>'.PHP_EOL;
}

function AddB($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<b';
	ShowAttr($arrAttr);
	echo '> ';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</b>'.PHP_EOL;
}


function AddTextInput($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<input type="text"';
	ShowAttr($arrAttr);
	echo '>'.PHP_EOL;
}

function AddSubmit($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<button type="submit"';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</button>'.PHP_EOL;
}


function StartOl($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<ol';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndOl()
{
	echo '</ol>'.PHP_EOL;
}

function StartForm($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<form';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndForm()
{
	echo '</form>'.PHP_EOL;
}

function StartPre($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<pre';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndPre()
{
	echo '</pre>'.PHP_EOL;
}

function StartTextarea($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<textarea';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndTextarea()
{
	echo '</textarea>'.PHP_EOL;
}

function StartObject($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<object';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndObject()
{
	echo '</object>'.PHP_EOL;
}

function StartLabel($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<label';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndLabel()
{
	echo '</label>'.PHP_EOL;
}

function StartFieldset($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<fieldset';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
	if(!empty($text))
	{
		echo '<legend>'.$text.'</legend>'.PHP_EOL;
	}
}

function EndFieldset()
{
	echo '</fieldset>'.PHP_EOL;
}

function AddSpan($arrAttr = array(), $text = ""){
	if(!is_array($arrAttr))
	{
		return;
	}
	echo '<span';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</span>'.PHP_EOL;
}


function AddLink($arrAttr = array(), $text = ""){
	if(!is_array($arrAttr))
	{
		return;
	}
	echo '<a';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</a>'.PHP_EOL;
}

function AddLineLink($arrAttr = array(), $text = ""){
	if(!is_array($arrAttr))
	{
		return;
	}
	echo '<a';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</a><br />'.PHP_EOL;
}


function AddImg($arrAttr = array()){
	if(!is_array($arrAttr))
	{
		return;
	}
	
	echo '<img';
	ShowAttr($arrAttr);
	echo ' />'.PHP_EOL;
}

function AddImgWithLink($arrAttr = array(), $href = ""){
	if(!is_array($arrAttr))
	{
		return;
	}
	echo '<a ';
	echo ' href="'.$href.'"';
	echo '>';
	
	
	echo '<img';
	ShowAttr($arrAttr);
	echo ' />';
	echo '</a>'.PHP_EOL;
}

function AddLiWithLink($arrAttr = array(), $text){
	if(!is_array($arrAttr))
	{
		return;
	}
	
	echo '<li';
	ShowAttr($arrAttr);
	echo '>';
	AddLink(array(), $text);
	echo '</li>'.PHP_EOL;

}

function AddRadio($arrAttr = array()){
	echo '<input type="radio"';
	ShowAttr($arrAttr);
	echo '/>'.PHP_EOL;
}


function AddLabel($arrAttr = array(), $text = "", $href = ""){
	echo '<label';
	ShowAttr($arrAttr);
	echo '>';
	
	if(!empty($href) && !empty($text))
	{
		AddLink(array("href" => $href), $text);
	}
	else if(!empty($text))
	{
		echo $text.PHP_EOL;
	}
	echo '</label>'.PHP_EOL;
}

function StartLiWithLink($arrAttr = array(), $text = "", $href = ""){
	echo ' <li';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($href) && !empty($text))
	{
		AddLink(array("href" => $href), $text);
	}
}

function StartBody($arrAttr = array())
{
	echo '<body';
	ShowAttr($arrAttr);
	echo ' topMargin=0 leftMargin=0 rightMargin=0>';
}

function EndBody()
{
	echo '</body></html>';
}

function StartLi($arrAttr = array()){
	echo '<li ';
	ShowAttr($arrAttr);
	echo '>'.PHP_EOL;
}


function EndLi(){
	echo '</li>'.PHP_EOL;
}

function StartNav($arrAttr = array()){
	echo '<nav';
	ShowAttr($arrAttr);
	echo '>'.PHP_EOL;
}

function EndNav(){
	echo '</nav>'.PHP_EOL;
}

function StartSimpleDiv($arrAttr = array()){
	echo '<div';
	if(array_key_exists("class", $arrAttr))
	{
		$arrAttr["class"] = "fastweb_div_simple ".$arrAttr["class"];
	}
	else
	{
		$arrAttr["class"] = "fastweb_div_simple";
	}
	
	ShowAttr($arrAttr);
	echo '>'.PHP_EOL;
}

function StartDiv($arrAttr = array()){
	echo '<div';
	ShowAttr($arrAttr);
	echo '>'.PHP_EOL;
}

function EndDiv(){
	echo '</div>'.PHP_EOL;
}


function StartUl($arrAttr = array()){
	echo '<ul';
	ShowAttr($arrAttr);
	echo '>'.PHP_EOL;
}



function EndUl(){
	echo '</ul>'.PHP_EOL;
}

function AddHtml($path){
	include GLOBAL_HTML.$path;
}

function ClearFloat()
{
	echo '<div style="clear:both"></div>'.PHP_EOL;
}

function Repeat($data, $cnt = 1)
{
	for($i = 0; $i < $cnt; ++$i)
	{
		echo $data;
	}
}


class CHead
{
	function __construct(){
		echo '<!DOCTYPE html>';
		echo '<html>';
		echo '<head>';
	}
	function __destruct(){
		echo '</head>';
	}
	
	function HeadConfig($config = array())
	{
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.PHP_EOL;
		if(isset($config["keyword"]))
		{
			echo '<meta name="keywords" content="'.$config["keyword"].'" />'.PHP_EOL;
		}
		else
		{
			echo '<meta name="keywords" content="fastweb" />'.PHP_EOL;
		}
		
		if(isset($config["description"]))
		{
			echo '<meta name="description" content="'.$config["description"].'" />'.PHP_EOL;
		}
		else
		{
			echo '<meta name="description" content="fastweb" />'.PHP_EOL;
		}
		
		if(isset($config["title"]))
		{
			echo '<title>'.$config["title"].'</title>'.PHP_EOL;
		}
		else
		{
			echo '<title>fastweb</title>'.PHP_EOL;
		}
		
		if(isset($config["base"]))
		{
			echo '<base href="'.$config["base"].'" />'.PHP_EOL;
		}
		else
		{
			echo '<base href="'.SITE_URL.'" />'.PHP_EOL;
		}
		
		if(isset($config["target"]))
		{
			echo '<base target="'.$config["target"].'" />'.PHP_EOL;
		}
		else
		{
			echo '<base target="_blank" />'.PHP_EOL;
		}
		
		echo '<script type="text/javascript" src="'.SITE_URL.'/js/fastweb.js"></script>'.PHP_EOL ;
		echo '<link href="'.SITE_URL.'/css/fastweb.css" rel="stylesheet" type="text/css" />'.PHP_EOL ;
		
		if(isset($config["css"]))
		{
			foreach ($config["css"] as $val)
			{
				echo '<link href="'.$val.'" rel="stylesheet" type="text/css" />'.PHP_EOL ;
			}
		}
		
		if(isset($config["js"]))
		{
			foreach ($config["js"] as $val)
			{
				echo '<script type="text/javascript" src="'.$val.'"></script>'.PHP_EOL ;
			}
		}
	}
}


class CDocument
{
	private $paraArr;
	function __construct()
	{
		$this->paraArr = array();
	}
	
	function __destruct()
	{
	}
	
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
	
	function AddTitle($t, $pos = 2, $c = 'fastweb_p_title_style1')
	{
		$this->SetPara($pos, $c);
		StartDiv($this->paraArr);
		AddSpan(array(), $t);
		EndDiv();
	}
	
	function AddAuthor($t, $pos = 3, $c = 'fastweb_p_author_style1')
	{
		$this->SetPara($pos, $c);
		StartDiv($this->paraArr);
		AddSpan(array(), $t);
		EndDiv();
	}

	function StartParagraph($pos = 1, $c = 'fastweb_p_text_style1')
	{
		$this->SetPara($pos, $c);
		StartDiv($this->paraArr);
	}
	
	function EndParagraph()
	{
		EndDiv();
	}
}

class CTree
{
	private $sBranchTag;
	private $iBranchNum;
	private $sBranchClass;
	private $arrCheckBranch;
	
	function __construct($branchTag, $checkBranchArr = array(), $branchClass = "fastweb_tree_branch")
	{
		$this->iBranchNum = 1;
		$this->sBranchTag = $branchTag;
		$this->sBranchClass = $branchClass;
		$this->arrCheckBranch = $checkBranchArr;
		StartOl(array("class" => "fastweb_tree"));
	}
	
	function __destruct()
	{
		EndOl();
	}
	
	function StartBranch($text, $href = "")
	{
		StartLi(array("class" => $this->sBranchClass));
		AddLabel(array("for" => $this->sBranchTag.(string)$this->iBranchNum), $text, $href);
		//if($text == $this->sCheckBranch)
		if(in_array($text, $this->arrCheckBranch))
		{
			AddCheckBox(array("class" => "fastweb_tree_input", "id" => $this->sBranchTag.(string)$this->iBranchNum, "checked" => "checked"));
		}
		else
		{
			AddCheckBox(array("class" => "fastweb_tree_input", "id" => $this->sBranchTag.(string)$this->iBranchNum));
		}
		
		StartOl();
		++$this->iBranchNum;
	}
	function EndBranch()
	{
		EndOl();
		EndLi();
	}
	function AddLeaf($text, $href = "")
	{
		StartLi(array("class" => "fastweb_tree_leaf"));
		if(!empty($href))
		{
			AddLink(array("href" => $href), $text);
		}
		else
		{
			echo $text;
		}
			
		EndLi();
	}
	
	function AddTreeData($data)
	{
		foreach ($data as $val)
		{
			if($val["name"] == "branch")
			{
				$this->StartBranch($val["text"], isset($val["href"]) ? $val["href"] : "");
				$this->AddTreeData($val["leaf"]);
				$this->EndBranch();
			}
			else if($val["name"] == "leaf")
			{
				$this->AddLeaf($val["text"], isset($val["href"]) ? $val["href"] : "");
			}
		}
	}
}

class CTab
{
	private $iMax;
	private $iCur;
	private $iHeight;
	private $sTabPrefix;
	private $arrTabList;
	
	function __construct($arr, $iHeight = "", $sTabPrefix = "fastweb_tab_box_tab")
	{
		$this->id = count($arr);
		$this->iCur = 1;
		$this->sTabPrefix = $sTabPrefix;
		$this->iHeight = $iHeight;
		$this->arrTabList = $arr;
		$this->AddTabList($this->arrTabList);
	}
	
	function __destruct()
	{
		EndDiv();
		StartUl(array("id" => "fastweb_tab_box_nav"));
		for($i = 1; $i<= $this->id; ++$i)
		{
			StartLi();
			AddLink(array("href" => "#".$this->sTabPrefix.(string)$i, "target" => "_self"), $this->arrTabList[$i - 1]);
			EndLi();
		}
		EndUl();
		EndDiv();
	}
	
	function AddTabList($arr)
	{
		StartDiv(array("id" => "fastweb_tab_box", "style" => empty($this->iHeight) ? "" : "height:".$this->iHeight.";"));
		/*StartUl(array("id" => "fastweb_tab_box_nav"));
		for($i = 1; $i<= $this->id; ++$i)
		{
			StartLi();
			AddLink(array("href" => "#".$this->sTabPrefix.(string)$i, "target" => "_self"), $this->arrTabList[$i - 1]);
			EndLi();
		}
		EndUl();*/
		StartDiv(array("id" => "fastweb_tab_box_content", "style" => empty($this->iHeight) ? "" : "height:".$this->iHeight.";"));
	}
	
	function StartTab()
	{
		StartDiv(array("id" => $this->sTabPrefix.(string)$this->iCur, "style" => empty($this->iHeight) ? "" : "height:".$this->iHeight.";"));
		++$this->iCur;
	}
	
	function EndTab()
	{
		EndDiv();
	}
	
}


class CTable{
	private $mTd;
	private $mMaxTd;
	private $mLineNum;
	private $mTrMouseOn;
	private $mTrMouseOut;
	private $mTdWidth;
	private $mTableEnd;
	private $mTdWidArr;
	private $mTdColorClass;
	private $mTdColorClassCnt;
	private $mLineTd;
	private $mMultiTd;
	function __construct($max=3, $c = "fastweb_table_style1", $style="", $summary=""){
		$this->mTd = 0;
		$this->mTableEnd = 0;
		$this->mLineNum = 0;
		$this->mLineTd = 0;
		$this->mMultiTd = array();
		$this->mMaxTd = $max;
		echo '<table summary = "'.$summary.'" class="'.$c.'" style="'.$style.'">'.PHP_EOL ;
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
	
	function TableTail(){
	    if($this->mTableEnd == 0)
	    {
	        echo "</table>".PHP_EOL ;
	        $this->mTableEnd = 1;
	    }		
	}
	
	function SetTdColor($arrAttr = array())
	{
		$this->mTdColorClass = $arrAttr;
		$this->mTdColorClassCnt = count($arrAttr);
	}
	
	function SetTrMouse($colorOn = "#ffff66", $colorOut = "#d4e3e5")
	{
		$this->mTrMouseOn = ColorEventMouseOver($colorOn);
		$this->mTrMouseOut = ColorEventMouseOut($colorOut);
	}
	
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
	
	function EndTr()
	{
		echo "</tr>".PHP_EOL ;
	}
	
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
	
	function EndTd()
	{
		echo "</td>".PHP_EOL ;
		++$this->mTd;
		if($this->mTd >= $this->mLineTd){
			$this->EndTr();
			$this->mTd = 0;
		}
	}
	
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
	
	function EndTh()
	{
		echo "</th>".PHP_EOL ;
		++$this->mTd;
		if($this->mTd >= $this->mLineTd){
			$this->EndTr();
			$this->mTd = 0;
		}
	}
	
	function AddTh($text)
	{
		$this->StartTh();
		echo $text;
		$this->EndTh();
	}
	
	function AddTd($text, $rows = 1, $cols = 1)
	{
		$this->StartTd($rows, $cols);
		echo $text;
		$this->EndTd();
	}
	
	function AddCaption($cap){
		echo '<caption>'.$cap.'</caption>'.PHP_EOL ;
		$this->mTd = 0;
	}
	
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

class CPopup{
	private $idPrefix;
	public function __construct($prefix = "fastweb_class_popup_"){
		$this->idPrefix = $prefix;
	}
	
	public function SetPrefix($prefix = "fastweb_class_popup_"){
		$this->idPrefix = $prefix;
	}
	
	public function PopupOpenControlLink($text, $class = "fastweb_popup_a_style")
	{
		$arr = array();
		$arr["href"] = "javascript:void(0)";
		$arr["class"] = $class;
		$arr["onclick"] = "document.getElementById('".$this->idPrefix."light').style.display='block';document.getElementById('".$this->idPrefix."fade').style.display='block'";
		AddLink($arr, $text);
		
		StartDiv(array("id" => $this->idPrefix."fade", "class" => "fastweb_popup_fade_style", "style" => "display:none;"));
		EndDiv();
	}
	
	public function PopupCloseControlLink($text, $class = "fastweb_popup_a_style")
	{
		$arr = array();
		$arr["href"] = "javascript:void(0)";
		$arr["class"] = $class;
		$arr["onclick"] = "document.getElementById('".$this->idPrefix."light').style.display='none';document.getElementById('".$this->idPrefix."fade').style.display='none'";
		AddLink($arr, $text);
	}
	
	public function PopupStart($width = "600px", $height = "400px", $left = "15%", $top = "15%")
	{
		$arr = array();
		$arr["id"] = $this->idPrefix."light";
		$arr["class"] = "fastweb_popup_light_style";
		$arr["style"] = "width:".$width.";height:".$height.";left:".$left.";top:".$top.";";
		StartDiv($arr);
	}
	public function PopupEnd()
	{
		EndDiv();
	}
	
	public function __destruct(){
		
	}
}

class CCloseBlock{
	public function __construct(){
		AddCheckBox(array("class" => "fastweb_close_block"));
		StartDiv();
	}
	public function __destruct(){
		EndDiv();
	}
}

class CRollPlay{
	public function __construct($contain = "fastweb_rollplay_contain", $slide = "fastweb_rollplay_slide"){
		StartDiv(array("class" => $contain));
		StartUl(array("class" => $slide));
	}
	public function __destruct(){
		EndUl();
		EndDiv();
	}
	public RollStart()
	{
		StartLi();
	}
	public RollEnd()
	{
		EndLi();
	}
	public AddRollImg($src, $href = "")
	{
		RollStart();
		if(empty($href))
		{
			AddImg(array("src" => $val));
		}
		else
		{
			AddImgWithLink(array("src" => $val), $href);
		}
		
		EndLi();
	}
}

/*此种关闭为点击任意位置都关闭*/
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
