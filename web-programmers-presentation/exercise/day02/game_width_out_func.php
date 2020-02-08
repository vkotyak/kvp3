<?php
$player1 = "Я";
$player2 = "Робот";
$player3 = "Индюк";
    
$player1Points = 0;
$player2Points = 0;
$player3Points = 0;

//Игрок 1
echo "Бросаем кости игроку - {$player1}", '<br>';

$player1Points += rand(1,6); 

echo "Ход 1. {$player1}, поздлавряем у вас {$player1Points}!!!", '<br>';

$player1Points += rand(1,6);

echo "Ход 2. {$player1}, поздлавряем у вас {$player1Points}!!!", '<br>';

$player1Points += rand(1,6);

echo "Ход 3. {$player1}, поздлавряем у вас {$player1Points}!!!", '<br>';

//Игрок 2
echo "Бросаем кости игроку - {$player2}", '<br>';

$player2Points += rand(1,6); 

echo "Ход 1. {$player2}, поздлавряем у вас {$player2Points}!!!", '<br>';

$player2Points += rand(1,6);

echo "Ход 2. {$player2}, поздлавряем у вас {$player2Points}!!!", '<br>';

$player2Points += rand(1,6);

echo "Ход 3. {$player2}, поздлавряем у вас {$player2Points}!!!", '<br>';

//Игрок 3
echo "Бросаем кости игроку - {$player3}", '<br>';

$player3Points += rand(1,6); 

echo "Ход 1. {$player3}, поздлавряем у вас {$player3Points}!!!", '<br>';

$player3Points += rand(1,6);

echo "Ход 2. {$player3}, поздлавряем у вас {$player3Points}!!!", '<br>';

$player3Points += rand(1,6);

echo "Ход 3. {$player3}, поздлавряем у вас {$player3Points}!!!", '<br>';

$maxPoints = max($player1Points, $player2Points, $player3Points);

if ($player1Points == $maxPoints) {
    echo "Поздравляем, победил игрок - {$player1}";
} else if ($player2Points == $maxPoints) {
    echo "Поздравляем, победил игрок - {$player2}";
} else if ($player3Points == $maxPoints) {
    echo "Поздравляем, победил игрок - {$player3}";
} else {
    echo "Ничья.";
}


?>