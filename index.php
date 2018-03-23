<?php

include __DIR__ . '/classes/Db.php';
include __DIR__ . '/classes/View.php';

$db = new Db;
$view =new View;

$query = 'SELECT * FROM news ORDER BY id DESC';

if (true === $db->execute($query)) {

    $news = $db->query($query, []);

    $view->assign('articles', $news);

    $view->display(__DIR__ . '/templates/news.php');

} else {

    echo 'DB error!';

}