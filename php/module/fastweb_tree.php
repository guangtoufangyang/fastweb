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
* 树形菜单类
*
* 生成目录树结构
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CTree
{
	private $sBranchTag;				//分支标签前缀
	private $iBranchNum;				//当前分支编号
	private $sBranchClass;				//分支的类名
	private $arrCheckBranch;			//需要设置为打开状态的分支数组
	
	/**
	* __construct 
	* 构造函数
	*
	* @access public
	* @param mixed $branchTag		分支的控制关系对应的元素id前缀(一个页面包含多棵树时前缀不能相同)
	* @param mixed $checkBranchArr 	树中需要为打开状态的分支数组,值为对应分支所展示的文字
	* @param mixed $branchClass 	分支的类名(不同的类将展示出不同的样式,目前提供了fastweb_tree_branch和fastweb_tree_nav两种样式选择)
	* @since 1.0
	* @return
	*/
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
	/**
	* StartBranch 
	* 开始一个新的分支
	*
	* @access public
	* @param mixed $text		分支展示的文字
	* @param mixed $href 		包含的跳转链接
	* @since 1.0
	* @return
	*/
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
	/**
	* EndBranch 
	* 结束一个分支
	*
	* @access public
	* @since 1.0
	* @return
	*/
	function EndBranch()
	{
		EndOl();
		EndLi();
	}
	/**
	* AddLeaf 
	* 添加一个节点
	*
	* @access public
	* @param mixed $text		节点展示的文字
	* @param mixed $href 		节点的跳转链接
	* @since 1.0
	* @return
	*/
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
	/**
	* AddTreeData 
	* 添加一个树
	*
	* @access public
	* @param mixed $data		包含分支和节点信息的指定格式的数组
	* @since 1.0
	* @return
	*/
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


?>