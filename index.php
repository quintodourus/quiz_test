<?php

$conn = new mysqli('localhost', 'root', '', 'quiz');

if ($conn->connect_error) {
    echo $conn->connect_error;
  die("Connection failed: " . $conn->connect_error);

}
echo "Connected successfully";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main_style.css">
</head>
<body>
    
        <header></header>
        <main>
            <div class="stat"><a href="stats.php">Статистика</a></div>
            
    <span class="test"><h2>Тест з PHP</h2></span>

    <form action="result.php" method='post'>
    <div class="name">
        <br>
    
    <input name="name" type="text" placeholder="Введіть своє ім'я">
    
    </div>
    <br>
        


        <div class="test">
        <span>1. Що означає абревіатура PHP</span>
            <br>
            <br>
            <input type="radio" value="0" name="first"> Public Hosting Platform
            <br>
            <br>
            <input type="radio" value="1" name="first"> PHP: Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="first"> Perfomstted Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="first"> Private Home Page
            
        </div>
        <br>
        <div class="test">
        <span>1. Що означає абревіатура PHP</span>
            <br>
            <br>
            <input type="radio" value="0" name="sec"> Public Hosting Platform
            <br>
            <br>
            <input type="radio" value="1" name="sec"> PHP: Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="sec"> Perfomstted Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="sec"> Private Home Page
            
        </div>
        <br>
        <div class="test">
        <span>1. Що означає абревіатура PHP</span>
            <br>
            <br>
            <input type="radio" value="0" name="third"> Public Hosting Platform
            <br>
            <br>
            <input type="radio" value="1" name="third"> PHP: Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="third"> Perfomstted Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="third"> Private Home Page
            
        </div>
        <br>
        <div class="test">
        <span>1. Що означає абревіатура PHP</span>
            <br>
            <br>
            <input type="radio" value="0" name="fourth"> Public Hosting Platform
            <br>
            <br>
            <input type="radio" value="1" name="fourth"> PHP: Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="fourth"> Perfomstted Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="fourth"> Private Home Page
            
        </div>
        <br>
        <div class="test">
        <span>1. Що означає абревіатура PHP</span>
            <br>
            <br>
            <input type="radio" value="0" name="fifth"> Public Hosting Platform
            <br>
            <br>
            <input type="radio" value="1" name="fifth"> PHP: Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="fifth"> Perfomstted Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="fifth"> Private Home Page
            
        </div>
        <br>
        <div class="test">
        <span>1. Що означає абревіатура PHP</span>
            <br>
            <br>
            <input type="radio" value="0" name="sixth"> Public Hosting Platform
            <br>
            <br>
            <input type="radio" value="1" name="sixth"> PHP: Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="sixth"> Perfomstted Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="sixth"> Private Home Page
            
        </div>
        <br>
        <div class="test">
        <span>1. Що означає абревіатура PHP</span>
            <br>
            <br>
            <input type="radio" value="0" name="seventh"> Public Hosting Platform
            <br>
            <br>
            <input type="radio" value="1" name="seventh"> PHP: Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="seventh"> Perfomstted Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="seventh"> Private Home Page
            
        </div>
        <br>
        <div class="test">
        <span>1. Що означає абревіатура PHP</span>
            <br>
            <br>
            <input type="radio" value="0" name="eight"> Public Hosting Platform
            <br>
            <br>
            <input type="radio" value="1" name="eight"> PHP: Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="eight"> Perfomstted Hypertext Processor
            <br>
            <br>
            <input type="radio" value="0" name="eight"> Private Home Page
            
        </div>
        <br>

       <a href="result.php"> <input type="submit" value="Завершити"> </a>
       </form>
        



        </main>

        

        


</body>
</html>