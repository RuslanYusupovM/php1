<?php

require __DIR__ . '/classes/Article.php';
require __DIR__ . '/classes/View.php';

$news = new News();

$articles = $news->getAll();

$view = new View;

$view->assign('articles', $articles);

$view->display(__DIR__ . '/templates/news.php');
