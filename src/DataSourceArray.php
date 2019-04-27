<?php

namespace Reportico\Engine;

/**
 * Class DataSourceArray
 *
 * Allows an array of data to appear like a database table by
 * implementing the necessary functions for connecting, disconnecting
 * and fetching. This means the Reportico engine will not care if data comes
 * from a database or an array
 */
class DataSourceArray
{
    public $array_set;
    public $EOF = false;
    public $ct = 0;
    public $numrows = 0;

    public function __construct()
    {
    }

    public function Connect(&$in_array)
    {
        $this->array_set = &$in_array;
        $this->numrows = count($this->array_set);
    }

    public function FetchRow()
    {
        $rs = array();

        $rs = $this->array_set[$this->ct];

        $this->ct++;

        if ($this->ct == $this->numrows) {
            $this->EOF = true;
        }

        return ($rs);
    }

    public function &ErrorMsg()
    {
        return "Array dummy Message";
    }

    public function ErrorNo()
    {
        return -1;
    }

    public function Close()
    {
        return;
    }

    public function &Execute($in_query)
    {
        return ($this);
    }

}
