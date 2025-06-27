<?php
use PHPUnit\Framework\TestCase;

// Panggil fungsi dari index.php
require_once __DIR__ . '/../src/index.php';

class IndexTest extends TestCase {
    public function testGreet() {
        $this->assertEquals("Hello, Dunia!", greet("Dunia"));
    }
}
