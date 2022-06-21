<?php

declare(strict_types=1);

namespace Tests;

use Fathom\Leetcode\SingleNumber136;
use PHPUnit\Framework\TestCase;

final class SingleNumber136Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSingleNumberBit(array $nums, int $expected): void
    {
        self::assertSame($expected, SingleNumber136::singleNumberBit($nums));
    }

    /**
     * @dataProvider dataProvider
     */
    public function testSingleNumber(array $nums, int $expected): void
    {
        self::assertSame($expected, SingleNumber136::singleNumber($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[2,2,1], 1],
            [[4,1,2,1,2], 4],
            [[1], 1],
        ];
    }
}
