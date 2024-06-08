<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
  
class Redirect_Test extends TestCase
{

    function setUp(): void
    {
      
        require_once __DIR__ . '/../../redirects/redirect.php';
        parent::setUp();
    }

    /**
     * Test that the function `redirect` exists.
     */
    public function test_function_exists(): void
    {
        $this->assertTrue(function_exists('redirect'));
    }
}