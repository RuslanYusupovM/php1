<?php

require __DIR__ . '/include/func.php';
require __DIR__ . '/include/handler.php';

$records = getRecords();

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/guestbook/css/gb.css">
    <title>Гостевая книга</title>
</head>
<body>

<h1>Гостевая книга</h1>

<?php

if ( isset($records) ) {

    foreach ($records as $record) {?>
        <div class="record">
            <?php echo $record; ?>
        </div><?php
    }

}

?>

<form action="/guestbook/" method="post">
    <label for="record">
        <textarea name="record" id="record" cols="30" rows="10" placeholder="Введите сообщение"></textarea>
    </label>
    <button type="submit">Отправить</button>
</form>

</body>
</html>