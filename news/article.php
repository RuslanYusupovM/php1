<?php

require __DIR__ . '/classes/Db.php';
require __DIR__ . '/classes/Article.php';
require __DIR__ . '/classes/View.php';

$article = new Article;
$view = new View;

if ( !empty($_GET['id']) ) {

    $view->assign( 'article', $article->getById($_GET['id']) );
    $view->display(__DIR__ . '/templates/article.php');

} else {

    header('Location: /news/');

}