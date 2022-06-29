<?php

declare(strict_types=1);

namespace Tests\Easy;

use Fathom\Leetcode\Easy\BestTimeToBuyAndSellStock121;
use PHPUnit\Framework\TestCase;

class BestTimeToBuyAndSellStock121Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testMaxProfit(array $nums, int $expected): void
    {
        self::assertSame($expected, BestTimeToBuyAndSellStock121::maxProfit($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[7,1,5,3,6,4], 5],
            [[7,5,1,10,2,6,11,3], 10],
            [[7,6,4,3,1], 0],
            [[2,1,4], 3],
        ];
    }
}
