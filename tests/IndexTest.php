<?php
require_once __DIR__ . '/../src/index.php';

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase {
    public function testGreet() {
        $this->assertEquals("Hello, John!", greet("John"));
    }
}

