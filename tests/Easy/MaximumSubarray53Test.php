<?php

declare(strict_types=1);

namespace Tests\Easy;

use Fathom\Leetcode\Easy\MaximumSubarray53;
use PHPUnit\Framework\TestCase;

class MaximumSubarray53Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testMaxProfit(array $nums, int $expected): void
    {
        self::assertSame($expected, MaximumSubarray53::maxSubArray($nums));
    }

    /**
     * @dataProvider dataProvider
     */
    public function testMaxProfit2(array $nums, int $expected): void
    {
        self::assertSame($expected, MaximumSubarray53::maxSubArray2($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[-2, 1, -3, 4, -1, 2, 1, -5, 4], 6],
            [[1], 1],
            [[5, 4, -1, 7, 8], 23],
        ];
    }
}
