<?xml version="1.0" encoding="UTF-8"?>
<testsuites>
  <testsuite name="" tests="14" assertions="14" errors="0" failures="3" skipped="1" time="1.249667">
    <testsuite name="Unit" tests="13" assertions="13" errors="0" failures="2" skipped="1" time="1.231108">
      <testsuite name="Tests\Unit\DataTest" file="C:\wamp64\www\laravel\tests\Unit\DataTest.php" tests="4" assertions="4" errors="0" failures="1" skipped="0" time="0.141585">
        <testsuite name="Tests\Unit\DataTest::testAdd" tests="4" assertions="4" errors="0" failures="1" skipped="0" time="0.141585">
          <testcase name="testAdd with data set #0" class="Tests\Unit\DataTest" classname="Tests.Unit.DataTest" file="C:\wamp64\www\laravel\tests\Unit\DataTest.php" line="24" assertions="1" time="0.108660">
            <system-out>---0---</system-out>
          </testcase>
          <testcase name="testAdd with data set #1" class="Tests\Unit\DataTest" classname="Tests.Unit.DataTest" file="C:\wamp64\www\laravel\tests\Unit\DataTest.php" line="24" assertions="1" time="0.011193">
            <system-out>---1---</system-out>
          </testcase>
          <testcase name="testAdd with data set #2" class="Tests\Unit\DataTest" classname="Tests.Unit.DataTest" file="C:\wamp64\www\laravel\tests\Unit\DataTest.php" line="24" assertions="1" time="0.010153">
            <system-out>---0---</system-out>
          </testcase>
          <testcase name="testAdd with data set #3" class="Tests\Unit\DataTest" classname="Tests.Unit.DataTest" file="C:\wamp64\www\laravel\tests\Unit\DataTest.php" line="24" assertions="1" time="0.011579">
            <failure type="PHPUnit\Framework\ExpectationFailedException">Tests\Unit\DataTest::testAdd with data set #3 ('1', '1', '3')
Failed asserting that 2 matches expected '3'.

C:\wamp64\www\laravel\tests\Unit\DataTest.php:27
</failure>
            <system-out>---1---</system-out>
          </testcase>
        </testsuite>
      </testsuite>
      <testsuite name="Tests\Unit\DependencyFailureTest" file="C:\wamp64\www\laravel\tests\Unit\DependencyFailureTest.php" tests="2" assertions="1" errors="0" failures="1" skipped="1" time="0.011296">
        <testcase name="testOne" class="Tests\Unit\DependencyFailureTest" classname="Tests.Unit.DependencyFailureTest" file="C:\wamp64\www\laravel\tests\Unit\DependencyFailureTest.php" line="16" assertions="1" time="0.011296">
          <failure type="PHPUnit\Framework\ExpectationFailedException">Tests\Unit\DependencyFailureTest::testOne
Failed asserting that false is true.

C:\wamp64\www\laravel\tests\Unit\DependencyFailureTest.php:18
</failure>
        </testcase>
        <testcase name="testTwo" class="Tests\Unit\DependencyFailureTest" classname="Tests.Unit.DependencyFailureTest" file="C:\wamp64\www\laravel\tests\Unit\DependencyFailureTest.php" line="24" assertions="0" time="0.000000">
          <skipped/>
        </testcase>
      </testsuite>
      <testsuite name="Tests\Unit\ExampleTest" file="C:\wamp64\www\laravel\tests\Unit\ExampleTest.php" tests="1" assertions="1" errors="0" failures="0" skipped="0" time="1.012456">
        <testcase name="testBasicTest" class="Tests\Unit\ExampleTest" classname="Tests.Unit.ExampleTest" file="C:\wamp64\www\laravel\tests\Unit\ExampleTest.php" line="15" assertions="1" time="1.012456"/>
      </testsuite>
      <testsuite name="Tests\Unit\MultipleDependenciesTest" file="C:\wamp64\www\laravel\tests\Unit\MultipleDependenciesTest.php" tests="3" assertions="3" errors="0" failures="0" skipped="0" time="0.033364">
        <testcase name="testProducerFirst" class="Tests\Unit\MultipleDependenciesTest" classname="Tests.Unit.MultipleDependenciesTest" file="C:\wamp64\www\laravel\tests\Unit\MultipleDependenciesTest.php" line="16" assertions="1" time="0.010849"/>
        <testcase name="testProducerSecond" class="Tests\Unit\MultipleDependenciesTest" classname="Tests.Unit.MultipleDependenciesTest" file="C:\wamp64\www\laravel\tests\Unit\MultipleDependenciesTest.php" line="22" assertions="1" time="0.011184"/>
        <testcase name="testConsumer" class="Tests\Unit\MultipleDependenciesTest" classname="Tests.Unit.MultipleDependenciesTest" file="C:\wamp64\www\laravel\tests\Unit\MultipleDependenciesTest.php" line="32" assertions="1" time="0.011331"/>
      </testsuite>
      <testsuite name="Tests\Unit\StackTest" file="C:\wamp64\www\laravel\tests\Unit\StackTest.php" tests="3" assertions="4" errors="0" failures="0" skipped="0" time="0.032407">
        <testcase name="testEmpty" class="Tests\Unit\StackTest" classname="Tests.Unit.StackTest" file="C:\wamp64\www\laravel\tests\Unit\StackTest.php" line="29" assertions="1" time="0.010738"/>
        <testcase name="testPush" class="Tests\Unit\StackTest" classname="Tests.Unit.StackTest" file="C:\wamp64\www\laravel\tests\Unit\StackTest.php" line="41" assertions="1" time="0.010559"/>
        <testcase name="testPop" class="Tests\Unit\StackTest" classname="Tests.Unit.StackTest" file="C:\wamp64\www\laravel\tests\Unit\StackTest.php" line="54" assertions="2" time="0.011110"/>
      </testsuite>
    </testsuite>
    <testsuite name="Feature" tests="1" assertions="1" errors="0" failures="1" skipped="0" time="0.018559">
      <testsuite name="Tests\Feature\ExampleTest" file="C:\wamp64\www\laravel\tests\Feature\ExampleTest.php" tests="1" assertions="1" errors="0" failures="1" skipped="0" time="0.018559">
        <testcase name="testBasicTest" class="Tests\Feature\ExampleTest" classname="Tests.Feature.ExampleTest" file="C:\wamp64\www\laravel\tests\Feature\ExampleTest.php" line="15" assertions="1" time="0.018559">
          <failure type="PHPUnit\Framework\ExpectationFailedException">Tests\Feature\ExampleTest::testBasicTest
Expected status code 200 but received 400.
Failed asserting that false is true.

C:\wamp64\www\laravel\vendor\laravel\framework\src\Illuminate\Foundation\Testing\TestResponse.php:133
C:\wamp64\www\laravel\tests\Feature\ExampleTest.php:19
</failure>
        </testcase>
      </testsuite>
    </testsuite>
  </testsuite>
</testsuites>
