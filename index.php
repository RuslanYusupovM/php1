<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея</title>
</head>
<body>

<h1>Галерея</h1>

<?php

$images = scandir(__DIR__ . '/images');

if ( is_array($images) ) {

    foreach ($images as $index => $image) {

        if ($image !== '.' && $image !== '..') {

            $imageName = mb_strimwidth($image, 0, -4);

            ?>
            <a href="<?php echo '/image.php?id=' . $index; ?>">
                <img src="<?php echo '/images/' . $image; ?>"
                     alt="<?php echo $imageName; ?>"
                     width="400"
                     title="<?php echo $imageName; ?>">
            </a>

        <?php }

    }

}


?>

</body>
</html>