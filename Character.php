<?php


class Character
{

    public $PlayerName;
    public $CharacterClass;

    public function __construct(string $PlayerName, CharacterClass $CharacterClass)
    {
        $this->PlayerName = $PlayerName;
        $this->CharacterClass = $CharacterClass;
    }

}
