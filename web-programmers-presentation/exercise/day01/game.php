<?php
$player1 = "Я";
$player2 = "Робот";

$player1Points = 0;
$player2Points = 0;

echo "Бросаем кости игроку - {$player1}", '<br>';

$player1Points += rand(1,6); 

echo "Ход 1. {$player1}, поздлавряем у вас {$player1Points}!!!", '<br>';

$player1Points += rand(1,6);

echo "Ход 2. {$player1}, поздлавряем у вас {$player1Points}!!!", '<br>';

$player1Points += rand(1,6);

echo "Ход 3. {$player1}, поздлавряем у вас {$player1Points}!!!", '<br>';


echo "Бросаем кости игроку - {$player2}", '<br>';

$player2Points += rand(1,6); 

echo "Ход 1. {$player2}, поздлавряем у вас {$player2Points}!!!", '<br>';

$player2Points += rand(1,6);

echo "Ход 2. {$player2}, поздлавряем у вас {$player2Points}!!!", '<br>';

$player2Points += rand(1,6);

echo "Ход 3. {$player2}, поздлавряем у вас {$player2Points}!!!", '<br>';


if ($player1Points > $player2Points) {
    echo "Поздравляем, победил игрок - {$player1}";
} else if ($player1Points < $player2Points) {
    echo "Поздравляем, победил игрок - {$player2}";
} else {
    echo "Ничья.";
}


?>