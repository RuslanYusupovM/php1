<?php

class News
{

    protected $dirPath = __DIR__ . '/../articles/';
    protected $files;
    protected $articles;

    public function __construct()
    {

        $this->files = array_diff( scandir($this->dirPath), ['.', '..'] );

    }

    public function getAll() : array
    {

        foreach ($this->files as $id => $file) {

            $this->articles[] = new Article($id);

        }

        return $this->articles;

    }

}