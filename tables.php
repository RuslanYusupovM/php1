<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблицы истинности</title>
    <link rel="stylesheet" href="/css/tables.css">
</head>
<body>
    <h1>Таблицы истинности для &&, || и XOR</h1>
    <div class="tables">
        <div class="table">
            <h2>&&</h2>
            <table>
                <tr>
                    <th>a</th>
                    <th>b</th>
                    <th>a && b</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <?php
                        echo (int) (0 && 0);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td>
                        <?php
                        echo (int) (0 && 1);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td>
                        <?php
                        echo (int) (1 && 0);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>
                        <?php
                        echo (int) (1 && 1);
                        ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="table">
            <h2>||</h2>
            <table>
                <tr>
                    <th>a</th>
                    <th>b</th>
                    <th>a || b</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <?php
                        echo (int) (0 || 0);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td>
                        <?php
                        echo (int) (0 || 1);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td>
                        <?php
                        echo (int) (1 || 0);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>
                        <?php
                        echo (int) (1 || 1);
                        ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="table">
            <h2>XOR</h2>
            <table>
                <tr>
                    <th>a</th>
                    <th>b</th>
                    <th>a xor b</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <?php
                        echo (int) (0 xor 0);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td>
                        <?php
                        echo (int) (0 xor 1);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td>
                        <?php
                        echo (int) (1 xor 0);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>
                        <?php
                        echo (int) (1 xor 1);
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>