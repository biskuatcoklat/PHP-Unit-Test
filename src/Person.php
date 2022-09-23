<?php

namespace Wahyu\Test;

use function PHPUnit\Framework\throwException;

class Person
{
    public function __construct(private string $name)
    {
    }
    public function sayBye(?string $name)
    {
        echo "Bye Bye $name";
    }
    public function sayHello(?string $name): string
    {
        if ($name = null) throw new \Exception("zaki");
        return "halo $name my name is $this->name";
    }
}
