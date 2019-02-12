<?php
/**
 * Created by PhpStorm.
 * User: dingjuru
 * Date: 2019/2/12
 * Time: 9:58
 */

namespace Tests\Unit;


use Tests\TestCase;

class Stack1Test extends TestCase
{

    protected $stack;

    protected function setUp()
    {
        $this->stack = [];
    }

    public function testEmpty()
    {
        $this->assertTrue(empty($this->stack));
    }

    /**
     * @param array $stack
     */
    public function testPush()
    {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', $this->stack[count($this->stack)-1]);
        $this->assertFalse(empty($this->stack));
    }

    /**
     * @param array $stack
     */
    public function testPop()
    {
        $this->assertEquals('foo', array_pop($this->stack));
        $this->assertTrue(empty($this->stack));
    }
}