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

function AddSelect($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<select';
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
	echo '> '.PHP_EOL;
	
	if(array_key_exists("options", $arrAttr))
	{
		foreach ($arrAttr["options"] as $val)
		{
			echo '<option value="'.$val["value"].'">'.$val["text"].'</option>'.PHP_EOL;
		}
	}
	
	echo '</select>'.PHP_EOL;
}

function AddCheckBox($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<input type="checkbox"';
	if(array_key_exists("name", $arrAttr))
	{
		echo ' name="'.$arrAttr["name"].'"';
	}
	if(array_key_exists("id", $arrAttr))
	{
		echo ' id="'.$arrAttr["id"].'"';
	}
	if(array_key_exists("value", $arrAttr))
	{
		echo ' value="'.$arrAttr["value"].'"';
	}
	if(array_key_exists("class", $arrAttr))
	{
		echo ' class="'.$arrAttr["class"].'"';
	}
	if(array_key_exists("checked", $arrAttr) && $arrAttr["checked"])
	{
		echo ' checked';
	}
	echo '/> '.PHP_EOL;
	
	if(array_key_exists("text", $arrAttr))
	{
		echo $arrAttr["text"].PHP_EOL;
	}
}


function AddLi($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<li';
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
	echo '> ';
	if(array_key_exists("text", $arrAttr))
	{
		echo $arrAttr["text"];
	}
	echo '</li>'.PHP_EOL;
}


function StartOl($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<ol';
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
	echo '> '.PHP_EOL;
}

function EndOl()
{
	echo '</ol>'.PHP_EOL;
}

function StartFieldset($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<fieldset';
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
	echo '> '.PHP_EOL;
	if(array_key_exists("text", $arrAttr))
	{
		echo '<legend>'.$arrAttr["text"].'</legend>'.PHP_EOL;
	}
}

function EndFieldset()
{
	echo '</fieldset>'.PHP_EOL;
}

function AddSpan($arrAttr = array()){
	if(!is_array($arrAttr))
	{
		return;
	}
	echo '<span ';
	if(array_key_exists("class", $arrAttr))
	{
		echo ' class="'.$arrAttr["class"].'"';
	}
	
	if(array_key_exists("style", $arrAttr))
	{
		echo ' style="'.$arrAttr["style"].'"';
	}
	
	echo '>';
	if(array_key_exists("text", $arrAttr))
	{
		echo $arrAttr["text"];
	}
	echo '</span>'.PHP_EOL;
}

function AddLink($arrAttr = array()){
	if(!is_array($arrAttr))
	{
		return;
	}
	echo '<a ';
	if(array_key_exists("href", $arrAttr))
	{
		echo ' href="'.$arrAttr["href"].'"';
	}
	if(array_key_exists("target", $arrAttr))
	{
		echo ' target="'.$arrAttr["target"].'"';
	}
	if(array_key_exists("id", $arrAttr))
	{
		echo ' id="'.$arrAttr["id"].'"';
	}
	if(array_key_exists("class", $arrAttr))
	{
		echo ' class="'.$arrAttr["class"].'"';
	}
	echo '>';
	if(array_key_exists("text", $arrAttr))
	{
		echo $arrAttr["text"];
	}
	echo '</a>'.PHP_EOL;
}

function AddLineLink($arrAttr = array()){
	if(!is_array($arrAttr))
	{
		return;
	}
	echo '<a ';
	if(array_key_exists("href", $arrAttr))
	{
		echo ' href="'.$arrAttr["href"].'"';
	}
	echo '>';
	if(array_key_exists("text", $arrAttr))
	{
		echo $arrAttr["text"];
	}
	echo '</a><br>'.PHP_EOL;
}


function AddImg($arrAttr = array()){
	if(!is_array($arrAttr))
	{
		return;
	}
	
	echo '<img';
	if(array_key_exists("src", $arrAttr))
	{
		echo ' src="'.$arrAttr["src"].'"';
	}
	
	if(array_key_exists("width", $arrAttr))
	{
		echo ' width="'.$arrAttr["width"].'"';
	}
	
	if(array_key_exists("height", $arrAttr))
	{
		echo ' height="'.$arrAttr["height"].'"';
	}
	
	echo ' />'.PHP_EOL;
}

function AddLiWithLink($arrAttr = array()){
	if(!is_array($arrAttr))
	{
		return;
	}
	
	echo '<li';
	if(array_key_exists("class", $arrAttr))
	{
		echo ' class="'.$arrAttr["class"].'"';
	}
	
	if(array_key_exists("style", $arrAttr))
	{
		echo ' style="'.$arrAttr["style"].'"';
	}
	echo '>';
	AddLink($arrAttr);
	echo '</li>'.PHP_EOL;

}

function AddRadio($arrAttr = array()){
	echo '<input type="radio"';
	
	if(array_key_exists("class", $arrAttr))
	{
		echo ' class="'.$arrAttr["class"].'"';
	}
	
	if(array_key_exists("name", $arrAttr))
	{
		echo ' name="'.$arrAttr["name"].'"';
	}
	
	if(array_key_exists("id", $arrAttr))
	{
		echo ' id="'.$arrAttr["id"].'"';
	}
	
	if(array_key_exists("checked", $arrAttr) && $arrAttr["checked"])
	{
		echo ' checked="checked"';
	}
	echo '/>'.PHP_EOL;
}


