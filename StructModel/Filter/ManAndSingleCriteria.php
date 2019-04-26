<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/16
 * Time: 11:04
 */

namespace Filter;
class ManAndSingleCriteria implements CriteriaInterface
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
        $oneRes = $this->one->meetCriteria($persons);
        return $this->two->meetCriteria($oneRes);
    }
}