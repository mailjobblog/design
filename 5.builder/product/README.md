# 生产类说明

## product.php

汽车的主体框架的实现

## makeProduct.php

车间生产类文件，实现汽车每个部件的独立生产

## 代码解析

- 在 `makeProduct` 中定义每个汽车零件生产的`具体方法`
- `product` 中首先定义一个`抽象类AssemblePart`，然后在其中定义生产的步骤 `setPart`
- 然后汽车类去继承这个抽象类 `AssemblePart`，可以在其中实现普通逻辑，然后对于复杂的逻辑用`建造者模式`做
