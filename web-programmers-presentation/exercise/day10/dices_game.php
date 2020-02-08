<?php
/*
Игра "Кости"

Домашнее задание. 

Сделать 2 версии игры на основании этой, выслать мне исходные коды обоих версий.
1 я версия: 
Изменить правило игры. Игрок в каждом туре должен бросать кубик не 1, а 3 раза и накапливать результат.
2я версия: 
Игрок вместо броска кубика должен вращать барабан один раз. На барабане 100 делений, от 0 до 100. Сколько выпало у игрока на барабане записывается ему в очки. Создать класс Барабан и изменить правило игры с броска кубика на вращение барабана.  

*/
/********************** Кубик *****************/
class Dice
{
    const MIN_POINT = 1;
    const MAX_POINT = 6;

    function throwIt()
    {
        return rand(self::MIN_POINT, self::MAX_POINT);
    }
}
/********************** Игрок *****************/
class Player
{
    public $name;
    protected $_points;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getPoints() {
        return $this->_points;
    }

    public function addPoints($points)
    {
        $this->_points += $points;
        echo "Игрок {$this->name} получил {$points} очков, в сумме {$this->_points}", "<br>";
    }
}
/********************** Правило *****************/
class Rule
{
    protected $_dice;
    protected $_player;

    public function __construct($player)
    {
        $this->_dice = new Dice;
        $this->_player = $player;
    }

    public function run()
    {
        $points = $this->_dice->throwIt();
        $this->_player->addPoints($points);
    }

}
/********************** Тур *****************/
class Tour
{
    protected $_players = array();

    public function __construct($players)
    {
        $this->_players = $players;
    }

    public function run()
    {
        foreach ($this->_players as $player) {
            $rule = new Rule($player);
            $rule->run();
        }
    }
}
/********************** Игра *****************/
class Game
{
    protected $_players;
    protected $_cntTours;

    public function __construct($players, $cntTours)
    {
        $this->_players = $players;
        $this->_cntTours = $cntTours;
    }

    public function play(){
        for ($i = 0; $i < $this->_cntTours; $i++) {
            echo "Start tour #{$i}<br>";
            $tour = new Tour($this->_players);
            $tour->run();
        }
    }

    public function getWinner(){
        $winner = null;
        foreach ($this->_players as $player) {
            if (is_null($winner)) {
                $winner = $player;
            } else {
                if ($winner->getPoints() < $player->getPoints()) {
                    $winner = $player;
                }
            }
        }
        return $winner;
    }

}
/********************** ИГРА *****************/
define('CNT_TOURS', 3);

$players = array(
    new Player('vova')
    , new Player('artem')
    , new Player('artur')
);

$game = new Game($players, CNT_TOURS);
$game->play();
$win = $game->getWinner();

echo "Ура, победил игрок {$win->name}!!!!!!!!!!!!!!!!";
?>