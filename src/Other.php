<?php

function foo($one = null, $two = 0, $three = "String")
{
    if (true) {
        $x = array(
            0 => "zero",
            123 => "one two three",
            25 => "two five"
        );
    } elseif (null) {
        echo null;
    } else {
        if (false) {
            return 0;
        }
    }
    $t = $one[0];
    $u = $one['str'];
    $v = $one[$x[1]];

    return 1;
}
