<?php
/**
 * Created by PhpStorm.
 * User: dingjuru
 * Date: 2019/2/12
 * Time: 9:58
 */

namespace Tests\Unit;


use Tests\TestCase;

class StackTest extends TestCase
{
    /*public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, $this->count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }*/

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack, 'ok');

        return $stack;
    }

    /**
     * @param array $stack
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        //$this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @param array $stack
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}