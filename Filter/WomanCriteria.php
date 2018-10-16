<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/16
 * Time: 10:48
 */

namespace Filter;

class WomanCriteria implements CriteriaInterface
{
    const SEX_WOMAN = PersonInterface::SEX_WOMAN;
    /**
     * @param PersonInterface[] $persons
     * @return PersonInterface[]
     */
    public function meetCriteria(array $persons): array
    {
        // TODO: Implement meetCriteria() method.
        $res = [];
        foreach ($persons as $person) {
            if ($person->getSex() === self::SEX_WOMAN) {
                $res[] = $person;
            }
        }

        return $res;
    }
}