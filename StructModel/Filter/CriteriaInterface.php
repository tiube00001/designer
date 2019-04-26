<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/16
 * Time: 10:21
 */

namespace Filter;
interface CriteriaInterface
{
    /**
     * @param PersonInterface[] $persons
     * @return PersonInterface[]
     */
    public function meetCriteria(array $persons): array;
}