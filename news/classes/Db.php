<?php

class Db
{
    protected $dirPath;
    protected $files;

    public function __construct()
    {
        $this->dirPath = __DIR__ . '/../articles/';
        $this->files = array_diff( scandir($this->dirPath), ['.', '..'] );
    }

}