<?php

use PHPUnit\Framework\TestCase;

class Add_Test extends TestCase {
  public function setUp():void {
    require_once __DIR__ . '/../example.php';
    parent::setUp();
  }

  public function test_add() {
    $this->assertEquals(7, add(5, 2));
  }


  public function test_subtract() {
    $this->assertEquals(3, subtract(5, 2));
  }
}