<?php

namespace Acme\Package;

use Acme\AnotherFoo;
use Acme\AnotherBar;

class Foo
{
    public $x;
    public $y;

    public function foo()
    {
    }
}

class Bar
{
    const X = 1;
    const Y = 2;
    public $a;
    public $b;

    public function bar()
    {
        $a = "a";


        $b = "b";
    }

    public function bar_2()
    {
        return this::$a . this::$b;
    }
}
