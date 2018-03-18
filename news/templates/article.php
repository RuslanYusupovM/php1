<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lorem</title>
    <link rel="stylesheet" href="/news/css/styles.css">
</head>
<body>

<h1><?php echo $article->name; ?></h1>

<hr>

<div class="article"><?php echo $article->detailText; ?></div>

<hr>
<a href="/news/">Все новости</a>

</body>
</html>