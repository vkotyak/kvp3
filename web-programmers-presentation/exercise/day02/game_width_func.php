<?php
define('MIN_POINTS', 1);
define('MAX_POINTS', 6);
define('ROUNDS', 3);

$players = array(
    array('name' => 'Игрок 1', 'points' => 0)
    , array('name' => 'Игрок 2', 'points' => 0)
    , array('name' => 'Игрок 3', 'points' => 0)
);

foreach ($players as $index => $player) {
    echo "Бросает кости игрок {$player['name']}<br>";
    $players[$index]['points'] = calculate_points($player['name'], $player['points']);
}

$points_by_player = array_column($players, 'points');

$max_points = max($points_by_player);


$winners = array();

foreach($players as $player) {
    if ($max_points == $player['points']) {
        $winners[] = $player;
    }
}

echo "Победителей ", count($winners), "<br>";

foreach($winners as $winner) {
    echo "Поздравляем победителя, игрок {$winner['name']}!!!<br>";
}

function calculate_points($name, $current_points = 0){    
    for($i = 0; $i < ROUNDS; $i++) {
        $round = $i + 1;
        $rand = rand(MIN_POINTS, MAX_POINTS);
        $current_points += $rand;
        echo "Ход {$round}. Игрок {$name} выбросил {$rand} очков. Итого игрок имеет  {$current_points} <br>";
    }
    return $current_points;
}

?>