<?php

require __DIR__ . '/Article.php';

class News
    extends Db
{

    protected $data;

    public function getAll() : array
    {


        foreach ($this->files as $id => $file) {

            $article = new Article;

            $this->data[] = $article->getById($id);

        }

        return $this->data;

    }

}