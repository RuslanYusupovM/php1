<?php

include __DIR__ . '/classes/Db.php';

$db = new Db;
echo '<pre>';
var_dump($db->query('SELECT * FROM news WHERE id=:id', [':id' => 2]));