# 适配器模式

## 测试输出

```bash
php test.php
```

## 文件说明

- Adaptee.php 目标类
- Adapter.php 适配器类

## 实现说明

### Adaptee

- 目标类中，实现了，对于 黄色车身 和 红色车身 的 涂改 和 检查 工作

### Adapter

- 适配器类中，负责进行兼容性处理，和调用目标类中的方法