<?php

class TextFile {

    protected $data;
    public $path;

    public function __construct($path)
    {
        if (file_exists($path) && is_readable($path)) {

            $this->path = realpath($path);

            $this->data = file_get_contents( $this->path );

            return true;

        }

        return null;
    }


    public function getData()
    {
        return explode("\n", $this->data);
    }

    public function save()
    {
        return file_put_contents($this->path, $this->data);
    }
}

class GuestBook
    extends TextFile {

    public function append($text)
    {

        $text = trim($text);

        $arrRecords = $this->getData();

        if ( !empty($text) ) {

            $arrRecords[] = $text;

            $this->data = implode("\n", $arrRecords);

            return $this;
        }

        return false;

    }

}
