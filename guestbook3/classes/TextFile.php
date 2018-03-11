<?php

class TextFile {

    protected $data;
    public $path;

    public function __construct($path)
    {
        if (file_exists($path) && is_readable($path)) {

            $this->path = realpath($path);

            $this->data = file( $this->path, FILE_IGNORE_NEW_LINES);

            return true;

        }

        return null;
    }


    public function getData()
    {
        return $this->data;
    }

    public function save()
    {
        return file_put_contents($this->path, implode("\n", $this->data));
    }
}