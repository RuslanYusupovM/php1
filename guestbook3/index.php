<?php

require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/View.php';

$gbModel = new GuestBook(__DIR__ . '/records');
$gbView = new View;

if ( !empty($_POST['record']) ) {

    $gbModel->append($_POST['record'])->save();

}

$records = $gbModel->getData();

$gbView->assign('records', $records);

$gbView->display(__DIR__ . '/templates/guestbook.php');