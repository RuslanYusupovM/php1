<?php

function getRecords()
{
    $path = realpath(__DIR__ . '/../records');

    if ( file_exists($path) && is_readable($path) ) {
        return explode("\n", file_get_contents($path));
    } else {
        return null;
    }
}

assert( true === is_array(getRecords()) );