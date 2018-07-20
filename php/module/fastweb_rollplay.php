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
* 垂直滚动模块
*
* 制作一个垂直滚动模块
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CVerticalRollDiv{
	private $iHeight;
	private $sName;
	private $sRollCycle;
	
	/**
	* __construct 
	* 构造函数
	*
	* @access public
	* @param mixed $height			模块的高度
	* @param mixed $rollCycle		循环周期
	* @param mixed $name			模块名称,一个页面存在多个CVerticalRollDiv时需要指定不同值
	* @since 1.0
	* @return
	*/
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
	
	/**
	* RollCss 
	* 生成对应的css文件
	*
	* @access private
	* @since 1.0
	* @return
	*/
	private function RollCss()
	{
		echo '<style type="text/css">'.PHP_EOL;
		
		
		echo 'div.'.$this->sName.'{'.PHP_EOL;
		echo 'display: inline-block;'.PHP_EOL;
		echo 'white-space: nowrap;'.PHP_EOL;
		CompatibleAnimation($this->sRollCycle.' '.$this->sName.'_loop linear infinite normal;');
		echo '}'.PHP_EOL;

		echo '@keyframes '.$this->sName.'_loop{'.PHP_EOL;
		echo '0% {'.PHP_EOL;
		CompatibleTransform('translateY('.$this->iHeight.');');
		echo '}'.PHP_EOL;
		echo '100% {'.PHP_EOL;
		CompatibleTransform('translateX(-'.$this->iHeight.');');
		CompatibleTransform('translateY(-'.$this->iHeight.');');
		echo '}'.PHP_EOL;
		echo '}'.PHP_EOL;
		
		echo '</style>'.PHP_EOL;
	}
}


/**
* 水平滚动模块
*
* 制作一个水平滚动模块
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CHorizontalRollDiv{
	private $iWidth;
	private $sName;
	private $sRollCycle;
	/**
	* __construct 
	* 构造函数
	*
	* @access public
	* @param mixed $width			模块的宽度
	* @param mixed $rollCycle		循环周期
	* @param mixed $name			模块名称,一个页面存在多个CVerticalRollDiv时需要指定不同值
	* @since 1.0
	* @return
	*/
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
	
	/**
	* RollCss 
	* 生成对应的css文件
	*
	* @access private
	* @since 1.0
	* @return
	*/
	private function RollCss()
	{
		echo '<style type="text/css">'.PHP_EOL;
		
		
		echo 'div.'.$this->sName.'{'.PHP_EOL;
		echo 'display: inline-block;'.PHP_EOL;
		echo 'white-space: nowrap;'.PHP_EOL;
		CompatibleAnimation($this->sRollCycle.' '.$this->sName.'_loop linear infinite normal;');
		echo '}'.PHP_EOL;

		echo '@keyframes '.$this->sName.'_loop{'.PHP_EOL;
		echo '0% {'.PHP_EOL;
		CompatibleTransform('translateX('.$this->iWidth.');');
		echo '}'.PHP_EOL;
		echo '100% {'.PHP_EOL;
		CompatibleTransform('translateX(-'.$this->iWidth.');');
		echo '}'.PHP_EOL;
		echo '}'.PHP_EOL;
		
		echo '</style>'.PHP_EOL;
	}
}

