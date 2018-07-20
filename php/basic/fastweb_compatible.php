<?php


/**
* 基础的html封装
* 
* 对基本的html标签的封装
* @作者			光头放羊<bingzhao456@163.com>
* @版本			1.0
*/

/**
* CompatibleAnimation 
* 输出兼容的动画效果
*
* @access
* @param mixed $animation		动画内容
* @since 1.0
* @return
*/
function CompatibleAnimation($animation)
{
	echo '-webkit-animation: '.$animation.';'.PHP_EOL;
	echo '-moz-animation: '.$animation.';'.PHP_EOL;
	echo '-o-animation: '.$animation.';'.PHP_EOL;
	echo 'animation: '.$animation.';'.PHP_EOL;
}

/**
* CompatibleTransform 
* 输出兼容的翻转效果
*
* @access
* @param mixed $animation		翻转内容
* @since 1.0
* @return
*/		
function CompatibleTransform($transform)
{
	echo '-webkit-transform: '.$transform.';'.PHP_EOL;
	echo '-ms-transform: '.$transform.';'.PHP_EOL;
	echo '-o-transform: '.$transform.';'.PHP_EOL;
	echo 'transform: '.$transform.';'.PHP_EOL;
}


?>