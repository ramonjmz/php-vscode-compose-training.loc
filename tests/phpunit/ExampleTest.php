<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);

        $this->assertEquals(5, $result);
    }
}
