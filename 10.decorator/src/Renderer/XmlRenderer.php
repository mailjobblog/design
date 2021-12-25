<?php
namespace Design\Src\Renderer;

/**
 * 创建 Xml 修饰者并继承抽象类 RendererDecorator 。
 */
class XmlRenderer extends RendererDecorator
{
    /**
     * 对传入的渲染接口对象进行处理，生成 DOM 数据文件。
     */
    public function renderData(): string
    {
        // 调用目标接口
        $data = $this->targetClass->renderData();

        // 对目标接口的数据进行 "装饰"
        $doc = new \DOMDocument();
        $doc->appendChild($doc->createElement('content', $data));

        return $doc->saveXML();
    }
}