<?php

namespace Tests\Easy;

use Fathom\Leetcode\Easy\MissingNumber268;
use PHPUnit\Framework\TestCase;

class MissingNumber268Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testContainsDuplicate(array $nums, int $expected): void
    {
        self::assertSame($expected, MissingNumber268::missingNumber($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[3,0,1], 2],
            [[0,1], 2],
            [[9,6,4,2,3,5,7,0,1], 8],
        ];
    }
}
