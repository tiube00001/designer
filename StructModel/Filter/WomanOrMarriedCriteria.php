<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/16
 * Time: 11:08
 */

namespace Filter;

class WomanOrMarriedCriteria implements CriteriaInterface
{
    protected $one;
    protected $two;

    public function __construct(CriteriaInterface $one, CriteriaInterface $two)
    {
        $this->one = $one;
        $this->two = $two;
    }

    /**
     * @param PersonInterface[] $persons
     * @return PersonInterface[]
     */
    public function meetCriteria(array $persons): array
    {
        // TODO: Implement meetCriteria() method.
        /**
         * @var PersonInterface[] $one;
         */
        return array_unique(
            array_merge(
                $this->one->meetCriteria($persons),
                $this->two->meetCriteria($persons)
            ),
            SORT_REGULAR
        );
    }
}