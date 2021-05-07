# 建造者模式 ｜ 原型模式

## 测试

```bash
php test.php
```

## 文件目录

```angular2html
---builder
------builder.php
------director.php

---product
------product.php
------makeProduct.php

--- test.php
```

## 代码解析

- builder.php 文件中 `BuilderInterface{}` 作为建造者接口设定了建造汽车的每个步骤，`TruckBuilder{}` 和 `CarBuilder{}` 实现了它
- makeProduct.php 文件中，`Engine{}` 、`Tyre{}` 、`Door{}` 、定义了建造汽车部件的具体内容
- product.php 文件中，`AssemblePart{}` 定义了组装汽车的方法。`Truck{}` 和 `Farm{}` 则继承了 `AssemblePart{}` 获取组装部件的方法
- `Director{}` 的 `build()` 让车构造了起来