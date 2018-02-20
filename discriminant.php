<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Дискриминант</title>
    <link rel="stylesheet" href="/css/discriminant.css">
</head>
<body>
    <?php

    function discriminant($a, $b, $c)
    {
        if (!empty($a) && !empty($b) && !empty($c)) {
            $d = $b ** 2 - 4 * $a * $c;
            return $d;
        } else {
            return 'Введены некорректные значения';
        }
    }

    assert( 0 === discriminant(2, 4, 2) );
    assert( 8 === discriminant(1, 4, 2) );
    assert( -16 === discriminant(4, 4, 2) );
    assert( 'Введены некорректные значения' === discriminant(0, 4, 2) );

    ?>
    <div class="equation">
        <form action="/discriminant.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="a">
                    <input name="a" id="a" type="number" value="<?php echo $_POST['a']; ?>">
                    <span>x<sup>2</sup></span>
                </label>
                <label for="b">
                    <input name="b" id="b" type="number" value="<?php echo $_POST['b']; ?>">
                    <span>x</span>
                </label>
                <label for="c">
                    <input name="c" id="c" type="number" value="<?php echo $_POST['c']; ?>">
                </label>
                <span>= 0</span>
                <button type="submit">Посчитать!</button>
            </div>
        </form>
    </div>

    <?php

    if ( !empty($_POST) ) {

        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $D = discriminant($a, $b, $c);

        if ( is_int($D) ) {

            if ( $D > 0 ) {

                $firstValue = ( -$b + sqrt($D) ) / 2 * $a;
                $secondValue = ( -$b - sqrt($D) ) / 2 * $a;
                echo 'Уравнение имеет два корня: '  . $firstValue . ' и ' . $secondValue;

            } elseif ( 0 === $D) {

                $value = (-$b) / 2 * $a;
                echo 'Уравнение имеет 1 корень: ' . $value;

            } else {

                echo 'Уравнение не имеет корней';

            }

        } else {

            echo $D;

        }

    }

    ?>
</body>
</html>