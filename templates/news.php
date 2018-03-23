<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Новости</title>
</head>
<body>

<h1>Новости</h1>
<hr>
<div class="news">
    <?php
    if (isset($articles)) {

        foreach ($articles as $article) {?>

            <a href="/article.php?id=<?php echo $article['id']; ?>" class="article">
                <div class="title"><?php echo $article['title']; ?></div>
                <div class="text">
                    <?php
                    echo mb_strimwidth($article['text'], 0, 255, '...');
                    ?>
                </div>
                <div class="author"><?php echo $article['author']; ?></div>
            </a>

        <?php }

    }

    ?>
</div>

</body>
</html>