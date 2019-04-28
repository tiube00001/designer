<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/4/26
 * Time: 13:41
 */

namespace App\Container;

use Psr\Container\ContainerInterface;
use ReflectionParameter;
use ReflectionClass;
use Exception;

class Container implements ContainerInterface
{
    //容器单例
    protected static $instance;
    protected $stack = [];

    protected $obj = [];

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

    public function bind($className)
    {
        $this->bind[] = $className;
    }

    public function resolve($className)
    {
        if (!class_exists($className)) {
            throw new Exception('类不存在');
        }

        $reflect = new ReflectionClass($className);

        //没有构造函数
        $constructor = $reflect->getConstructor();
        if (!$constructor) {
            return new $className;
        }

        //构造函数没有参数
        $params = $constructor->getParameters();
        if (!$params) {
            return new $className;
        }

        $list = $this->depend($params);
        if (!$list) {
            return new $className;
        }
        return $reflect->newInstanceArgs($list);
    }

    /**
     * @param ReflectionParameter[] $params
     * @return array
     */
    public function depend(array $params) {
        $list = [];
        foreach ($params as $param) {
            if ($param->getClass()) {
                $list[] = $this->resolveClassName($param->getClass()->name);
            }
        }

        return $list;
    }

    protected function resolveClassName($className)
    {
        return $this->resolve($className);
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