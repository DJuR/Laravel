<?php
/**
 * 利用测试之间的依赖关系.
 * User: dingjuru
 * Date: 2019/2/12
 * Time: 10:43
 */

namespace Tests\Unit;


use Tests\TestCase;

class DependencyFailureTest extends TestCase
{
    public function testOne()
    {
        $this->assertTrue(false);
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {

    }
}