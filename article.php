<?php

include __DIR__ . '/classes/Db.php';
include __DIR__ . '/classes/View.php';

$db = new Db;
$view =new View;

if ( !empty(htmlspecialchars($_GET['id'])) ) {

    $articleId = htmlspecialchars($_GET['id']);

    $query = 'SELECT title, text, author FROM news WHERE id=:id';

    $article = $db->query($query, [':id' => $articleId]);

    $view->assign('article', $article);

    $view->display(__DIR__ . '/templates/article.php');

} else {

    header('Location: /');
    die;

}