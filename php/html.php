<?php

define("SITE_URL","http://localhost/fastweb/",TRUE);
define("ROOT_PATH",rtrim($_SERVER['DOCUMENT_ROOT'],'/'),true);
define("GLOBAL_HTML",ROOT_PATH.'/fastweb/html/',TRUE);

function AddSpan($t, $c = '', $s = ''){
	echo '<span class="'.$c.'" style="'.$s.'">'.$t.'</span>';
}



function AddLink($link, $text){
	echo ' <a href ="'.$link.'"><span>'.$text.'</span></a><br>';
}

function AddLiWithLink($link, $text, $c = '', $s = ''){
	echo ' <li class="'.$c.'" style="'.$s.'"><a href ="'.$link.'">'.$text.'</a></li>';
}

function AddRadio($checked = false, $name = '', $c = '', $id = ''){
	echo '<input type="radio" name="'.$name.'" class="'.$c.'" id="'.$id.'"';
	if($checked)
	{
		echo 'checked';
	}
	echo '>';
}

function AddLabel($text, $c = '', $for = ''){
	echo '<lable ';
	if(!empty($for))
	{
		echo 'for="'.$for.'"';
	}
	if(!empty($c))
	{
		echo 'class="'.$c.'"';
	}
	echo '>'.$text.'</lable>';
}

function LiStartWithLink($link, $text, $c = '', $s = ''){
	echo ' <li class="'.$c.'" style="'.$s.'"><a href ="'.$link.'">'.$text.'</a>';
}

function LiEnd(){
	echo '</li>';
}

function NavStart($c = '', $s = ''){
	echo '<nav';
	if(!empty($c))
	{
		echo ' class ="'.$c.'"'; 
	}
	if(!empty($s))
	{
		echo ' style ="'.$s.'"'; 
	}
	echo '>';
}

function NavEnd(){
	echo '</nav>';
}

function UlStart($c = '', $s = ''){
	echo '<ul';
	if(!empty($c))
	{
		echo ' class ="'.$c.'"'; 
	}
	if(!empty($s))
	{
		echo ' style ="'.$s.'"'; 
	}
	echo '>';
}

function UlEnd(){
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
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
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
class CHtmlBody
{
	function __construct($c){
		echo '<body class ="'.$c.'" topMargin=0 leftMargin=0 rightMargin=0>';
	}
	function __destruct(){
		echo '</body>';
	}
}
class CDiv
{
	function __construct($c = '', $s = ''){
		echo '<div';
		if(!empty($c))
		{
			echo ' class ="'.$c.'"'; 
		}
		if(!empty($s))
		{
			echo ' style ="'.$s.'"'; 
		}
		echo '>';
	}
	function __destruct(){
		echo '</div>';
	}
}

class CSimpleDiv
{
	function __construct($s = '')
	{
		echo '<div class="fastweb_div_simple"';
		if(!empty($s))
		{
			echo ' style="'.$s;
		}
		echo '">';
	}
	
	function __destruct(){
		echo '</div>';
	}
}
/*
class CUl
{
	function __construct($c = '', $s = ''){
		echo '<ul class="'.$c.'" style="'.$s.'">';
	}
	function __destruct(){
		echo '</ul>';
	}
}
*/


class CDocument
{
	public $paragraphDiv;
	function __construct()
	{
	}
	
	function __destruct()
	{
	}
	
	function AddTitle($t, $s = '')
	{
		$d = new CSimpleDiv("fastweb_p_title", $s);
		AddSpan($t);
		unset($d);
	}
	
	function AddAuthor($t)
	{
		$d = new CSimpleDiv("fastweb_p_author");
		AddSpan($t);
		unset($d);
	}

	function ParagraphStart()
	{
		$this->paragraphDiv = new CSimpleDiv("fastweb_p_text");
	}
	
	function ParagraphEnd()
	{
		unset($this->paragraphDiv);
	}
}


class CTab
{
	private $id;
	private $divContainer;
	private $divWrapper;
	private $divContent;
	
	function __construct()
	{
		$this->id = 1;
		$this->divContainer = new CDiv("fastweb_tab_container");
		$this->divWrapper = new CDiv("fastweb_tab_wrapper");
	}
	
	function TabStart($name)
	{
		
		echo '<input type="radio" name="fastweb_tab_radio" class="fastweb_tab_radio" id="fastweb_tab_radio_'.$this->id.'" ';
			
		if(1 == $this->id)
		{
			echo 'checked';
		}	
		echo '>';		
		echo '<label for="fastweb_tab_radio_'.$this->id.'" class="fastweb_tab_handler fastweb_tab_handler_'.$this->id.'">'.$name.'</label>';
			
		$this->divContent = new CDiv("tab-content tab-content-1");
	}
	
	function TabEnd()
	{
		unset($this->divContent);
		++$this->id;
	}
	
	function __destruct()
	{
		unset($this->divWrapper);
		unset($this->divContainer);
	}
}

?>
