<?php
$data = $_POST;
$total = 8;
$correct = array_count_values($data)[1] ?? 0;

$incorrect = $total - $correct;
$conn = new mysqli('localhost', 'root', '', 'quiz');
$user_name = htmlspecialchars( $data['name']) ?? "-";

$sqlzap = "insert into results (`name`, `total`, `correct`, `incorrect`) values ('$user_name', $total, $correct, $incorrect)";
$conn->query($sqlzap);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Montserrat+Alternates:ital,wght@1,300&family=Montserrat:ital,wght@0,300;0,400;0,600;1,600&family=Oswald:wght@400;500&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400&family=Montserrat+Alternates:ital,wght@1,300&family=Montserrat:ital,wght@0,300;0,400;0,600;1,600&family=Oswald:wght@400;500&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/result_style.css">
</head>
<body>

<header></header>


<main>
<div class="back"><a href="index.php">    Назад    </a></div>

<span class="test"><h2>Тест з PHP</h2></span>
    <div class="name">

        <span>
            <p>Ви пройшли тест <br><br>
                Ось ваш результат</p>
                <br>
                <br>
        </span>

        <span class="result">
           <b> <span> Всього: 8</span>
                <br>
                <br>
              <span>  Правильні відповіді </span><?php 
              echo $correct
              ?>
                <br>
                <br>
                <span> Неправильні відповіді </span><?php 
              echo $incorrect
              ?>
            </b>
            
        </span>

</main>
    
</body>
</html>