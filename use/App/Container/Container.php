<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/4/26
 * Time: 13:41
 */

namespace App\Container;

use http\Exception;
use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    //容器单例
    protected static $instance;

    /**
     * 存放类名
     * @var array $class
     */
    protected $bind;

    public static function getInstance()
    {
        //使用static，使之在子类调用的时候，能够让子类获取到自身的示例，而不是Container类的实例
        if (!static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }

    public static function setInstance(Container $obj)
    {
        static::$instance = $obj;
    }

    public function bind(string $class, object $obj = null, bool $isSingle = false): void
    {
        if ($obj && $obj instanceof $class) {
            throw new \Exception('参数异常');
        }

        $this->bind[$class] = [
            'obj' => $obj,
            'isSingle' => $isSingle
        ];
    }

    public function get($id)
    {
        return $this->bind[$id]['obj'] ?? null;
    }

    public function has($id)
    {
        return !empty($this->bind[$id]['obj']);
    }


}