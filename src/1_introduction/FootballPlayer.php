<?php



 class FootballPlayer
{
    public $name;
    public $position;

    public function __construct($name, $position)
    {
        $this->name = $name;
        $this->position = $position;
    }
}

$playerA = new FootballPlayer('Macro Reus', 'Striker');
$playerB = new FootballPlayer('Axel Witsel', 'Midfield');

var_dump($playerA->name);
var_dump($playerB); 