/**
* 水平滚动播放类
*
* 生成一个由多个显示区域组合成的水平滚动播放模块
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CHorizontalRollPlay{
	private $iWidth;				//显示区宽度
	private $iHeight;				//显示区高度
	private $sSlide;				//滑动窗口的类名
	private $sContain;				//
	private $iCnt;					//独立显示区数量
	private $iRollCycle;			//循环播放周期

	/**
	* __construct 
	* 构造函数
	*
	* @access public
	* @param mixed $width			显示出来的窗口宽度，必须是数字格式
	* @param mixed $height			显示出来的窗口高度
	* @param mixed $rollCycle		循环周期
	* @param mixed $slide			滑动窗口的类名,当一个页面存在多个CRollPlay时需要指定不同值
	* @since 1.0
	* @return
	*/
	public function __construct($width = 600, $height="200px", $rollCycle = "10s", $slide = "fastweb_rollplay_slide"){
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
	
	/**
	* RollCss 
	* 生成对应的css样式
	*
	* @access private
	* @since 1.0
	* @return
	*/
	private function RollCss()
	{
		echo '<style type="text/css">'.PHP_EOL;
		
		echo 'div.'.$this->sContain.' ul.'.$this->sSlide.'{'.PHP_EOL;
		echo 'width:'.($this->iWidth * $this->iCnt).'px;'.PHP_EOL;
		CompatibleAnimation($this->sSlide.'_frames '.$this->iRollCycle.' infinite;');
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
	
	/**
	* RollStart 
	* 开始一个显示区域
	*
	* @access public
	* @since 1.0
	* @return
	*/
	public function RollStart()
	{
		++$this->iCnt;
		StartLi(array("style" => "width:".(string)$this->iWidth."px;height:".$this->iHeight.";"));
		StartDiv(array("style" => "width:100%;height:auto;"));
	}
	
	/**
	* RollEnd 
	* 结束一个显示区域
	*
	* @access public
	* @since 1.0
	* @return
	*/
	public function RollEnd()
	{
		EndDiv();
		EndLi();
	}
	
	/**
	* AddRollImg 
	* 添加一个带有指定图片的显示区域
	*
	* @access public
	* @param mixed $src				图片地址
	* @param mixed $href			超链接地址,为空则表示不带有超链接
	* @since 1.0
	* @return
	*/
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


/**
* 垂直滚动播放类
*
* 生成一个由多个显示区域组合成的垂直滚动播放模块
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CVerticalRollPlay{
	private $iRollCnt;				//独立播放区数量
	private $iHeight;				//播放区高度
	private $iAngle1;				//单次旋转角度
	//private $iAngle2;				//
	private $sCycle;				//循环播放周期
	private $sAnimationName;		//动画名称前缀
	private $sBackground;			//显示区背景色
	
	/**
	* __construct 
	* 构造函数
	*
	* @access public
	* @param mixed $height			显示出来的窗口高度，必须是数字格式
	* @param mixed $cycle			循环周期
	* @param mixed $background		显示区的背景色
	* @param mixed $animationName	动画名称,页面存在多个垂直播放模块时，必须定义不同的播放动画名称
	* @since 1.0
	* @return
	*/
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
	
	/**
	* RollCss 
	* 生成对应的css样式
	*
	* @access private
	* @since 1.0
	* @return
	*/
	private function RollCss()
	{
		if($this->iRollCnt < 1) return;
		$this->iAngle1 = 360 / $this->iRollCnt;
		//$this->iAngle2 = 360 / ($this->iRollCnt + 1);
		echo '<style type="text/css">'.PHP_EOL;
		for($i = 1; $i <= $this->iRollCnt; ++$i)
		{
			echo 'div.fastweb_vertical_rollplay_contain>div:nth-child('.(string)$i.'){'.PHP_EOL;
			CompatibleTransform('rotatex('.(string)($this->iAngle1*($this->iRollCnt - $i)).'deg) translatez('.(string)($this->iHeight/2).'px);');
			echo '}'.PHP_EOL;
		}
		
		
		echo 'div.fastweb_vertical_rollplay_contain{'.PHP_EOL;
		CompatibleAnimation($this->sAnimationName.' '.$this->sCycle.' linear infinite;');
		echo '}'.PHP_EOL;
		
		echo '@keyframes '.$this->sAnimationName.'{'.PHP_EOL;
		
		for($i = 0; $i < $this->iRollCnt; ++$i)
		{
			echo (string)($i*100/$this->iRollCnt).'%{'.PHP_EOL;
			
			CompatibleTransform('rotatex('.(string)($this->iAngle1 * $i).'deg);');
			echo '}'.PHP_EOL;
			
			//添加过渡比例时的位置，防止一直平滑播放
			echo (string)(($i + 0.5)*100/$this->iRollCnt).'%{'.PHP_EOL;
			CompatibleTransform('rotatex('.(string)($this->iAngle1 * $i).'deg);');
			echo '}'.PHP_EOL;
		}
		
		echo '100%{'.PHP_EOL;
		CompatibleTransform('rotatex(360deg)');
		echo '}'.PHP_EOL;
		echo '}'.PHP_EOL;
		echo '</style>';
	}
	
	/**
	* RollStart 
	* 开始一个显示区域
	*
	* @access public
	* @since 1.0
	* @return
	*/
	public function RollStart()
	{
		++$this->iRollCnt;
		StartSimpleDiv(array("style" => "height:".$this->iHeight."px;background-color:".$this->sBackground.";"));
	}
	
	/**
	* RollEnd 
	* 结束一个显示区域
	*
	* @access public
	* @since 1.0
	* @return
	*/
	public function RollEnd()
	{
		EndDiv();
	}
	
	/**
	* AddRollImg 
	* 添加一个带有指定图片的显示区域
	*
	* @access public
	* @param mixed $src				图片地址
	* @param mixed $href			超链接地址,为空则表示不带有超链接
	* @since 1.0
	* @return
	*/
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


?>