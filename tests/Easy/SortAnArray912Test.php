<?php

declare(strict_types=1);

namespace Tests\Easy;

use Fathom\Leetcode\Easy\SortAnArray912;
use PHPUnit\Framework\TestCase;

class SortAnArray912Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testContainsDuplicate(array $nums, array $expected): void
    {
        self::assertSame($expected, SortAnArray912::sortArray($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[5,1,6,2,9,], [1,2,5,6,9]],
            [[5,1,1,2,0,0], [0,0,1,1,2,5]],
            [[5,2,3,1], [1,2,3,5]],
        ];
    }
}
