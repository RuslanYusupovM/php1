<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пол по имени</title>
</head>
<body>
    <?php

    function gender($name)
    {
        if ( !empty($name) && !preg_match('~\d~', $name) ) {

            if ('Любовь' === ucfirst($name)) {

                return 'Женский пол';

            } elseif ('Никита' === ucfirst($name)) {

                return 'Мужской пол';

            } else {

                $character = substr($name, -2, 2);

                switch ( strtolower($character) ) {

                    case 'а':
                    case 'я':
                        return 'Женский пол';
                        break;

                    default:
                        return 'Мужской пол';
                        break;

                }

            }

        } else {

            return 'Неверное значение';

        }
    }

    assert( 'Женский пол' === gender('Любовь') );
    assert( 'Женский пол' === gender('Вероника') );
    assert( 'Мужской пол' === gender('Андрей') );
    assert( 'Мужской пол' === gender('Никита') );
    assert( 'Неверное значение' === gender('123') );

    ?>

    <form action="/gender.php" method="post" enctype="multipart/form-data">
        <label for="name">
            <input type="text" name="name" id="name" value="<?php echo !empty( $_POST['name'] ) ? $_POST['name'] : ''?>">
        </label>
        <button type="submit">Пол</button>
    </form>

    <?php

    if ( !empty($_POST['name']) ) {

        $name = $_POST['name'];

        echo gender($name);

    }

    ?>
</body>
</html>