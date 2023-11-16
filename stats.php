<?php

$conn = new mysqli('localhost', 'root', '', 'quiz');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stats_style.css">

</head>
<body>
<header></header>

<main>

        <div class="back"><a href="index.php">    Назад    </a></div>
        <span class="test"><h2>Статистика</h2></span>

        <table>
            <tr>
            
                <td>Ім'я</td>
                <td>Всього</td>
                <td>Правильні</td>
                <td>Неправильні</td>
            </tr>

            <?php
            $sql = $conn->query("select * from results order by correct desc limit 10");

            while($row = mysqli_fetch_assoc($sql)){
            echo'
            
            <tr>
                
                <td>'.$row['name'].'</td>
                <td>'.$row['total'].'</td>
                <td>'.$row['correct'].'</td>
                <td>'.$row['incorrect'].'</td>
            </tr>
            ';}
            ?>
            
        </table>
</main>
</body>
</html>