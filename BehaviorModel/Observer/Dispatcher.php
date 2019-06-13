<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 14:50
 */
namespace Observer;

class Dispatcher implements DispatcherInterface
{
    protected $listener;
    private static $instance;

    private final function __construct()
    {

    }

    public function register(string $eventName, string $listenerName)
    {
        $this->listener[$eventName][] = $listenerName;
    }

    public function remove(string $eventName, string $listenerName)
    {
        $arr = $this->listener[$eventName];
        if ($arr) {
            $this->listener[$eventName] = array_merge(array_diff($arr, [$listenerName]));
        }

    }

    public function flush(string $eventName)
    {
        unset($this->listener[$eventName]);
    }

    public function dispatcher(object $event)
    {
        $key = get_class($event);
        if ($arr = empty($this->listener[$key]) ? false : $this->listener[$key]) {
            foreach ($arr as $item) {
                (new $item())->run($event);
            }
        }
    }

    /**
     * @return static
     */
    public static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

}