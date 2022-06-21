<?php

declare(strict_types=1);

namespace Fathom\Leetcode\Easy;

/*
 * https://leetcode.com/problems/climbing-stairs/
 * Each time you can either climb 1 or 2 steps. In how many distinct ways can you climb to the top?
 * 1 <= n <= 45
 */

class ClimbingStairs70
{
    public static function climbStairs(int $n): int
    {
        if ($n <= 1) {
            return 1;
        }

        $ways = [
            0 => 1,
            1 => 2,
        ];

        for ($i = 2; $i < $n; $i++) {
            $ways[$i] = $ways[$i - 1] + $ways[$i - 2];
        }

        return $ways[$n - 1];
    }

    public static function climbStairs2(int $n): int
    {
        $a = 1;
        $b = 1;

        while ($n--) {
            $b += $a;
            $a = $b - $a;
        }

        return $a;
    }

    public static function climbStairs3(int $n): int
    {
        $root5 = sqrt(5);
        return (int) ((1 / $root5) * ((((1 + $root5) / 2) ** ($n + 1)) - (((1 - $root5) / 2) ** ($n + 1))));
    }

    public static function climbStairs4(int $n): int
    {
        if ($n <= 1) {
            return 1;
        }

        return self::climbStairs4($n - 1) + self::climbStairs4($n - 2);
    }
}
