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
	echo '/> ';
	
	if(array_key_exists("options", $arrAttr))
	{
		foreach ($arrAttr["options"] as $val)
		{
			echo '<option value="'.$val["value"].'">'.$val["text"].'</option>';
		}
	}
	
	echo '</select>';
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
	echo '/> ';
	if(array_key_exists("text", $arrAttr))
	{
		echo $arrAttr["text"];
	}
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
	echo '> ';
	if(array_key_exists("text", $arrAttr))
	{
		echo '<legend>'.$arrAttr["text"].'</legend>';
	}
}

function EndFieldset()
{
	echo '</fieldset>';
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
	echo '</span>';
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
	echo '>';
	if(array_key_exists("text", $arrAttr))
	{
		echo $arrAttr["text"];
	}
	echo '</a>';
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
	echo '</a><br>';
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
	
	echo ' />';
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
	echo '</li>';

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
	echo '/>';
}


function AddLabel($arrAttr = array()){
	echo '<lable ';
	
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
	echo '</lable>';
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
		echo '</a>';
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
	echo '>';
}


function EndLi(){
	echo '</li>';
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
	echo '>';
}

function EndNav(){
	echo '</nav>';
}

function StartSimpleDiv($arrAttr = array()){
	echo '<div class="fastweb_div_simple"';
	if(array_key_exists("style", $arrAttr))
	{
		echo ' style="'.$arrAttr["style"].'"';
	}
	echo '>';
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
	echo '>';
}

function EndDiv(){
	echo '</div>';
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
	echo '>';
}



function EndUl(){
	echo '</ul>';
}

function AddHtml($path){
	include GLOBAL_HTML.$path;
}

function ClearFloat()
{
	echo '<div style="clear:both"></div>';
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
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		if(isset($config["keyword"]))
		{
			echo '<meta name="keywords" content="'.$config["keyword"].'" />';
		}
		else
		{
			echo '<meta name="keywords" content="fastweb" />';
		}
		
		if(isset($config["description"]))
		{
			echo '<meta name="description" content="'.$config["description"].'" />';
		}
		else
		{
			echo '<meta name="description" content="fastweb" />';
		}
		
		if(isset($config["title"]))
		{
			echo '<title>'.$config["title"].'</title>';
		}
		else
		{
			echo '<title>fastweb</title>';
		}
		
		if(isset($config["base"]))
		{
			echo '<base href="'.$config["base"].'" />';
		}
		else
		{
			echo '<base href="'.SITE_URL.'" />';;
		}
		
		if(isset($config["target"]))
		{
			echo '<base target="'.$config["target"].'" />';
		}
		else
		{
			echo '<base target="_blank" />';
		}
		
		echo '<script type="text/javascript" src="'.SITE_URL.'/js/fastweb.js"></script>';
		echo '<link href="'.SITE_URL.'/css/fastweb.css" rel="stylesheet" type="text/css" />';
		
		if(isset($config["css"]))
		{
			foreach ($config["css"] as $val)
			{
				echo '<link href="'.$val.'" rel="stylesheet" type="text/css" />';
			}
		}
		
		if(isset($config["js"]))
		{
			foreach ($config["js"] as $val)
			{
				echo '<script type="text/javascript" src="'.$val.'"></script>';
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


class CTab
{
	private $iMax;
	private $iCur;
	
	function __construct($arr)
	{
		$this->id = count($arr);
		$this->iCur = 1;
		$this->Init($arr);
	}
	
	function Init($arr)
	{
		StartDiv(array("id" => "fastweb_tab_box"));
		StartUl(array("id" => "fastweb_tab_box_nav"));
		for($i = 1; $i<= $this->id; ++$i)
		{
			StartLi();
			AddLink(array("text" => $arr[$i - 1], "href" => "#fastweb_tab_box_tab".(string)$i, "target" => "_self"));
			EndLi();
		}
		EndUl();
		StartDiv(array("id" => "fastweb_tab_box_content"));
	}
	
	function StartTab()
	{
		StartDiv(array("id" => "fastweb_tab_box_tab".(string)$this->iCur));
		++$this->iCur;
	}
	
	function EndTab()
	{
		EndDiv();
	}
	
	function __destruct()
	{
		EndDiv();
		EndDiv();
	}
}

?>
