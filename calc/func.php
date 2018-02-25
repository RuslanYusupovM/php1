<?php

function calculate ($x, $y, $op)
{
    switch ($op) {
        case '+':
            return $x + $y;
            break;
        case '-':
            return $x - $y;
            break;
        case '*':
            return $x * $y;
            break;
        case '/':
            return $x / $y;
            break;
        case '**':
            return $x ** $y;
            break;
        default:
            return null;
    }
}

assert(4 === calculate(2, 2, '+'));
assert(3 === calculate(5, 2, '-'));
assert(18 === calculate(6, 3, '*'));
assert(5 === calculate(25, 5, '/'));
assert(64 === calculate(4, 3, '**'));
assert(null === calculate(4, 3, '%%%'));