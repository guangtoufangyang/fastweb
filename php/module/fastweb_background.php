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
* 动态背景类
*
* 制作一个带有动态背景效果的模块,原理是多个无底纹图片重叠
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/
class CDynamicBackgroundDiv{
	private $sName;						//背景模块的类名前缀
	private $arrImg;					//图层的图片及配置信息
	private $iImgCnt;					//图层数量
	private $sBottomBackground;			//底层模块的背景色
	/**
	* __construct 
	* 构造函数
	*
	* @access public
	* @param mixed $width			模块的宽度
	* @param mixed $height			模块的高度,最好设定像素格式的大小,不能是auto
	* @param mixed $name			背景模块的类名前缀,一个页面存在多个CDynamicBackgroundDiv时需要指定不同值
	* @since 1.0
	* @return
	*/
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
	
	/**
	* StartBottomDiv 
	* 开始最底层模块
	*
	* @access public
	* @since 1.0
	* @return
	*/
	public function StartBottomDiv()
	{
		StartDiv(array("class" => $this->sName."_bottom", "style" => "position:absolute;left:0;top:0;width:100%;height:100%;"));
	}
	
	/**
	* SetBottomBackground 
	* 设置最底层模块的背景色
	*
	* @access public
	* @param mixed $background			背景色
	* @since 1.0
	* @return
	*/
	public function SetBottomBackground($background)
	{
		$this->sBottomBackground = $background;
	}
	
	/**
	* EndBottomDiv 
	* 结束底层模块
	*
	* @access public
	* @since 1.0
	* @return
	*/
	public function EndBottomDiv()
	{
		EndDiv();
	}
	
	/**
	* StartTopDiv 
	* 开始最上层模块
	*
	* @access public
	* @since 1.0
	* @return
	*/
	public function StartTopDiv()
	{
		StartDiv(array("style" => "position:absolute;left:0;top:0;width:100%;height:100%;background:none;"));
	}
	
	/**
	* EndTopDiv 
	* 结束最上层模块
	*
	* @access public
	* @since 1.0
	* @return
	*/
	public function EndTopDiv()
	{
		EndDiv();
	}
	
	/**
	* ImgUpward 
	* 添加一个向上移动的图片层
	*
	* @access public
	* @param mixed $img				图片地址,注意图片必须是无底纹,否则将遮挡更底层的图层
	* @param mixed $height			图片高度像素
	* @param mixed $cycle			图片循环周期
	* @param mixed $seam			是否无缝模式,无缝模式下通过两个图片无缝衔接实现
	* @since 1.0
	* @return
	*/
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
	
	/**
	* ImgDownward 
	* 添加一个向下移动的图片层
	*
	* @access public
	* @param mixed $img				图片地址,注意图片必须是无底纹,否则将遮挡更底层的图层
	* @param mixed $height			图片高度像素
	* @param mixed $cycle			图片循环周期
	* @param mixed $seam			是否无缝模式,无缝模式下通过两个图片无缝衔接实现
	* @since 1.0
	* @return
	*/
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
	
	/**
	* ImgLeftward 
	* 添加一个向左移动的图片层
	*
	* @access public
	* @param mixed $img				图片地址,注意图片必须是无底纹,否则将遮挡更底层的图层
	* @param mixed $height			图片高度像素
	* @param mixed $cycle			图片循环周期
	* @param mixed $seam			是否无缝模式,无缝模式下通过两个图片无缝衔接实现
	* @since 1.0
	* @return
	*/
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
	
	/**
	* ImgRightward 
	* 添加一个向右移动的图片层
	*
	* @access public
	* @param mixed $img				图片地址,注意图片必须是无底纹,否则将遮挡更底层的图层
	* @param mixed $height			图片高度像素
	* @param mixed $cycle			图片循环周期
	* @param mixed $seam			是否无缝模式,无缝模式下通过两个图片无缝衔接实现
	* @since 1.0
	* @return
	*/
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
			CompatibleAnimation($this->sName.'_animation'.(string)$i.' '.$this->arrImg[$i - 1]["cycle"].' linear infinite;');
			CompatibleTransform('translate3d(0, 0, 0);');
			echo '}'.PHP_EOL;
			
			
			$trans = "translateX";
			if(($this->arrImg[$i - 1]["direction"] == 1) || ($this->arrImg[$i - 1]["direction"] == 2))
			{
				$trans = "translateY";
			}
			
			echo '@-webkit-keyframes '.$this->sName.'_animation'.(string)$i.' {'.PHP_EOL;
			echo '0% {'.PHP_EOL;
			CompatibleTransform($trans.'('.$this->arrImg[$i - 1]['from'].');');
			echo '}'.PHP_EOL;
			echo '100% {'.PHP_EOL;
			CompatibleTransform($trans.'('.$this->arrImg[$i - 1]['to'].');');
			echo '}'.PHP_EOL;
			echo '}'.PHP_EOL;
			echo '@-moz-keyframes '.$this->sName.'_animation'.(string)$i.' {'.PHP_EOL;
			echo '0% {'.PHP_EOL;
			CompatibleTransform($trans.'('.$this->arrImg[$i - 1]['from'].');');
			echo '}'.PHP_EOL;
			echo '100% {'.PHP_EOL;
			CompatibleTransform($trans.'('.$this->arrImg[$i - 1]['to'].');');
			echo '}'.PHP_EOL;
			echo '}'.PHP_EOL;
			echo '@keyframes '.$this->sName.'_animation'.(string)$i.' {'.PHP_EOL;
			echo '0% {'.PHP_EOL;
			CompatibleTransform($trans.'('.$this->arrImg[$i - 1]['from'].');');
			echo '}'.PHP_EOL;
			echo '100% {'.PHP_EOL;
			CompatibleTransform($trans.'('.$this->arrImg[$i - 1]['to'].');');
			echo '}'.PHP_EOL;
			echo '}'.PHP_EOL;
		}
		
		echo '</style>'.PHP_EOL;
	}
}


?>