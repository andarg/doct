<?php

namespace Doc\App\Lib;


trait Counter
{
    /**
     * @param string $str
     * @return array
     */
    public function count( string $str, string $delimiter=' '):array
    {
        return array_count_values(explode($delimiter, $str) );
    }
}
