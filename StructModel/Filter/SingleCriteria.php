<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/16
 * Time: 10:53
 */

namespace Filter;

class SingleCriteria implements CriteriaInterface
{
    const MARITAL_NO = PersonInterface::MARITAL_NO;
    /**
     * @param PersonInterface[] $persons
     * @return PersonInterface[]
     */
    public function meetCriteria(array $persons): array
    {
        $res = [];
        foreach ($persons as $person) {
            if ($person->getMaritalStatus() === self::MARITAL_NO) {
                $res[] = $person;
            }
        }
        return $res;
        // TODO: Implement meetCriteria() method.
    }
}