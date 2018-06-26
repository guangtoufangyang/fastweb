<?php


$dataTable = array(
	"libai" => '
		{"title":"静夜思", "author":"李白", "paragraph":["床前明月光，", "疑是地上霜，", "举头望明月，", "低头思故乡。"]}
	',
	"index1" => '
		{"title":"fastweb介绍", "paragraph":["像写后台一样设计前端"]}
	',
	"table1" => '
		{"title":"table使用方法(1)", "paragraph":["CTable::SetTdColor(array());指定每一行的背景颜色"]}
	',
	"table2" => '
		{"title":"table使用方法(2)", "paragraph":["CTable::SetTrMouse();设置鼠标滑过/离开时的行背景色",
			"CTable::SetWidthArr();设置每列的宽度"]}
	',
	"table3" => '
		{"title":"table使用方法(3)", "paragraph":["CTable::AddTd();可指定占多行多列"]}
	',
	
	"page1" => '
		{"title":"AddPageTurningBySize翻页", "paragraph":["指定当前页码和链接前缀生成翻页代码"]}
	',
	"page2" => '
		{"title":"AddPageTurning翻页", "paragraph":["指定最小页码|最大页码|当前页码|链接前缀生成翻页代码"]}
	',
	"tree1" => '
		{"title":"无限级树生成", "paragraph":["CTree::StartBranch开始一个树干","CTree::AddLeaf添加叶子节点","CTree::EndBranch结束一个树干"]}
	',
	"video1" => '
		{"title":"AddVideoSwf添加swf", "paragraph":["指定swf地址|高度|宽度添加swf视频"]}
	',
	"crumb1" => '
		{"title":"AddCrumb添加面包屑导航", "paragraph":["AddCrumb(array(array(\"href\" => \"#\", \"text\" => \"首页\"), array(\"href\" => \"#\", \"text\" => \"频道\"), array(\"href\" => \"#\", \"text\" => \"栏目\"), array( \"text\" => \"fastweb\")));"]}
	',
	"close1" => '
		{"title":"点击关闭模块", "paragraph":["new CCloseBlock()创建一个点击关闭模块对象","unset之前添加模块中包含的内容", "目前仅支持位置为fixed的块内容"]}
	',
	"tab1" => '
		{"title":"选项卡模块", "paragraph":["new CTab()时传入选项卡名称数组","StartTab表示一个tab开始", "EndTab表示一个tab结束", "注意：包含tab功能的页面<head><base>必须为当前页面"]}
	',
	"doc1" => '
		{"title":"AddDoc添加文章", "paragraph":["{\"title\":\"静夜思\",\"author\":\"李白\",\"paragraph\":[\"床前明月光，\",\"疑是地上霜，\",\"举头望明月，\",\"低头思故乡。\"]}"]}
	',
	"menu1" => '
		{"title":"AddNavigationL1添加导航栏"}
	',
	"menu2" => '
		{"title":"AddMenuH添加水平二级菜单"}
	',
	"menu3" => '
		{"title":"AddMenuV添加垂直二级菜单"}
	',
	"pos1" => '
		{"paragraph":["fastweb_pos_left:靠左","fastweb_pos_right:靠右","fastweb_pos_top:靠上","fastweb_pos_bottom:靠下",
			"fastweb_pos_left_top:左上角","fastweb_pos_right_top:右上角","fastweb_pos_left_bottom:左下角","fastweb_pos_right_bottom:右下角",
			"fastweb_pos_left_middle:左边中间","fastweb_pos_right_middle:右边中间","fastweb_pos_top_middle:上面中间","fastweb_pos_bottom_middle:下面中间",
			"fastweb_pos_fixed:固定位置"]}
	',
	"opacity1" => '
		{"paragraph":["fastweb_opacity_10:10%透明","fastweb_opacity_20:20%透明","fastweb_opacity_30:30%透明","fastweb_opacity_40:40%透明",
		"fastweb_opacity_50:50%透明","fastweb_opacity_60:60%透明","fastweb_opacity_70:70%透明","fastweb_opacity_80:80%透明","fastweb_opacity_90:90%透明"]}
	',
	
	
	

	
	
	/*"libai" => array("title" => "静夜思", "author" => "李白", "paragraph" => array("床前明月光，", "疑是地上霜，", "举头望明月，", "低头思故乡。")),*/
	"fastweb" => array("title" => "title", "info" => array(array("link" => "#", "text" => "fastweb"), array("link" => "#", "text" => "fastweb"),array("link" => "#", "text" => "fastweb"),array("link" => "#", "text" => "fastweb"),array("link" => "#", "text" => "fastweb"),array("link" => "#", "text" => "fastweb"))),
	"liH" => array(array("name" => "菜单1", "list" => array(array("name" => "子菜单11", "link" => "#"),array("name" => "子菜单12", "link" => "#"),array("name" => "子菜单13", "link" => "#"))),array("name" => "菜单2", "list" => array(array("name" => "子菜单21", "link" => "#"),array("name" => "子菜单22", "link" => "#"),array("name" => "子菜单23", "link" => "#"))),array("name" => "菜单3", "list" => array(array("name" => "子菜单31", "link" => "#"),array("name" => "子菜单32", "link" => "#"),array("name" => "子菜单33", "link" => "#")))),
	"option" => array("options" => array(array("value" => "v1", "text" => "选项1"),array("value" => "v2", "text" => "选项2"),array("value" => "v3", "text" => "选项3"))),
	"checkbox" => array(array("value" => "v1", "text" => "选项1", "checked" => true),array("value" => "v2", "text" => "选项2"),array("value" => "v3", "text" => "选项3")),
	"tree" => array(array("name" => "branch", "text" => "树干", "leaf" => array(array("name" => "leaf", "href" => "#", "text" => "leaf"), array("name" => "leaf", "href" => "#", "text" => "leaf"),array("name" => "branch", "text" => "树干", "leaf" => array(array("name" => "leaf", "href" => "#", "text" => "leaf"), array("name" => "leaf", "href" => "#", "text" => "leaf"))),array("name" => "branch", "text" => "树干", "leaf" => array(array("name" => "leaf", "href" => "#", "text" => "leaf"), array("name" => "leaf", "href" => "#", "text" => "leaf"))))), array("name" => "branch", "text" => "树干", "leaf" => array(array("name" => "leaf", "href" => "#", "text" => "leaf"), array("name" => "leaf", "href" => "#", "text" => "leaf")))),
	
);

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
		{"name":"leaf", "text":"点击关闭模块", "href":"close.php"}
	]},
	{"name":"branch", "text":"属性", "leaf":[
		{"name":"leaf", "text":"固定位置", "href":"pos.php"},
		{"name":"leaf", "text":"透明度", "href":"opacity.php"}
	]},
	{"name":"branch", "text":"一个混乱的页面", "href":"index1.php", "leaf":[]}
	]
	';


function DataGetByKey($k, &$data)
{
	global $dataTable;
	if(array_key_exists($k, $dataTable))
	{
		$data = $dataTable[$k];
		return true;
	}
	
	return false;
}

?>
