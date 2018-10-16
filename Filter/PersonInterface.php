<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/16
 * Time: 10:22
 */

namespace Filter;

interface PersonInterface
{
    const SEX_MAN = 'man';
    const SEX_WOMAN = 'woman';
    const MARITAL_YES = 'married';
    const MARITAL_NO = 'single';

    public function getName() :string ;
    public function getSex(): string ;
    public function getMaritalStatus(): string ;
}