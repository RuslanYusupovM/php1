<?php

require __DIR__ . '/classes/FileManager.php';
require __DIR__ . '/classes/View.php';

$fileManager = new FileManager;
$imageView  = new View;


$images = $fileManager->getFilesFromFolder(__DIR__ . '/images');

if ( isset($images[ $_GET['id']]) ) {

    $imageView->assign('image', $images[$_GET['id']]);
    $imageView->display(__DIR__ . '/templates/image.php');

} else {

    header('Location: /gallery3/');

}


