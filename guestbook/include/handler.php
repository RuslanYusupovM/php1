<?php

if ( function_exists('getRecords') && !empty($_POST['record']) ) {

    $data = $_POST['record'];
    $pathRecords = realpath(__DIR__ . '/../records');
    $records = getRecords();

    if ( file_exists($pathRecords) && !in_array($data, $records)) {

        $records[] = $data;

        $records = implode("\n", $records);

        $res = file_put_contents($pathRecords, $records);

        if (true == $res) {

            header('Location: /guestbook/');

        }

    } else {
        return 'Нету файла записей';
    }


} else {
    return null;
}