<?php


/**
* 网站全局配置
* 
* 定义用到的一些变量及配置项
* @作者			光头放羊(bingzhao456@163.com)
* @版本			1.0
*/

define("SITE_URL","http://localhost/fastweb/",TRUE);
define("ROOT_PATH",rtrim($_SERVER['DOCUMENT_ROOT'],'/'),true);
define("GLOBAL_HTML",ROOT_PATH.'/fastweb/html/',TRUE);
define("GLOBAL_IMG",ROOT_PATH.'/fastweb/image/',TRUE);

?>
