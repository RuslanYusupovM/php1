<?php

if ( !empty($_FILES) && !empty($_FILES['img']) ) {

    $arrImg = $_FILES['img'];

    if (0 === $arrImg['error']) {

        if ($arrImg['type'] === 'image/jpeg' || $arrImg['type'] === 'image/png') {

            $res = move_uploaded_file($arrImg['tmp_name'],__DIR__ . '/images/' . $arrImg['name']);

            return true == $res ? 'Файл успешно добавлен!' : 'Ошибка загрузки на сервер!';

        } else {

            return 'Неверный формат файла!';

        }

    } else {

        return 'Файл не загружен. Ошибка!';

    }

}

return null;