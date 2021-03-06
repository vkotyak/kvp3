<?php
//Дано, заготовка для массива карт. Массив мастей и массив карт с номиналом карты для игры в БлэкДжек
$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);

$faces = array (
    array("name"=>"Two", "point" => 2),
    array("name"=>"Three", "point" => 3 ),
    array("name"=>"Four", "point" => 4 ),
    array("name"=>"Five", "point" => 5 ),
    array("name"=>"Six", "point" => 6 ),
    array("name"=>"Seven", "point" => 7 ),
    array("name"=>"Eight", "point" => 8 ),
    array("name"=>"Nine", "point" => 9 ),
    array("name"=>"Ten", "point" => 10 ),
    array("name"=>"Jack", "point" => 10 ),
    array("name"=>"Queen", "point" => 10 ),
    array("name"=>"King", "point" => 10 ),
    array("name"=>"Ace", "point" => 11 )
);

/*
1) Создать массив $cards который будет представлять колоду карт и в котором все карты будут иметь вид array("name"=>"Two", "point" => 2, "suit" => "Spades")
2) Создать 3х игроков, у игрока есть имя, количество очков набранных в последнем туре, количество выигранных туров, по умолчанию - 'last_tour_points' => 0 и 'won_tours' => 0
3) Провести 3 тура игры. 
Для каждого тура:
1) Колода карт обновляется, она полная. 
2) Колода карт перемешивается //array_shuffle
3) Каждый игрок может вытянуть 4 карты из колоды. Он прекращает тянуть когда набрал 16 очков. 
4) Вытянутая игроком карта изымается из колоды и другие игроки в этом туре её выбрать не могут. //array_shift
5) Все игроки получают очки в колонку 'last_tour_points'
5) Выигравший в туре игрок или игроки получают 1 бал в поле won_tours

Вывести список игроков с максимальным количеством выигранных туров

*/

?>