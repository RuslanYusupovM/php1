<?php

require __DIR__ . '/classes/Db.php';
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/articles/');

$articles = $news->getAll();

$view = new View;

$view->assign('articles', $articles);

$view->display(__DIR__ . '/templates/news.php');
