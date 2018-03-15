<?php

require __DIR__ . '/News.php';

class Article
    extends News
{

    public $id;
    public $name;
    public $detailText;
    public $previewText;
    protected $filePath;

    public function __construct(int $id)
    {

        parent::__construct();

        if ( isset($this->files[$id]) ) {

            $this->setId($id)->setPath()->setName()->setText();

        }

        return $this;
    }

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function setPath()
    {
        $this->filePath = $this->dirPath . '/' . $this->files[$this->id];
        return $this;
    }

    public function setName()
    {
        $this->name = pathinfo($this->filePath, PATHINFO_FILENAME);
        return $this;
    }

    public function setText()
    {
        $this->detailText = file_get_contents($this->filePath);
        $this->previewText = mb_strimwidth($this->detailText, 0, 255, '...');
        return $this;
    }

}