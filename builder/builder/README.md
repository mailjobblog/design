# 建造者类说明

## builder.php

实现对于不同汽车类型，然后根据需求给到零件用例

## director.php

注入 builder 里面一个或者多个方法，然后构建一个复杂的对象

## 代码解析

- 首先在 builder 文件中，定义一个基础的建造者接口类 BuilderInterface，定义一些复杂对象的接口类
- 定义某一个汽车的建造者类，并且继承接口类 BuilderInterface，然后在方法中实现这些发咋对象的具体方法
- director 文件中，提供了一个调用的入口，用于构建这个生产对象