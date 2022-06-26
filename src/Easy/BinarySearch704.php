<?php

declare(strict_types=1);

namespace Fathom\Leetcode\Easy;

/*
 https://leetcode.com/problems/binary-search/
Given an array of integers nums which is sorted in ascending order, and an integer target, write a function to
search target in nums. If target exists, then return its index. Otherwise, return -1.

You must write an algorithm with O(log n) runtime complexity.
 */

class BinarySearch704
{
    public static function search(array $nums, int $target): int
    {
        $left = 0;
        $right = count($nums);

        while ($left < $right) {
            $mid = (int) ($left + ($right - $left) / 2);
            if ($nums[$mid] === $target) {
                return $mid;
            }

            if ($nums[$mid] < $target) {
                $left = $mid + 1;
            }
            else
            {
                $right = $mid;
            }
        }

        return -1;
    }
}
