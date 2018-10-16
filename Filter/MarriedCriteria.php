<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/16
 * Time: 11:02
 */

namespace Filter;

class MarriedCriteria implements CriteriaInterface
{
    const MARITAL_YES = PersonInterface::MARITAL_YES;

    /**
     * @param PersonInterface[] $persons
     * @return PersonInterface[]
     */
    public function meetCriteria(array $persons): array
    {
        // TODO: Implement meetCriteria() method.
        $res = [];
        foreach ($persons as $person) {
            if ($person->getMaritalStatus() === self::MARITAL_YES) {
                $res[] = $person;
            }
        }
        return $res;
    }
}