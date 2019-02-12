<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);

        sleep(1);
        return json_encode(['aaa']);
        //$response = $this->get('/');

        //$response->assertStatus(200);


    }
}
