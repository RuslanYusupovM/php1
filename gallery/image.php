<?php

require __DIR__ . '/func.php';

$images = getFilesFromFolder(__DIR__ . '/images');

if ( isset($_GET['id']) && isset($images[$_GET['id']]) ) {

    $id = $_GET['id'];

    $image = $images[$id];

    $imageName = getImageName($image);

} else {

    $image = null;

    $imageName = null;

    header('Location: /gallery/');

}

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Картинка <?php echo $image; ?></title>
</head>
<body>

    <h1>Картинка <?php echo $imageName; ?></h1>

    <img src="/gallery/images/<?php echo $image; ?>" alt="<?php echo $imageName; ?>" title="<?php echo $imageName; ?>">

    <a href="/gallery/">Вернуться в галерею</a>


</body>
</html>


