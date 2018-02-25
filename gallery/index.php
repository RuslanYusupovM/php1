<?php

require __DIR__ . '/func.php';

$images = getFilesFromFolder(__DIR__ . '/images');

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея</title>
    <link rel="stylesheet" href="/css/image.css">
</head>
<body>

<h1>Галерея</h1>

<?php

if ( is_array($images) ) {

    foreach ($images as $index => $image) {

            $imageName = getImageName($image);

            ?>
            <a href="/gallery/image.php?id=<?php echo $index; ?>" class="image">
                <img src="/gallery/images/<?php echo $image; ?>"
                     alt="<?php echo $imageName; ?>"
                     title="<?php echo $imageName; ?>">
            </a><?php
    }
}
?>

</body>
</html>