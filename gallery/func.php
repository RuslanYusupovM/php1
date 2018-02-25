<?php

function getFilesFromFolder($path)
{
    $files = scandir($path);

    foreach ($files as $file) {
        if ('.' !== $file && '..' !== $file) {
            $images[] = $file;
        }
    }

    return isset($images) ? $images : null;
}

assert(true === is_array( getFilesFromFolder(__DIR__ . '/images') ) );


function getImageName($filename)
{
    return mb_strimwidth($filename, 0, -4);
}

assert( 'picture' === getImageName('picture.png') );