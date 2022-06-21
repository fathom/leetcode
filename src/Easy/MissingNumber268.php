<?php

declare(strict_types=1);

namespace Fathom\Leetcode\Easy;

/*
https://leetcode.com/problems/missing-number/
Given an array nums containing n distinct numbers in the range [0, n], return the only number in the range that is missing from the array.
*/

final class MissingNumber268
{
    public static function missingNumber(array $nums): int
    {
        $res = 0;
        foreach ($nums as $i => $value) {
            $res ^= ($i + 1) ^ $value;
        }
        return $res;
    }

    public static function missingNumber2(array $nums): int {
        $n = count($nums);
        $sum = 0;
        foreach ($nums as $v) {
            $sum += $v;
        }
        return (int) (0.5 * $n * ($n + 1) - $sum);
    }
}
