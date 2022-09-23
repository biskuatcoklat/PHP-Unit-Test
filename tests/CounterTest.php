<?php

namespace Wahyu\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();

        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());

        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());

        $counter->increment();
        Self::assertEquals(3, $counter->getCounter());
    }

    public function testIncrement()
    {
        $counter =  new Counter();
        self::assertEquals(0, $counter->getCounter());
        Assert::markTestIncomplete("todo again");
    }

    /**
     * @test
     */
    public function increment()
    {
        self::markTestSkipped("masih ada yang error");
        $counter = new Counter();

        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());
    }

    public function testFirst(): Counter
    {
        $counter = new Counter();
        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());
        return $counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {

        $counter->increment();
        Assert::assertEquals(2, $counter->getCounter());
    }

    /**
     * @requires OSFAMILY Windows
     */
    public function testOnlyWindows()
    {
        self::assertTrue(true, "only in windows");
    }
    /**
     * @requires OSFAMILY Darwin
     * @requires PHP >= 8
     */
    public function testOnlyMacAndPHP8()
    {
        self::assertTrue(true, "only Mac and PHP 8");
    }
}
//vendor/bin/phpunit tests/CounterTest.php command
//vendor/bin/phpunit --filter 'CounterTest::testLain' tests/CounterTest.php
