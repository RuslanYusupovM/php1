<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
</head>
<body>

<?php

$x = isset($_GET['x']) ? $_GET['x'] : null;
$y = isset($_GET['y']) ? $_GET['y'] : null;
$op = isset($_GET['operation']) ? $_GET['operation'] : null;

if ( isset($x) && isset($y) && isset($op) ) {
    switch ( $op ) {
        case '+':
            $result = $x + $y;
            break;
        case '-':
            $result = $x - $y;
            break;
        case '*':
            $result = $x * $y;
            break;
        case '/':
            $result = $x / $y;
            break;
        case '^':
            $result = $x ** $y;
            break;
    }
}

$operations = [
    '+', '-', '*', '/', '^',
];

?>

<form action="/calc.php" method="get">
    <label for="x">
        <input type="number" id="x" name="x" required value="<?php echo $x; ?>">
    </label>
    <label for="operation">
        <select name="operation" id="operation">
        <?php

        foreach ($operations as $operation) {?>
            <option
                value="<?php echo $operation; ?>"

                <?php

                if ($operation === $op) {
                    echo 'selected';
                }

                ?>

            >
                <?php echo $operation; ?>
            </option>
        <?php
        }
        ?>
        </select>
    </label>
    <label for="y">
        <input type="number" id="y" name="y" required value="<?php echo $y; ?>">
    </label>
    <button type="submit" value="=">=</button>

    <?php

    if ( isset($result) ) {
        echo $result;
    }

    ?>
</form>

</body>
</html>