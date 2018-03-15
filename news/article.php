<?php

require __DIR__ . '/classes/Article.php';
require __DIR__ . '/classes/View.php';

$view = new View;

if ( !empty($_GET['id']) ) {

    $id = trim($_GET['id']);

    $article = new Article($id);

    $view->assign('article', $article);
    $view->display(__DIR__ . '/templates/article.php');

} else {

    header('Location: /news/');

}