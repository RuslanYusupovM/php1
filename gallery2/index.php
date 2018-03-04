<?php

require __DIR__ . '/uploader.php';
require __DIR__ . '/func.php';

$imageToUpload = new Uploader('img');

if  ( $imageToUpload->isUploaded() ) {

    $status = $imageToUpload->upload();

}

$images = getFilesFromFolder(__DIR__ . '/images');

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея</title>
    <link rel="stylesheet" href="/gallery2/css/image.css">
</head>
<body>

<h1>Галерея</h1>

<?php

if ( is_array($images) ) {

    foreach ($images as $index => $image) {

            $imageName = getImageName($image);

            ?>
            <a href="/gallery2/image.php?id=<?php echo $index; ?>" class="image">
                <img src="/gallery2/images/<?php echo $image; ?>"
                     alt="<?php echo $imageName; ?>"
                     title="<?php echo $imageName; ?>">
            </a><?php
    }
}
?>
<div class="gallery_form">
    <h2>Форма загрузки изображений</h2>
    <form action="/gallery2/" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <button type="submit">Добавить изображение</button>
    </form>
    <?php
    if  (isset($status)) {?><div><?php echo $status; ?></div><?php }?>

</div>

</body>
</html>