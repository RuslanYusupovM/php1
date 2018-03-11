<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Картинка <?php echo $data['image']['name']; ?></title>
</head>
<body>

<h1>Картинка <?php echo $data['image']['name']; ?></h1>

<img src="/gallery3/images/<?php echo $data['image']['source']; ?>"
     alt="<?php echo $data['image']['name']; ?>"
     title="<?php echo $data['image']['name']; ?>">

<a href="/gallery3/">Вернуться в галерею</a>


</body>
</html>