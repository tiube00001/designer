<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/5
 * Time: 11:15
 */

namespace Strategy;

class Travel
{
    /** @var Transport $transport */
    protected $transport;
    public function setTransport(Transport $transport)
    {
        $this->transport = $transport;
    }

    public function go()
    {
        echo $this->transport->use().'，去旅行';
    }
}