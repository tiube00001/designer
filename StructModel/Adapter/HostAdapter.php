<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/13
 * Time: 10:15
 */

namespace Adapter;

class HostAdapter implements HostAdapterInterface
{
    protected $pc;
    protected $suit;

    protected $host;
    public function __construct(PcInterface $pc, SuitInterface $suit, string $host)
    {
        $this->pc = $pc;
        $this->suit = $suit;
        $this->host = $host;
    }

    public function dressAndWork()
    {
        // TODO: Implement dressAndWork() method.
        echo $this->host . PHP_EOL;
        $this->suit->dress();
        $this->pc->work();
    }

    public function dressAndPlayGame()
    {
        // TODO: Implement dressAndPlayGame() method.
        echo $this->host . PHP_EOL;
        $this->suit->dress();
        $this->pc->playGame();
    }
}