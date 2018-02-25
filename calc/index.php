<?php

require __DIR__ . '/func.php';

$operations = [
    '+', '-', '*', '/', '**',
];

if ( isset($_GET['x']) ) {
    $x = (int) $_GET['x'];
} else {
    $x = null;
}

if ( isset($_GET['y']) ) {
    $y = (int) $_GET['y'];
} else {
    $y = null;
}

if ( isset($_GET['operation']) && in_array($_GET['operation'], $operations) ) {
    $op = $_GET['operation'];
} else {
    $op = null;
}

$result = calculate($x, $y, $op);

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
</head>
<body>

<form action="/calc/" method="get">
    <label for="x">
        <input type="number" id="x" name="x" required value="<?php echo $x; ?>">
    </label>
    <label for="operation">
        <select name="operation" id="operation">
            <?php
            foreach ($operations as $operation) {?>
                <option value="<?php echo $operation; ?>" <?php if ($operation === $op) {?>selected<?php } ?>>
                    <?php echo $operation; ?>
                </option>
            <?php } ?>
        </select>
    </label>
    <label for="y">
        <input type="number" id="y" name="y" required value="<?php echo $y; ?>">
    </label>
    <button type="submit" value="=">=</button>

    <?php echo $result; ?>
</form>

</body>
</html>