function AddLabel($arrAttr = array()){
	echo '<label ';
	
	if(array_key_exists("class", $arrAttr))
	{
		echo ' class="'.$arrAttr["class"].'"';
	}
	
	if(array_key_exists("for", $arrAttr))
	{
		echo ' for="'.$arrAttr["for"].'"';
	}
	
	echo '>';
	
	$bHasLink = (array_key_exists("href", $arrAttr)) && (!empty($arrAttr["href"]));
	
	if($bHasLink)
	{
		echo '<a href="'.$arrAttr["href"].'">';
	}
	if(array_key_exists("text", $arrAttr))
	{
		echo $arrAttr["text"].PHP_EOL;
	}
	if($bHasLink)
	{
		echo '</a>';
	}
	/*
	if(array_key_exists("text", $arrAttr))
	{
		echo $arrAttr["text"];
	}
	*/
	echo '</label>'.PHP_EOL;
}

function StartLiWithLink($arrAttr = array()){
	echo ' <li';
	if(array_key_exists("class", $arrAttr))
	{
		echo ' class="'.$arrAttr["class"].'"';
	}
	
	if(array_key_exists("style", $arrAttr))
	{
		echo ' style="'.$arrAttr["style"].'"';
	}
	echo '>';
	
	if(array_key_exists("href", $arrAttr))
	{
		echo '<a href ="'.$arrAttr["href"].'">';
		if(array_key_exists("text", $arrAttr))
		{
			echo $arrAttr["text"];
		}
		echo '</a>'.PHP_EOL;
	}
}

function StartBody($arrAttr = array())
{
	echo '<body';
	if(array_key_exists("class", $arrAttr))
	{
		echo ' class="'.$arrAttr["class"].'"';
	}
	echo ' topMargin=0 leftMargin=0 rightMargin=0>';
}

function EndBody()
{
	echo '</body></html>';
}

function StartLi($arrAttr = array()){
	echo '<li ';
	if(array_key_exists("class", $arrAttr))
	{
		echo ' class="'.$arrAttr["class"].'"';
	}
	
	if(array_key_exists("style", $arrAttr))
	{
		echo ' style="'.$arrAttr["style"].'"';
	}
	echo '>'.PHP_EOL;
}


function EndLi(){
	echo '</li>'.PHP_EOL;
}

function StartNav($arrAttr = array()){
	echo '<nav';
	if(array_key_exists("class", $arrAttr))
	{
		echo ' class="'.$arrAttr["class"].'"';
	}
	
	if(array_key_exists("style", $arrAttr))
	{
		echo ' style="'.$arrAttr["style"].'"';
	}
	echo '>'.PHP_EOL;
}

function EndNav(){
	echo '</nav>'.PHP_EOL;
}

function StartSimpleDiv($arrAttr = array()){
	echo '<div class="fastweb_div_simple';
	
	if(array_key_exists("class", $arrAttr))
	{
		echo ' '.$arrAttr["class"];
	}
	echo '"';
	
	if(array_key_exists("style", $arrAttr))
	{
		echo ' style="'.$arrAttr["style"].'"';
	}
	echo '>'.PHP_EOL;
}

function StartDiv($arrAttr = array()){
	echo '<div';
	if(array_key_exists("class", $arrAttr))
	{
		echo ' class="'.$arrAttr["class"].'"';
	}
	
	if(array_key_exists("style", $arrAttr))
	{
		echo ' style="'.$arrAttr["style"].'"';
	}
	if(array_key_exists("id", $arrAttr))
	{
		echo ' id="'.$arrAttr["id"].'"';
	}
	echo '>'.PHP_EOL;
}

function EndDiv(){
	echo '</div>'.PHP_EOL;
}


function StartUl($arrAttr = array()){
	echo '<ul';
	if(array_key_exists("class", $arrAttr))
	{
		echo ' class="'.$arrAttr["class"].'"';
	}
	
	if(array_key_exists("style", $arrAttr))
	{
		echo ' style="'.$arrAttr["style"].'"';
	}
	
	if(array_key_exists("id", $arrAttr))
	{
		echo ' id="'.$arrAttr["id"].'"';
	}
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
	function __construct()
	{
	}
	
	function __destruct()
	{
	}
	
	function AddTitle($t, $s = '')
	{
		StartDiv(array("class" => "fastweb_p_title", "style" => $s));
		AddSpan(array("text" => $t));
		EndDiv();
	}
	
	function AddAuthor($t)
	{
		StartDiv(array("class" => "fastweb_p_author"));
		AddSpan(array("text" => $t));
		EndDiv();
	}

	function StartParagraph()
	{
		StartDiv(array("class" => "fastweb_p_text"));
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
		AddLabel(array("for" => $this->sBranchTag.(string)$this->iBranchNum, "text" => $text, "href" => $href));
		//if($text == $this->sCheckBranch)
		if(in_array($text, $this->arrCheckBranch))
		{
			AddCheckBox(array("class" => "fastweb_tree_input", "id" => $this->sBranchTag.(string)$this->iBranchNum, "checked" => true));
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
			AddLink(array("href" => $href, "text" => $text));
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
			AddLink(array("text" => $this->arrTabList[$i - 1], "href" => "#".$this->sTabPrefix.(string)$i, "target" => "_self"));
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
			AddLink(array("text" => $arr[$i - 1], "href" => "#".$this->sTabPrefix.(string)$i, "target" => "_self"));
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



?>
