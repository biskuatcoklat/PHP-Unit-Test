<?php

namespace Wahyu\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private Person $person;
    protected function setUp(): void
    {
        $this->person = new Person("Wahyu");
    }
    public function testSuccess()
    {
        self::assertEquals("halo zaki my name is Wahyu", $this->person->sayHello("zaki"));
    }
    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }
    public function testGoodByeSuccess()
    {
        $this->expectOutputString("Bye Bye anto");
        $this->person->sayBye("anto");
    }
}
