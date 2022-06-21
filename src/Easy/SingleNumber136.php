<?php

declare(strict_types=1);

namespace Fathom\Leetcode\Easy;

/*
Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.
You must implement a solution with a linear runtime complexity and use only constant extra space.
*/

class SingleNumber136
{
    public static function singleNumberBit(array $nums): int
    {
        $res = 0;
        foreach ($nums as $num) {
            $res ^= $num;
        }
        return $res;
    }

    public static function singleNumber(array $nums): int
    {
        $set = [];
        foreach ($nums as $num) {
            if (isset($set[$num])) {
                unset($set[$num]);
            } else {
                $set[$num] = $num;
            }
        }
        return current($set);
    }
}
