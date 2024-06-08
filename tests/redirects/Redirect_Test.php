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

    public function test_basic_redirect()
    {
        $this->assertEquals(true, should_redirect('lil'));
        $this->assertEquals( 'https://www.linkedin.com', redirect_value('lil'));
    }

    public function test_should_redirect() {
        $this->assertEquals(true, should_redirect('lil'));
        $this->assertEquals(true, should_redirect('learning'));
        $this->assertEquals(false, should_redirect('lillearning'));
    }

    public function test_redirect_value() {
        $this->assertEquals('https://www.linkedin.com', redirect_value('lil'));
        $this->assertEquals('https://www.linkedin.com/learning', redirect_value('learning'));
        $this->assertEquals(null, redirect_value('lillearning'));
    }

    public function test_invalid_redirects_should_not_redirect() {
        $this->assertEquals(false, should_redirect('lillearning'));
        $this->assertEquals(null, redirect_value('foo'));
    }

    public function test_redirect_with_trailing_slash() {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function test_with_query_args() {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
    

}