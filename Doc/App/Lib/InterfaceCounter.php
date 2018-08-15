<?php

namespace Doc\App\Lib;


interface InterfaceCounter
{
    public function getStr():string;
    public function count(string $str, string $delimiter = ' '):array ;

}
