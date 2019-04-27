<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/4/27
 * Time: 11:19
 */

namespace App\One;

class Two
{

    protected $one;
    public function __construct(One $one)
    {
        $this->one = $one;
    }

    public function useOne()
    {
        $this->one->one();
    }
}