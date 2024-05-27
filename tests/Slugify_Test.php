<?php

use PHPUnit\Framework\TestCase;

class Slugify_Test extends TestCase
{
  public function setUp(): void
  {
    require_once __DIR__ . '/../slug.php';
    parent::setUp();
  }

  public function test_slugify()
  {
    $this->assertEquals('hello-world', slugify('Hello World@'));
    $this->assertEquals('php-unit-testing', slugify('PHP Unit Testing'));
    $this->assertEquals('special-characters-123', slugify('Special Characters!@# 123'));
  }

  public function test_slugify_with_punctuation_at_the_end() {
   	 $this->assertEquals( 'hello-world', slugify( 'Hello World!' ) );
  }
}
