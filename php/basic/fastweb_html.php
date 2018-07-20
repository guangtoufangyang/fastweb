<?php


/**
* 基础的html封装
* 
* 对基本的html标签的封装
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/




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




?>
