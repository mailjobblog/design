<?php
namespace Design\Src;
/**
 * 原发器
 *
 * 原发器，也可以叫做发起人。它有一个内部状态（state），这个状态可以在不同的情况下进行改变。当某一个事件发生时，需要将这个状态恢复到原先的状态。
 */
class State
{
    const STUDY_GITHUB = 'github.com';
    const STUDY_BAIDU = 'baidu.com';
    const STUDY_CSDN = 'blog.csdn.net';
    const STUDY_GOOGLE = 'www.google.com';

    /**
     * @var string
     */
    private $state;

    /**
     * @var string[]
     */
    private static $validStates = [
        self::STUDY_GITHUB,
        self::STUDY_BAIDU,
        self::STUDY_CSDN,
        self::STUDY_GOOGLE,
    ];

    // 创建备忘录存档
    public function __construct(string $state) {
        self::ensureIsValidState($state);
        $this->state = $state;
    }

    // 读档（还原状态）
    public function __toString(): string {
        return $this->state;
    }

    // 判断状态是否北京被定义
    private static function ensureIsValidState(string $state) {
        if (!in_array($state, self::$validStates)) {
            throw new \InvalidArgumentException('Invalid state given');
        }
    }
}