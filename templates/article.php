<?php
if ( !empty($article) ) {

    $article = current($article);

} else {

    $article = null;

    header('Location: /');
    die;

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title><?php echo $article['title']; ?></title>
</head>
<body>

<h1><?php echo $article['title']; ?></h1>
<hr>
<div class="detail_text"><?php echo $article['text']; ?></div>
<div class="author"><?php echo $article['author']; ?></div>
<hr>
<a href="/">Все статьи</a>

</body>
</html>