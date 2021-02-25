<?php


class Attributes
{

    public $strength;
    public $dexterity;
    public $intelligence;

    public function __construct($strength = 10, $dexterity = 10, $intelligence = 10)
    {
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->intelligence = $intelligence;
    }

}