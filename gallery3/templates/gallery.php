<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея</title>
    <link rel="stylesheet" href="/gallery3/css/image.css">
</head>
<body>

<h1>Галерея</h1>

<?php

if ( !empty($data['images']) ) {

    $images = $data['images'];

    foreach ($images as $index => $image) {

        ?>
    <a href="/gallery3/image.php?id=<?php echo $index; ?>" class="image">
        <img src="/gallery3/images/<?php echo $image['source']; ?>"
             alt="<?php echo $image['name']; ?>"
             title="<?php echo $image['name']; ?>">
        </a><?php

    }

}
?>
<div class="gallery_form">
    <h2>Форма загрузки изображений</h2>
    <form action="/gallery3/" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <button type="submit">Добавить изображение</button>
    </form>
    <?php
    if  ( isset($data['status']) ) {?><div><?php echo $data['status']; ?></div><?php }?>

</div>

</body>
</html>