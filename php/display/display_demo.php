<?php


/**
* 基础的html封装
* 
* 对基本的html标签的封装
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/

require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_module.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/fastweb/php/fastweb_data.php';

$funcList = '
	[
	{"name":"branch", "text":"首页", "href":"index.php", "leaf":[]},
	{"name":"branch", "text":"基本功能", "leaf":[
		{"name":"leaf", "text":"table", "href":"table.php"}
	]},
	{"name":"branch", "text":"功能模块", "leaf":[
		{"name":"leaf", "text":"翻页", "href":"page.php"},
		{"name":"leaf", "text":"树", "href":"tree.php"},
		{"name":"leaf", "text":"添加视频", "href":"video.php"},
		{"name":"leaf", "text":"面包屑", "href":"crumb.php"},
		{"name":"leaf", "text":"tab模块", "href":"tab.php"},
		{"name":"leaf", "text":"文章模块", "href":"doc.php"},
		{"name":"leaf", "text":"菜单模块", "href":"menu.php"},
		{"name":"leaf", "text":"搜索框", "href":"search.php"},
		{"name":"leaf", "text":"弹窗", "href":"popup.php"},
		{"name":"leaf", "text":"新闻", "href":"new.php"},
		{"name":"leaf", "text":"滚动播放", "href":"rollplay.php"},
		{"name":"leaf", "text":"添加文本", "href":"document.php"},
		{"name":"leaf", "text":"点击关闭模块", "href":"close.php"}
	]},
	{"name":"branch", "text":"属性", "leaf":[
		{"name":"leaf", "text":"固定位置", "href":"pos.php"},
		{"name":"leaf", "text":"透明度", "href":"opacity.php"}
	]}
	]
	';

/**
* DisplayFastwebFunclist 
* 显示功能导航树
*
* @access
* @param mixed $openNode		需要打开的节点
* @since 1.0
* @return
*/
function DisplayFastwebFunclist($openNode)
{
	global $funcList;
	$data = json_decode($funcList, true);
	$tree = new CTree("funclist_", array($openNode), "fastweb_tree_nav");
	$tree->AddTreeData($data);
	unset($tree);
}

/**
* DisplayHead 
* 显示head信息
*
* @access
* @param mixed $para		head配置
* @since 1.0
* @return
*/
function DisplayHead($para = array())
{
	$head = new CHead();
	$head->HeadConfig($para);
	unset($head);
}

/**
* DisplayTop 
* 显示顶部
*
* @access
* @param mixed
* @since 1.0
* @return
*/
function DisplayTop()
{
	StartDiv(array("class" => "fastweb_div_frame", "style" => "background-color:#2f3e45;"));
	StartDiv(array("class" => "fastweb_div_middle", "style" => "background-color:#2f3e45;line-height:50px;"));
		AddSpan(array(), "fastweb真是简单啊！");
	EndDiv();
	EndDiv();
}

/**
* DisplayText 
* 显示文本
*
* @access
* @param mixed $k		数据的key值
* @since 1.0
* @return
*/
function DisplayText($k)
{
	if(DataGetByKey($k, $data))
	{
		AddDoc($data);
	}
}

/**
* DisplayNew 
* 显示一段新闻
*
* @access
* @param mixed $k		数据的key值
* @since 1.0
* @return
*/
function DisplayNew($k)
{
	if(DataGetByKey($k, $data, false))
	{
		AddNew($data);
	}
}

/**
* DisplayNew 
* 显示一段新闻
*
* @access
* @param mixed $k		数据的key值
* @param mixed $cnt		每行数据条数
* @since 1.0
* @return
*/
function DisplayNew2($k, $cnt)
{
	if(DataGetByKey($k, $data, false))
	{
		AddNew2($data, $cnt);
	}
}

/**
* DisplayMenuH 
* 显示水平菜单
*
* @access
* @param mixed $k		数据的key值
* @since 1.0
* @return
*/
function DisplayMenuH($k)
{
	if(DataGetByKey($k, $data, false))
	{
		AddMenuH($data);
	}
}

/**
* DisplayMenuH 
* 显示垂直菜单
*
* @access
* @param mixed $k		数据的key值
* @since 1.0
* @return
*/
function DisplayMenuV($k)
{
	if(DataGetByKey($k, $data, false))
	{
		AddMenuV($data);
		ClearFloat();
	}
}

/**
* DisplayMenuH 
* 显示单选框
*
* @access
* @param mixed $k		数据的key值
* @since 1.0
* @return
*/
function DisplayOptions($k)
{
	if(DataGetByKey($k, $data, false))
	{
		AddSelect(array(), $data);
	}
}

/**
* DisplayCheckbox 
* 显示多选框
*
* @access
* @param mixed $k		数据的key值
* @since 1.0
* @return
*/
function DisplayCheckbox($k)
{
	if(DataGetByKey($k, $data, false))
	{
		foreach ($data as $val)
		{
			AddCheckBox($val, $val["text"]);
		}
	}
}

/**
* DisplayTree 
* 显示一棵树
*
* @access
* @param mixed $k			数据的key值
* @param mixed $branchTag	树的唯一标志
* @since 1.0
* @return
*/
function DisplayTree($k, $branchTag = "")
{
	if(!DataGetByKey($k, $data))
	{
		return;
	}
	
	if(empty($branchTag))
	{
		AddTree($data);
	}
	else
	{
		AddTree($data, $branchTag);
	}
}

?>