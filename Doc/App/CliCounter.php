<?php

namespace Doc\App;


use Doc\App\Lib\Counter;
use Doc\App\Lib\InterfaceCounter;

class CliCounter    implements InterfaceCounter
{
    use Counter;

    private $res;

    /**
     * @return mixed
     */
    public function getRes()
    {
        return $this->res;
    }

    /**
     * @param mixed $res
     */
    public function setRes($res)
    {
        $this->res = $res;
    }
    private $argv;

    /**
     * @return mixed
     */
    public function getArgv()
    {
        return $this->argv;
    }

    /**
     * @param mixed $argv
     */
    public function setArgv($argv)
    {
        $this->argv = $argv;
    }

    public function getStr():string
    {
        return implode(" ", array_slice($this->getArgv(), 1));
    }


    /**
     * Calculating a result
     */
    public function calc(): void
    {
        $this->setRes( $this->count($this->getStr()) );
    }


}
