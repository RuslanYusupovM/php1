<?php

require __DIR__ . '/classes/FileManager.php';
require __DIR__ . '/classes/Uploader.php';
require __DIR__ . '/classes/View.php';

$fileManager = new FileManager;
$uploader = new Uploader('img');
$galleryView  = new View;

$status = null;

if ( $uploader->isUploaded() ) {

    $status = $uploader->upload();

}


$files = $fileManager->getFilesFromFolder(__DIR__ . '/images');

$galleryView->assign('images', $files);
$galleryView->assign('status', $status);

$galleryView->display(__DIR__ . '/templates/gallery.php');