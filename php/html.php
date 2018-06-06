<?php

define("SITE_URL","http://localhost/fastweb/",TRUE);
define("ROOT_PATH",rtrim($_SERVER['DOCUMENT_ROOT'],'/'),true);
define("GLOBAL_HTML",ROOT_PATH.'/fastweb/html/',TRUE);


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
	if(array_key_exists("text", $arrAttr))
	{
		echo $arrAttr["text"];
	}
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
	echo '<div class="fastweb_div_simple"';
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
	
	function __construct($branchTag)
	{
		$this->iBranchNum = 1;
		$this->sBranchTag = $branchTag;
		StartOl(array("class" => "fastweb_tree"));
	}
	
	function __destruct()
	{
		EndOl();
	}
	
	function StartBranch($text)
	{
		StartLi(array("class" => "fastweb_tree_branch"));
		AddLabel(array("for" => $this->sBranchTag.(string)$this->iBranchNum, "text" => $text));
		AddCheckBox(array("class" => "fastweb_tree_input", "id" => $this->sBranchTag.(string)$this->iBranchNum));
		StartOl();
		++$this->iBranchNum;
	}
	function EndBranch()
	{
		EndOl();
		EndLi();
	}
	function AddLeaf($link, $text)
	{
		StartLi(array("class" => "fastweb_tree_leaf"));
		AddLink(array("href" => $link, "text" => $text));
		EndLi();
	}
	
	function AddTreeData($data)
	{
		foreach ($data as $val)
		{
			if($val["name"] == "branch")
			{
				$this->StartBranch($val["text"]);
				$this->AddTreeData($val["leaf"]);
				$this->EndBranch();
			}
			else if($val["name"] == "leaf")
			{
				$this->AddLeaf($val["link"], $val["text"]);
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
	
	function __construct($arr, $iHeight = "", $sTabPrefix = "fastweb_tab_box_tab")
	{
		$this->id = count($arr);
		$this->iCur = 1;
		$this->sTabPrefix = $sTabPrefix;
		$this->iHeight = $iHeight;
		$this->Init($arr);
	}
	
	function __destruct()
	{
		EndDiv();
		EndDiv();
	}
	
	function Init($arr)
	{
		StartDiv(array("id" => "fastweb_tab_box", "style" => empty($this->iHeight) ? "" : "height:".$this->iHeight.";"));
		StartUl(array("id" => "fastweb_tab_box_nav"));
		for($i = 1; $i<= $this->id; ++$i)
		{
			StartLi();
			AddLink(array("text" => $arr[$i - 1], "href" => "#".$this->sTabPrefix.(string)$i, "target" => "_self"));
			EndLi();
		}
		EndUl();
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


?>
