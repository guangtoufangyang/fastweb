<?php

require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/config.php';

$defaultHeadConfig = array(
	"keywords" => "fastweb",
	"description" => "fastweb快速建站",
	"title" => "fastweb快速建站",
	"base" => SITE_URL,
	"target" => "_blank",
	"js" => array(SITE_URL."/js/fastweb.js"),
	"css" => array(SITE_URL."/css/fastweb.css")
	);


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
		if(!empty($val))
		{
			echo ' '.$key.'="'.$val.'"';
		}
	}
}

function GetStyle(&$arrStyle)
{
	$style = '';
	foreach ($arrStyle as $key => $val)
	{
		if(!empty($val))
		{
			$style = $style.$key.':"'.$val.'";';
		}
	}
}

function AddCommon($name, $arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<'.$name;
	ShowAttr($arrAttr);
	echo '> ';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</'.$name.'>'.PHP_EOL;
}

function AddCommon1($name, $arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<'.$name;
	ShowAttr($arrAttr);
	echo ' /> '.PHP_EOL;
}

function StartCommon($name, $arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<'.$name;
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndCommon($name)
{
	echo '</'.$name.'>'.PHP_EOL;
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

function StartAddress($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<address';
	ShowAttr($arrAttr);
	echo '> ';
}

function EndAddress()
{
	echo '</address>';
}

function AddArea($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<area';
	ShowAttr($arrAttr);
	echo ' /> ';
}

function StartArticle($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<article';
	ShowAttr($arrAttr);
	echo '> ';
}

function EndArticle()
{
	echo '</article>';
}

function StartAside($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<aside';
	ShowAttr($arrAttr);
	echo '> ';
}

function EndAside()
{
	echo '</aside>';
}

function StartAudio($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<audio';
	ShowAttr($arrAttr);
	echo '> ';
}

function EndAudio()
{
	echo '</audio>';
}

function AddAcronym($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<acronym';
	ShowAttr($arrAttr);
	echo '> ';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</acronym>'.PHP_EOL;
}

function AddBdo($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<bdo';
	ShowAttr($arrAttr);
	echo '> ';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</bdo>'.PHP_EOL;
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

function StartBlockquote($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<blockquote';
	ShowAttr($arrAttr);
	echo '> ';
}

function EndBlockquote()
{
	echo '</blockquote>';
}

function StartCanvas($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<canvas';
	ShowAttr($arrAttr);
	echo '> ';
}

function EndCanvas()
{
	echo '</canvas>';
}

function AddTextInput($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<input type="text"';
	ShowAttr($arrAttr);
	echo '>'.PHP_EOL;
}

function AddCaption($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<caption';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</caption>'.PHP_EOL;
}

function AddCol($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<col';
	ShowAttr($arrAttr);
	echo ' />'.PHP_EOL;
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

function AddSub($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<sub';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</sub>'.PHP_EOL;
}

function AddSup($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<sup';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</sup>'.PHP_EOL;
}

function AddSummary($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<summary';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</summary>'.PHP_EOL;
}

function AddU($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<u';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</u>'.PHP_EOL;
}

function StartDatalist($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<datalist';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndDatalist()
{
	echo '</datalist>'.PHP_EOL;
}

function StartDd($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<dd';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndDd()
{
	echo '</dd>'.PHP_EOL;
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

function StartDl($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<dl';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndDl()
{
	echo '</dl>'.PHP_EOL;
}

function AddDt($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<dt';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</dt>'.PHP_EOL;
}

function StartFigure($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<figure';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndFigure()
{
	echo '</figure>'.PHP_EOL;
}

function StartFrameset($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<frameset';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndFrameset()
{
	echo '</frameset>'.PHP_EOL;
}

function StartNav($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<nav';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndNav()
{
	echo '</nav>'.PHP_EOL;
}

function StartOptgroup($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<optgroup';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndOptgroup()
{
	echo '</optgroup>'.PHP_EOL;
}


function StartMap($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<map';
	ShowAttr($arrAttr);
	echo '> '.PHP_EOL;
}

function EndMap()
{
	echo '</map>'.PHP_EOL;
}

function AddMark($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<mark';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</mark>'.PHP_EOL;
}

function AddSource($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<source';
	ShowAttr($arrAttr);
	echo '>'.PHP_EOL;
}

function AddProgress($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<progress';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</progress>'.PHP_EOL;
}

function AddMeter($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<meter';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</meter>'.PHP_EOL;
}


function AddFrame($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<col';
	ShowAttr($arrAttr);
	echo ' />'.PHP_EOL;
}

function AddHr($arrAttr = array())
{
	if(!is_array($arrAttr)) return;
	echo '<hr';
	ShowAttr($arrAttr);
	echo ' />'.PHP_EOL;
}


function AddFigcaption($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<figcaption';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</figcaption>'.PHP_EOL;
}

function AddIns($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<ins';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</ins>'.PHP_EOL;
}

function AddFont($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<font';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</font>'.PHP_EOL;
}


function AddDel($arrAttr = array(), $text = "")
{
	if(!is_array($arrAttr)) return;
	echo '<del';
	ShowAttr($arrAttr);
	echo '>';
	if(!empty($text))
	{
		echo $text;
	}
	echo '</del>'.PHP_EOL;
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
		
		if(isset($config["description"]))
		{
			echo '<meta name="description" content="'.$config["description"].'" />'.PHP_EOL;
		}
		
		if(isset($config["title"]))
		{
			echo '<title>'.$config["title"].'</title>'.PHP_EOL;
		}
		
		if(isset($config["base"]))
		{
			echo '<base href="'.$config["base"].'" />'.PHP_EOL;
		}
		
		if(isset($config["target"]))
		{
			echo '<base target="'.$config["target"].'" />'.PHP_EOL;
		}

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
	private $iOffset;
	private $sTabPrefix;
	private $arrTabList;
	
	function __construct($arr, $height = "400px", $sTabPrefix = "fastweb_tab_box_tab", $offset = 0.3)
	{
		$this->iMax = count($arr);
		$this->iCur = 1;
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
	
	function AddTabList($arr)
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
	
	function StartTab()
	{
		StartDiv(array("id" => $this->sTabPrefix.(string)$this->iCur, "style" => "height:".$this->iHeight.";"));
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
		//必须增加"_self"属性，否则可能同时打开一个空白的新窗口
		$arr["target"] = "_self";
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
		$arr["target"] = "_self";
		$arr["class"] = $class;
		$arr["onclick"] = "document.getElementById('".$this->idPrefix."light').style.display='none';document.getElementById('".$this->idPrefix."fade').style.display='none'";
		AddLink($arr, $text);
	}
	
	public function StartPopup($width = "600px", $height = "400px", $left = "", $top = "", $right = "", $bottom = "")
	{
		$arr = array();
		$arr["id"] = $this->idPrefix."light";
		$arr["class"] = "fastweb_popup_light_style";
		$arr["style"] = "width:".$width.";height:".$height.";left:".$left.";top:".$top.";right:".$right.";bottom:".$bottom.";";
		StartDiv($arr);
	}
	public function EndPopup()
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

class CVerticalRollPlay{
	private $iRollCnt;
	private $iHeight;
	private $iAngle1;
	private $iAngle2;
	private $sCycle;
	private $sAnimationName;
	private $sBackground;
	public function __construct($height = 600, $cycle = "10s", $background = "#ffc",$animationName = "fastweb_vertical_rollplay_contain_animation"){
		$this->iRollCnt = 0;
		$this->iHeight = $height;
		$this->sCycle = $cycle;
		$this->sAnimationName = $animationName;
		$this->sBackground = $background;
		StartDiv(array("class" => "fastweb_vertical_rollplay_contain", "style" => "height:".$height."px;"));
	}
	
	public function __destruct(){
		$this->RollCss();
		EndDiv();
	}
	
	private function RollCss()
	{
		if($this->iRollCnt < 1) return;
		$this->iAngle1 = 360 / $this->iRollCnt;
		$this->iAngle2 = 360 / ($this->iRollCnt + 1);
		echo '<style type="text/css">'.PHP_EOL;
		for($i = 1; $i <= $this->iRollCnt; ++$i)
		{
			echo 'div.fastweb_vertical_rollplay_contain>div:nth-child('.(string)$i.'){'.PHP_EOL;
			echo '-webkit-transform:rotatex('.(string)($this->iAngle1*($this->iRollCnt - $i)).'deg) translatez('.(string)($this->iHeight/2).'px);'.PHP_EOL;
			echo 'transform:rotatex('.(string)($this->iAngle1*($this->iRollCnt - $i)).'deg) translatez('.(string)($this->iHeight/2).'px);}'.PHP_EOL;
		}
		
		
		echo 'div.fastweb_vertical_rollplay_contain{'.PHP_EOL;
		echo '-webkit-animation:'.$this->sAnimationName.' '.$this->sCycle.' linear infinite;'.PHP_EOL;
		echo 'animation:'.$this->sAnimationName.' '.$this->sCycle.' linear infinite;'.PHP_EOL;
		echo '}'.PHP_EOL;
		
		echo '@keyframes '.$this->sAnimationName.'{'.PHP_EOL;
		
		for($i = 0; $i < $this->iRollCnt; ++$i)
		{
			echo (string)($i*100/$this->iRollCnt).'%{transform:rotatex('.(string)($this->iAngle1 * $i).'deg);}'.PHP_EOL;
			//添加过渡比例时的位置，防止一直平滑播放
			echo (string)(($i + 0.5)*100/$this->iRollCnt).'%{transform:rotatex('.(string)($this->iAngle1 * $i).'deg);}'.PHP_EOL;
		}
		
		echo '100%{transform:rotatex(360deg)}'.PHP_EOL;
		echo '}'.PHP_EOL;
		echo '</style>';
	}
	
	public function RollStart()
	{
		++$this->iRollCnt;
		StartSimpleDiv(array("style" => "height:".$this->iHeight."px;background-color:".$this->sBackground.";"));
	}
	public function RollEnd()
	{
		EndDiv();
	}
	public function AddRollImg($src, $href = "")
	{
		$this->RollStart();
		if(empty($href))
		{
			AddImg(array("src" => $src));
		}
		else
		{
			AddImgWithLink(array("src" => $src), $href);
		}
		
		$this->RollEnd();
	}
}

class CRollPlay{
	private $iWidth;
	private $iHeight;
	private $sSlide;
	private $sContain;
	private $iCnt;
	private $iRollCycle;
	/*注意width变量是数字格式，代码中会用到这个数字计算偏移信息和宽度信息*/
	public function __construct($slide = "fastweb_rollplay_slide", $width = 600, $height="200px", $rollCycle = "10s"){
		$this->iWidth = $width;
		$this->iHeight = $height;
		$this->sSlide = $slide;
		$this->sContain = "fastweb_rollplay_contain";
		$this->iRollCycle = $rollCycle;
		$this->iCnt = 0;
		StartDiv(array("class" => $this->sContain, "style" => "width:".(string)$width."px;height:".$height.";"));
		StartUl(array("class" => $slide));
	}
	public function __destruct(){
		$this->RollCss();
		EndUl();
		EndDiv();
	}
	
	private function RollCss()
	{
		echo '<style type="text/css">'.PHP_EOL;
		
		echo 'div.'.$this->sContain.' ul.'.$this->sSlide.'{'.PHP_EOL;
		echo 'width:'.($this->iWidth * $this->iCnt).'px;'.PHP_EOL;
		echo 'animation:'.$this->sSlide.'_frames '.$this->iRollCycle.' infinite;'.PHP_EOL;
		echo '}'.PHP_EOL;
		
		echo '@keyframes '.$this->sSlide.'_frames{'.PHP_EOL;
		for($i = 0; $i < $this->iCnt; ++$i)
		{
			echo (string)($i*100/$this->iCnt).'%{margin-left:-'.(string)($this->iWidth * $i).'px;}'.PHP_EOL;
			//添加过渡比例时的位置，防止一直平滑播放
			echo (string)(($i + 0.5)*100/$this->iCnt).'%{margin-left:-'.(string)($this->iWidth * $i).'px;}'.PHP_EOL;
		}
		echo '100%{margin-left:0;}'.PHP_EOL;
		echo '}'.PHP_EOL;

		echo '</style>'.PHP_EOL;
	}
	
	public function RollStart()
	{
		++$this->iCnt;
		StartLi(array("style" => "width:".(string)$this->iWidth."px;height:".$this->iHeight.";"));
		StartDiv(array("style" => "width:100%;height:auto;"));
	}
	public function RollEnd()
	{
		EndDiv();
		EndLi();
	}
	public function AddRollImg($src, $href = "")
	{
		$this->RollStart();
		if(empty($href))
		{
			AddImg(array("src" => $src));
		}
		else
		{
			AddImgWithLink(array("src" => $src), $href);
		}
		
		$this->RollEnd();
	}
}



class CHorizontalRollDiv{
	private $iWidth;
	private $sName;
	private $sRollCycle;
	public function __construct($width = "600px", $rollCycle = "10s", $name = "fastweb_horizontal_rollplay_div"){
		$this->iWidth = $width;
		$this->sName = $name;
		$this->sRollCycle = $rollCycle;
		StartDiv(array("class" => $name, "style" => "width:".$width.";"));
	}
	public function __destruct(){
		$this->RollCss();
		EndDiv();
	}
	
	private function RollCss()
	{
		echo '<style type="text/css">'.PHP_EOL;
		
		
		echo 'div.'.$this->sName.'{'.PHP_EOL;
		echo 'display: inline-block;'.PHP_EOL;
		echo 'white-space: nowrap;'.PHP_EOL;
		echo 'animation: '.$this->sRollCycle.' '.$this->sName.'_loop linear infinite normal;'.PHP_EOL;
		echo '}'.PHP_EOL;

		echo '@keyframes '.$this->sName.'_loop{'.PHP_EOL;
		echo '0% {'.PHP_EOL;
		echo 'transform: translateX('.$this->iWidth.');'.PHP_EOL;
		echo '-webkit-transform: translateX('.$this->iWidth.');'.PHP_EOL;
		echo '}'.PHP_EOL;
		echo '100% {'.PHP_EOL;
		echo 'transform: translateX(-'.$this->iWidth.');'.PHP_EOL;
		echo '-webkit-transform: translateX(-'.$this->iWidth.');'.PHP_EOL;
		echo '}'.PHP_EOL;
		echo '}'.PHP_EOL;
		
		echo '</style>'.PHP_EOL;
	}
}


class CDynamicBackgroundDiv{
	private $sName;
	private $arrImg;
	private $iImgCnt;
	private $sBottomBackground;
	public function __construct($width = "100%", $height = "400px", $name = "fastweb_dynamic_background_div"){
		$this->sName = $name;
		$this->iImgCnt = 0;
		$this->arrImg = array();
		$this->sBottomBackground = "";
		StartDiv(array("class" => "fastweb_dynamic_background", "style" => "width:".$width.";height:".$height.";"));
	}
	public function __destruct(){
		$this->RollCss();
		EndDiv();
	}
	
	public function StartBottomDiv()
	{
		StartDiv(array("class" => $this->sName."_bottom", "style" => "position:absolute;left:0;top:0;width:100%;height:100%;"));
	}
	
	public function SetBottomBackground($background)
	{
		$this->sBottomBackground = $background;
	}
	
	public function EndBottomDiv()
	{
		EndDiv();
	}
	
	public function ImgUpward($img , $height, $cycle , $seam = true)
	{
		++$this->iImgCnt;
		StartDiv(array("class" => $this->sName."_".(string)$this->iImgCnt));
		EndDiv();
		array_push($this->arrImg, array("direction" => 1, "height" => $height, "from" => "0", "to" => "-".(string)$height, "cycle" => $cycle, "img" => $img));
		
		if($seam)
		{
			++$this->iImgCnt;
			StartDiv(array("class" => $this->sName."_".(string)$this->iImgCnt));
			EndDiv();
			array_push($this->arrImg, array("direction" => 1, "height" => $height, "from" => (string)$height, "to" => "0", "cycle" => $cycle, "img" => $img));
		}
	}
	
	public function ImgDownward($img , $height, $cycle , $seam = true)
	{
		++$this->iImgCnt;
		StartDiv(array("class" => $this->sName."_".(string)$this->iImgCnt));
		EndDiv();
		array_push($this->arrImg, array("direction" => 2, "height" => $height, "from" => "0", "to" => (string)$height, "cycle" => $cycle, "img" => $img));
		
		if($seam)
		{
			++$this->iImgCnt;
			StartDiv(array("class" => $this->sName."_".(string)$this->iImgCnt));
			EndDiv();
			array_push($this->arrImg, array("direction" => 2, "height" => $height, "from" => "-".(string)$height, "to" => "0", "cycle" => $cycle, "img" => $img));
		}
	}
	
	public function ImgLeftward($img , $width, $cycle , $seam = true)
	{
		++$this->iImgCnt;
		StartDiv(array("class" => $this->sName."_".(string)$this->iImgCnt));
		EndDiv();
		array_push($this->arrImg, array("direction" => 3, "width" => $width, "from" => "0", "to" => "-".(string)$width, "cycle" => $cycle, "img" => $img));
		
		if($seam)
		{
			++$this->iImgCnt;
			StartDiv(array("class" => $this->sName."_".(string)$this->iImgCnt));
			EndDiv();
			array_push($this->arrImg, array("direction" => 3, "width" => $width, "from" => (string)$width, "to" => "0", "cycle" => $cycle, "img" => $img));
		}
	}
	
	public function ImgRightward($img , $width, $cycle ,$seam = true)
	{
		++$this->iImgCnt;
		StartDiv(array("class" => $this->sName."_".(string)$this->iImgCnt));
		EndDiv();
		array_push($this->arrImg, array("direction" => 4, "width" => $width, "from" => "0", "to" => (string)$width, "cycle" => $cycle, "img" => $img));
		
		if($seam)
		{
			++$this->iImgCnt;
			StartDiv(array("class" => $this->sName."_".(string)$this->iImgCnt));
			EndDiv();
			array_push($this->arrImg, array("direction" => 4, "width" => $width, "from" => "-".(string)$width, "to" => "0", "cycle" => $cycle, "img" => $img));
		}
	}
	
	private function RollCss()
	{
		echo '<style type="text/css">'.PHP_EOL;
		
		if(!empty($this->sBottomBackground))
		{
			echo 'div.'.$this->sName.'_bottom{'.PHP_EOL;
			echo 'background:'.$this->sBottomBackground;
			echo '}';
		}
		
		for($i = 1; $i <= $this->iImgCnt; ++$i)
		{
			echo 'div.'.$this->sName.'_'.(string)$i.'{'.PHP_EOL;
			echo 'background: url("'.$this->arrImg[$i - 1]["img"].'") no-repeat;'.PHP_EOL;
			echo 'position: absolute;'.PHP_EOL;
			echo 'left: 0;'.PHP_EOL;
			echo 'top: 0;'.PHP_EOL;
			if(isset($this->arrImg[$i - 1]["height"]))
			{
				echo 'height:'.$this->arrImg[$i - 1]["height"].';'.PHP_EOL;
				echo 'width:100%;';
			}
			if(isset($this->arrImg[$i - 1]["width"]))
			{
				echo 'width:'.$this->arrImg[$i - 1]["width"].';'.PHP_EOL;
				echo 'height:100%;';
			}
			echo '-webkit-animation: '.$this->sName.'_animation'.(string)$i.' '.$this->arrImg[$i - 1]["cycle"].' linear infinite;'.PHP_EOL;
			echo '-moz-animation: '.$this->sName.'_animation'.(string)$i.' '.$this->arrImg[$i - 1]["cycle"].' linear infinite;'.PHP_EOL;
			echo '-o-animation: '.$this->sName.'_animation'.(string)$i.' '.$this->arrImg[$i - 1]["cycle"].' linear infinite;'.PHP_EOL;
			echo 'animation: '.$this->sName.'_animation'.(string)$i.' '.$this->arrImg[$i - 1]["cycle"].' linear infinite;'.PHP_EOL;
			echo '-webkit-transform: translate3d(0, 0, 0);'.PHP_EOL;
			echo '-ms-transform: translate3d(0, 0, 0);'.PHP_EOL;
			echo '-o-transform: translate3d(0, 0, 0);'.PHP_EOL;
			echo 'transform: translate3d(0, 0, 0);'.PHP_EOL;
			echo '}'.PHP_EOL;
			
			
			$trans = "translateX";
			if(($this->arrImg[$i - 1]["direction"] == 1) || ($this->arrImg[$i - 1]["direction"] == 2))
			{
				$trans = "translateY";
			}
			
			echo '@-webkit-keyframes '.$this->sName.'_animation'.(string)$i.' {'.PHP_EOL;
			echo '0% {'.PHP_EOL;
			echo 'transform: '.$trans.'('.$this->arrImg[$i - 1]['from'].');'.PHP_EOL;
			echo '-webkit-transform: '.$trans.'('.$this->arrImg[$i - 1]['from'].');'.PHP_EOL;
			echo '}'.PHP_EOL;
			echo '100% {'.PHP_EOL;
			echo 'transform: '.$trans.'('.$this->arrImg[$i - 1]['to'].');'.PHP_EOL;
			echo '-webkit-transform: '.$trans.'('.$this->arrImg[$i - 1]['to'].');'.PHP_EOL;
			echo '}'.PHP_EOL;
			echo '}'.PHP_EOL;
			echo '@-moz-keyframes '.$this->sName.'_animation'.(string)$i.' {'.PHP_EOL;
			echo '0% {'.PHP_EOL;
			echo 'transform: '.$trans.'('.$this->arrImg[$i - 1]['from'].');'.PHP_EOL;
			echo '-webkit-transform: '.$trans.'('.$this->arrImg[$i - 1]['from'].');'.PHP_EOL;
			echo '}'.PHP_EOL;
			echo '100% {'.PHP_EOL;
			echo 'transform: '.$trans.'('.$this->arrImg[$i - 1]['to'].');'.PHP_EOL;
			echo '-webkit-transform: '.$trans.'('.$this->arrImg[$i - 1]['to'].');'.PHP_EOL;
			echo '}'.PHP_EOL;
			echo '}'.PHP_EOL;
			echo '@keyframes '.$this->sName.'_animation'.(string)$i.' {'.PHP_EOL;
			echo '0% {'.PHP_EOL;
			echo 'transform: '.$trans.'('.$this->arrImg[$i - 1]['from'].');'.PHP_EOL;
			echo '-webkit-transform: '.$trans.'('.$this->arrImg[$i - 1]['from'].');'.PHP_EOL;
			echo '}'.PHP_EOL;
			echo '100% {'.PHP_EOL;
			echo 'transform: '.$trans.'('.$this->arrImg[$i - 1]['to'].');'.PHP_EOL;
			echo '-webkit-transform: '.$trans.'('.$this->arrImg[$i - 1]['to'].');'.PHP_EOL;
			echo '}'.PHP_EOL;
			echo '}'.PHP_EOL;
		}
		
		echo '</style>'.PHP_EOL;
	}
}

class CVerticalRollDiv{
	private $iHeight;
	private $sName;
	private $sRollCycle;
	public function __construct($height = "600px", $rollCycle = "10s", $name = "fastweb_vertical_rollplay_div"){
		$this->iHeight = $height;
		$this->sName = $name;
		$this->sRollCycle = $rollCycle;
		StartDiv(array("class" => $name, "style" => "width:100%;height:".$height.";"));
	}
	public function __destruct(){
		$this->RollCss();
		EndDiv();
	}
	
	private function RollCss()
	{
		echo '<style type="text/css">'.PHP_EOL;
		
		
		echo 'div.'.$this->sName.'{'.PHP_EOL;
		echo 'display: inline-block;'.PHP_EOL;
		echo 'white-space: nowrap;'.PHP_EOL;
		echo 'animation: '.$this->sRollCycle.' '.$this->sName.'_loop linear infinite normal;'.PHP_EOL;
		echo '}'.PHP_EOL;

		echo '@keyframes '.$this->sName.'_loop{'.PHP_EOL;
		echo '0% {'.PHP_EOL;
		echo 'transform: translateY('.$this->iHeight.');'.PHP_EOL;
		echo '-webkit-transform: translateY('.$this->iHeight.');'.PHP_EOL;
		echo '}'.PHP_EOL;
		echo '100% {'.PHP_EOL;
		echo 'transform: translateX(-'.$this->iHeight.');'.PHP_EOL;
		echo '-webkit-transform: translateY(-'.$this->iHeight.');'.PHP_EOL;
		echo '}'.PHP_EOL;
		echo '}'.PHP_EOL;
		
		echo '</style>'.PHP_EOL;
	}
}


class CPopupCloseBlock{
	private $idPrefix;
	public function __construct($prefix = "fastweb_close_block_popup_"){
		$this->idPrefix = $prefix;
	}
	
	public function SetPrefix($prefix = "fastweb_close_block_popup_"){
		$this->idPrefix = $prefix;
	}
	
	public function PopupCloseControlLink($text, $class = "fastweb_popup_a_style")
	{
		$arr = array();
		$arr["href"] = "javascript:void(0)";
		$arr["target"] = "_self";
		$arr["class"] = $class;
		$arr["onclick"] = "document.getElementById('".$this->idPrefix."light').style.display='none';";
		AddLink($arr, $text);
	}
	
	private function StartPopup($width = "600px", $height = "400px", $left = "", $top = "", $right = "", $bottom = "", $pos = "")
	{
		$arr = array();
		$arr["id"] = $this->idPrefix."light";
		$arr["class"] = "fastweb_close_block_pop";
		
		$arr["style"] = "width:".$width.";height:".$height.";left:".$left.";top:".$top.";right:".$right.";bottom:".$bottom.";position:".$pos.";";
		StartDiv($arr);
	}
	
	public function StartFixedPopup($width = "600px", $height = "400px", $left = "", $top = "", $right = "", $bottom = "")
	{
		$this->StartPopup($width, $height, $left, $top, $right, $bottom, "fixed");
	}
	public function StartRelativePopup($width = "600px", $height = "400px", $left = "", $top = "", $right = "", $bottom = "")
	{
		$this->StartPopup($width, $height, $left, $top, $right, $bottom, "relative");
	}
	public function EndPopup()
	{
		EndDiv();
	}
	
	public function __destruct(){
		
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
