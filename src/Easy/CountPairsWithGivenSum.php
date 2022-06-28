<?php

declare(strict_types=1);

namespace Fathom\Leetcode\Easy;

/*
 * Given an array of integers, and a number ‘sum’, print all pairs in the array whose sum is equal to ‘sum’.
 */

class CountPairsWithGivenSum
{
    public static function getPairs(array $nums, int $target): array
    {
        $res = [];
        for ($i = 0, $iMax = count($nums); $i < $iMax; $i++) {
            for ($j = $i +1, $jMax = count($nums); $j < $jMax; $j++) {
                if ($nums[$i] + $nums[$j] === $target) {
                    $res[] = [$nums[$i], $nums[$j]];
                }
            }
        }

        return $res;
    }

    public static function getPairs2(array $nums, int $target): array
    {
        sort($nums, SORT_NUMERIC);

        $res = [];

        $i = 0;
        $j = count($nums) - 1;

        while ($i < $j) {
            $sum = $nums[$i] + $nums[$j];

            if ($sum === $target) {
                $res[] = [$nums[$i], $nums[$j]];
                $i++;
                $j--;
                continue;
            }

            if ($sum < $target) {
                $i++;
            } else {
                $j--;
            }
        }

        return $res;
    }
}
