<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
    <link rel="stylesheet" href="/news/css/styles.css">
</head>
<body>

<h1>Новости</h1>
<?php

foreach ($data['articles'] as $article) {?>
    <a href="/news/article.php?id=<?php echo $article->id; ?>" class="news">
        <h2><?php echo $article->name; ?></h2>
        <?php echo $article->previewText; ?>
    </a>
<?php }
?>

</body>
</html>