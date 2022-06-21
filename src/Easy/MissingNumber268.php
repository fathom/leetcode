<?php

declare(strict_types=1);

namespace Fathom\Leetcode\Easy;

/*
https://leetcode.com/problems/missing-number/
Given an array nums containing n distinct numbers in the range [0, n], return the only number in the range that is missing from the array.
*/

final class MissingNumber268
{
    /**
     * @dataProvider dataProvider
     */

    public static function missingNumber(array $nums): int
    {
        $res = 0;
        foreach ($nums as $i => $value) {
            $res ^= ($i + 1) ^ $value;
        }
        return $res;
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,3,1], true],
            [[1,2,3,4], false],
            [[1,1,1,3,3,4,3,2,4,2], true],
        ];
    }
}
