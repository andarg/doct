<?php
require_once __DIR__."/../../vendor/autoload.php";

use Doc\App\CliCounter;
use PHPUnit\Framework\TestCase;


class AbstractMockTestClassTest extends TestCase
{

    protected static function getMethod($name) {
        $class = new ReflectionClass(CliCounter::class);
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method;
    }


    /**
     * @dataProvider Argv_provider
     */

    public function test_getStr($argv){

        $stub = $this->createMock(CliCounter::class);

        // Configure the stub.
        $stub->method('getArgv')
            ->willReturn($argv);

        //незнаю почему но на прямую метод не хочет возыращать значения
        $getStr = self::getMethod('getStr');
        $str =  $getStr->invokeArgs($stub, []);
        $this->assertEquals('q q',$str);

    }

    /**
     * @dataProvider Argv_provider
     */

   public function testDoSomething( $argv )
    {
        $c = new CliCounter();
        $c->setArgv($argv);
        $c->calc();
        $this->assertEquals(['q'=>2], $c->getRes());

    }


    public static function Argv_provider() {
        return [
            [["gfgf.php","q","q"]]
        ];
    }

    private function arrays_are_similar($a, $b) {
        if (count(array_diff_assoc($a, $b))) {
            return false;
        }
        foreach($a as $k => $v) {
            if ($v !== $b[$k]) {
                return false;
            }
        }
        return true;
    }

}
