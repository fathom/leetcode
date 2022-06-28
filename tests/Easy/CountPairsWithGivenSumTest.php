<?php

declare(strict_types=1);

namespace Tests\Easy;

use Fathom\Leetcode\Easy\CountPairsWithGivenSum;
use PHPUnit\Framework\TestCase;

class CountPairsWithGivenSumTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testGetPairs(array $nums, int $target, array $expected): void
    {
        self::assertEqualsCanonicalizing($expected, CountPairsWithGivenSum::getPairs($nums, $target), 'failed testGetPairs');
    }

    /**
     * @dataProvider dataProvider
     */
    public function testGetPairs2(array $nums, int $target, array $expected): void
    {
        self::assertEqualsCanonicalizing($expected, CountPairsWithGivenSum::getPairs2($nums, $target), 'failed testGetPairs2');

    }

    public function dataProvider(): array
    {
        return [
            [[3, 2, 1, 5, 4], 7, [[3, 4], [2, 5]]],
            [[3, 2, 1, 5, 4], 7, [[2, 5], [3, 4]]],
            [[4, 2, 5, 3, 7, 6, 8], 13, [[5, 8], [6, 7]]],
        ];
    }
}
