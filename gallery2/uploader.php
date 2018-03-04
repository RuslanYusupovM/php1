<?php

class Uploader {

    protected $file;

    public function __construct($fieldName)
    {
        if ( isset($_FILES[$fieldName]) ) {

            $this->file = $_FILES[$fieldName];

        }

    }

    public function isUploaded()
    {
        return !empty($this->file['tmp_name']) && 0 === $this->file['error'];
    }

    public function upload()
    {
        if ( $this->isUploaded() ) {

            switch ($this->file['type']) {

                case 'image/jpeg':
                case 'image/png':
                    move_uploaded_file(
                        $this->file['tmp_name'],
                        __DIR__ . '/images/' . $this->file['name']
                    );
                    return 'Файл успешно загружен!';
                    break;
                default:
                    return 'Неверный формат файла!';

            }

        }

        return 'Ошибка загрузки на сервер!';
    }

}


///Tests

if  (!empty($_FILES)) {

    $testObject = new Uploader('img');

    assert( true === is_bool($testObject->isUploaded()) );

    if ( $_FILES['img']['error']  === 0
        && ($_FILES['img']['type'] !== 'image/jpeg' && $_FILES['img']['type'] !== 'image/png') ) {

        assert('Неверный формат файла!' === $testObject->upload());

    }


    if ( $_FILES['img']['error'] !== 0 && empty($_FILES['img']['tmp_name']) ) {

        assert('Ошибка загрузки на сервер!' === $testObject->upload());

    }

}