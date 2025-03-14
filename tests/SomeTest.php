<?php

namespace Tests;

use OlegV\Cliche\SomeClass;
use PHPUnit\Framework\TestCase;

class SomeTest extends TestCase
{
    public function testConstructor(): void
    {
        $this->assertEquals('test', (new SomeClass())('test'));
    }
}