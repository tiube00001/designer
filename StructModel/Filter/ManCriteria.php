<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/16
 * Time: 10:44
 */

namespace Filter;

class ManCriteria implements CriteriaInterface
{

    const SEX_MAN = PersonInterface::SEX_MAN;
    /**
     * @param PersonInterface[] $persons
     * @return PersonInterface[] || []
     */
    public function meetCriteria(array $persons): array
    {
        // TODO: Implement meetCriteria() method.
        $res = [];
        foreach ($persons as $person) {
            if ($person->getSex() === self::SEX_MAN) {
                $res[] = $person;
            }
        }

        return $res;
    }
}