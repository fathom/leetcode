<?php

namespace Tests\Easy;

use Fathom\Leetcode\Easy\ClimbingStairs70;
use PHPUnit\Framework\TestCase;

class ClimbingStairs70Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testContainsDuplicate(int $n, int $expected): void
    {
        self::assertSame($expected, ClimbingStairs70::climbStairs($n));
    }

    /**
     * @dataProvider dataProvider
     */
    public function testContainsDuplicate2(int $n, int $expected): void
    {
        self::assertSame($expected, ClimbingStairs70::climbStairs2($n));
    }

    /**
     * @dataProvider dataProvider
     */
    public function testContainsDuplicate3(int $n, int $expected): void
    {
        self::assertSame($expected, ClimbingStairs70::climbStairs3($n));
    }

    /**
     * @dataProvider dataProvider
     */
    public function testContainsDuplicate4(int $n, int $expected): void
    {
        self::assertSame($expected, ClimbingStairs70::climbStairs4($n));
    }

    public function dataProvider(): array
    {
        return [
            [2, 2],
            [3, 3],
            [5, 8],
            [10, 89],
        ];
    }
}
