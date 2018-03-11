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
                        __DIR__ . '/../images/' . $this->file['name']
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