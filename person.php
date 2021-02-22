<?php

abstract class person
{

    public $name;
    public $age;
    public $nationality;

    /**
     * person constructor.
     * @param $name
     * @param $age
     * @param $nationality
     */
    public function __construct(string $name, int $age, string $nationality)
    {
        $this->name = $name;
        $this->age = $age;
        $this->nationality = $nationality;
    }

    public static function create(...$args): person
    {
        return new static(...$args);
    }
}

class player extends person
{

    public $club;

    public function toTeam(club $club)
    {
        $this->club = $club;
    }


}

class club
{
    public $name;
    public $nation;
    public $stadium;

    /**
     * club constructor.
     * @param $name
     * @param $nation
     * @param $stadium
     */
    public function __construct($name, $nation, $stadium)
    {
        $this->name = $name;
        $this->nation = $nation;
        $this->stadium = $stadium;
    }

    public static function create(...$args)
    {
        return new static(...$args);
    }

}

$player = player::create('Lionel Messi', 33, 'Argentina');

$club = club::create('F. C. Barcelona', 'Spain', 'Campo Nou');
$player->toTeam($club);

echo '<pre>';
var_dump($player);
echo '</pre>';
