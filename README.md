# fastweb
Create a simple website.



## 1. 功能描述：
* “fastweb”是通过提供一系列的接口，让用户通过调接口的方式实现快速建站，并达到易于维护的目的。
* 其中，接口又包括两个方面：
* 一是“fastweb”中直接提供的接口；
* 二是让用户了解到“模块化”的思想之后，实现的独有的私有接口；



## 2. 接口描述：
* “fastweb”中将“接口”分为三个层级：
* 一是直接对html标签的封装，调用此类接口，仅仅是实现html标签的另一种写法；
* 二是简单功能模块的封装，直接调用此类接口，用户需要提供具体的数据；
* 三是高度封装化的接口，调用者通过传入一个key值，接口实现数据的获取及显示；
* 当用户大量调用第三类的接口时，将可以极大程度的较少开发时间及维护成本。

## 3. 标签接口规范
* 存在对应结束标签的标签函数以Start开头，如StartDiv，StartUl
* 不存在对应结束标签的标签函数以Add开头，如AddSpan，AddLink
* 为方便了解参数含义大、升级及扩展，标签相关的函数参数为数组，key即为属性名称。

## 4. 演示地址：
* http://www.100pian.com/fastweb/