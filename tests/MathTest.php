<?php

namespace Wahyu\Test;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testManual()
    {
        self::assertEquals(20, Math::sum([10, 10]));
        self::assertEquals(10, Math::sum([2, 2, 2, 2, 2]));
        self::assertEquals(30, Math::sum([10, 10, 10]));
        self::assertEquals(20, Math::sum([10, 10]));
        self::assertEquals(20, Math::sum([10, 10]));
    }

    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(array $values, int $expected)
    {
        self::assertEquals($expected, Math::sum($values));
    }

    public function mathSumData(): array
    {
        return [
            [[5, 5], 10],
            [[4, 4, 4, 4, 4], 20],
            [[], 0],
            [[2], 2],
        ];
    }

    /**
     * @testWith [[5, 5], 10]
            [[4, 4, 4, 4, 4], 20]
            [[], 0]
            [[2], 2]
     */
    public function testWith(array $values, int $expected)
    {
        self::assertEquals($expected, Math::sum($values));
    }
}
