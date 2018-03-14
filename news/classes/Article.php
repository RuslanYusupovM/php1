<?php

class Article
    extends Db
{

    public $id;
    public $name;
    public $detailText;
    public $previewText;
    protected $filePath;

    public function getById($id) : object
    {

        if ( isset($this->files[$id]) ) {

            $this->filePath = $this->dirPath . '/' . $this->files[$id];

            $this->id = $id;
            $this->name = pathinfo($this->filePath, PATHINFO_FILENAME);
            $this->detailText = file_get_contents($this->filePath);
            $this->previewText = mb_strimwidth($this->detailText, 0, 255, '...');

        }

        return $this;

    }


}