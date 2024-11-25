<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../vendor/autoload.php';

class MyClassTest extends TestCase
{
    public function testSayHello()
    {
        $myClass = new \Dennyvendor\Testpacage\MyClass();
        $this->assertEquals("Hello, Composer!", $myClass->sayHello());
    }
}
