<?php

declare(strict_types=1);

namespace Fathom\Leetcode\Easy;

/*
 https://leetcode.com/problems/sort-an-array/
Given an array of integers nums, sort the array in ascending order.
 */

class SortAnArray912
{
    public static function sortArray(array $nums): array
    {
        if (count($nums) <= 1) {
            return $nums;
        }

        $m = (int) (count($nums) / 2);

        $left = self::sortArray(array_slice($nums, 0, $m));
        $right = self::sortArray(array_slice($nums, $m));

        $i = 0; $j = 0; $k = 0;
        $sorted = [];

        while ($i < count($left) && $j < count($right)) {
            if ($left[$i] < $right[$j]) {
                $sorted[$k++] = $left[$i++];
            }
            else {
                $sorted[$k++] = $right[$j++];
            }
        }

        while ($i < count($left)) {
            $sorted[$k++] = $left[$i++];
        }

        while ($j < count($right)) {
            $sorted[$k++] = $right[$j++];
        }

        return $sorted;
    }
}
