<?php

require __DIR__ . '/TextFile.php';

class GuestBook
    extends TextFile {

    public function append($text)
    {

        $text = trim($text);

        $arrRecords = $this->getData();

        if ( !empty($text) ) {

            $arrRecords[] = $text;

            $this->data = $arrRecords;

            return $this;
        }

        return false;

    }

}