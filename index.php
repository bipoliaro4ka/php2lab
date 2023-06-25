<?php

require_once 'config/connect.php';

?>

<!doctype >
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Car ticket office</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Номер автобуса</th>
            <th>Маршурт</th>
            <th>Водитель</th>
            <th>Тип автобуса</th>
            <th>Дата</th>
            <th>Время</th>
            <th>Стоимость</th>
            <th></th>
            <th></th>
        </tr>

            <?php
                $flights = mysqli_query($connect, "SELECT * FROM `flights`");
                $flights = mysqli_fetch_all($flights);
                foreach ($flights as $flight){
                    ?>
                    <tr>
                        <td><?= $flight[0] ?></td>
                        <td><?= $flight[1] ?></td>
                        <td><?= $flight[2] ?></td>
                        <td><?= $flight[3] ?></td>
                        <td><?= $flight[4] ?></td>
                        <td><?= $flight[5] ?></td>
                        <td><?= $flight[6] ?></td>
                        <td><?= $flight[7] ?></td>
                        <td><a class="update" href="update.php?id=<?= $flight[0] ?>">Изменить</a></td>
                        <td><a  class="delete" href="vendor/delete.php?id=<?= $flight[0] ?>">Удалить</a></td>

                    </tr>
                <?php
                }
            ?>
    </table>
    <div class="add">
        <a href="add.php">Добавить</a>
    </div>

</body>
</html>
