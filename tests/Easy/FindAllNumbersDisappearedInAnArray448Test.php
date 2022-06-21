<?php

namespace Tests\Easy;

use Fathom\Leetcode\Easy\FindAllNumbersDisappearedInAnArray448;
use PHPUnit\Framework\TestCase;

class FindAllNumbersDisappearedInAnArray448Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testContainsDuplicate(array $nums, array $expected): void
    {
        self::assertSame($expected, FindAllNumbersDisappearedInAnArray448::findDisappearedNumbers($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[4,3,2,7,8,2,3,1], [5,6]],
            [[1,1], [2]],
        ];
    }
}
