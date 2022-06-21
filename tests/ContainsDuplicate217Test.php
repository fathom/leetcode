<?php

declare(strict_types=1);

namespace Tests;

use Fathom\Leetcode\ContainsDuplicate217;
use PHPUnit\Framework\TestCase;

class ContainsDuplicate217Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testContainsDuplicate(array $nums, bool $expected): void
    {
        self::assertSame($expected, ContainsDuplicate217::containsDuplicate($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,3,1], true],
            [[1,2,3,4], false],
            [[1,1,1,3,3,4,3,2,4,2], true],
        ];
    }
}
