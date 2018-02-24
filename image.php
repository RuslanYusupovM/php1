<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Картинка <?php echo $image; ?></title>
</head>
<body>

<?php

if ( isset($_GET['id']) ) {

    $imageId = $_GET['id'];

    $images = scandir(__DIR__ . '/images');

    $image = $images[$imageId];

    $imageName = mb_strimwidth($image, 0, -4);

    ?>

    <h1>Картинка <?php echo $imageName; ?></h1>

    <img src="<?php echo '/images/' . $image; ?>" alt="<?php echo $imageName; ?>" title="<?php echo $imageName; ?>">

    <a href="/">Вернуться в галерею</a>

<?php

} else {

    header('Location: /');

}?>

</body>
</html>


