<?php
/**
 * 多重依赖测试.
 * User: dingjuru
 * Date: 2019/2/12
 * Time: 10:46
 */

namespace Tests\Unit;


use Tests\TestCase;

class MultipleDependenciesTest extends TestCase
{
    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testConsumer()
    {
        $this->assertEquals(['first', 'second'],
            func_get_args()
        );
    }
}