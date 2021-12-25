# 迭代器模式

PHP中的Iterator接口已经为我们准备好了一套标准的Iterator模式的实现，而且（这里需要画重点），实现这个接口的类可以用foreach来遍历哦！

- 文档：https://www.php.net/manual/zh/class.iterator.php
- SPL迭代器：https://www.php.net/manual/zh/spl.iterators.php

## 介绍

迭代器模式（Iterator Pattern）是 Java 和 .Net 编程环境中非常常用的设计模式。  
这种模式用于顺序访问集合对象的元素，不需要知道集合对象的底层表示。迭代器模式属于行为型模式。  
因为php中有 foreach , 所以导致迭代器模式在php变得比较路人。  