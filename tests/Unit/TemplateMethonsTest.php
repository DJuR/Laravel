<?php
/**
 * Created by PhpStorm.
 * User: dingjuru
 * Date: 2019/2/12
 * Time: 13:55
 */

namespace Tests\Unit;


use Tests\TestCase;
use Throwable;

class TemplateMethonsTest extends TestCase
{
    public static function setUpBeforeClass()
    {
        fwrite(STDOUT, __METHOD__."\n");
    }

    protected function setUp()
    {
        fwrite(STDOUT, __METHOD__."\n");
    }

    protected function assertPreConditions()
    {
        fwrite(STDOUT, __METHOD__."\n");
    }

    public function testOne()
    {
        fwrite(STDOUT, __METHOD__."\n");
        $this->assertTrue(true);
    }

    public function testTwo()
    {
        fwrite(STDOUT, __METHOD__."\n");
        $this->assertTrue(false);
    }

    protected function assertPostConditions()
    {
        fwrite(STDOUT, __METHOD__."\n");
    }

    protected function tearDown()
    {
        fwrite(STDOUT, __METHOD__."\n");
    }

    public static function tearDownAfterClass()
    {
        fwrite(STDOUT, __METHOD__."\n");
    }

    protected function onNotSuccessfulTest(Throwable $t)
    {
        fwrite(STDOUT, __METHOD__."\n");
        throw $t;
    }


}