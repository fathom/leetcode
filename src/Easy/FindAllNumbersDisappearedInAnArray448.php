<?php

declare(strict_types=1);

namespace Fathom\Leetcode\Easy;

/*
 * https://leetcode.com/problems/find-all-numbers-disappeared-in-an-array/
 *
 * Given an array nums of n integers where nums[i] is in the range [1, n], return an array of all
 * the integers in the range [1, n] that do not appear in nums.
 */

final class FindAllNumbersDisappearedInAnArray448
{
    public static function findDisappearedNumbers(array $nums) : array
    {
        $res = [];
        for ($i = 0; $i < count($nums); $i++) {
            $idx = (abs($nums[$i]) - 1);
            if ($nums[$idx] > 0) {
                $nums[$idx] *= -1;
            }
        }

        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] > 0) {
                $res[] = $i + 1;
            }
        }

        return $res;
    }
}
