<?php

declare(strict_types=1);

namespace Tests\Easy;

use Fathom\Leetcode\Easy\BinarySearch704;
use PHPUnit\Framework\TestCase;

class BinarySearch704Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testContainsDuplicate(array $nums, int $target, int $expected): void
    {
        self::assertSame($expected, BinarySearch704::search($nums, $target));
    }

    public function dataProvider(): array
    {
        return [
            [[-1,0,3,5,9,12], 9, 4],
            [[-1,0,3,5,9,12], 2, -1],
        ];
    }
}
