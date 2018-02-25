<?php

require __DIR__ . '/func.php';

if (isset($_POST['city'])) {
    $cityName = $_POST['city'];
} else {
    $cityName = null;
}

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Игра "Города"</title>
</head>
<body>

<h1>Игра "Города"</h1>

<form action="/game/" method="post">
    <label for="city">
        <input type="text" name="city" id="city" value="<?php echo $cityName; ?>">
    </label>
    <button type="submit">Сделать ход!</button>
    <?php echo getCityByLetter($cityName); ?>
</form>

</body>
</html>
