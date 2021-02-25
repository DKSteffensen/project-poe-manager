<?php


class Skill
{

    public $name;
    public $type;
    public $level;

    /**
     * Skill constructor.
     * @param $name
     * @param $type
     * @param $level
     */
    public function __construct(string $name, string $type, int $level)
    {
        $this->name = $name;
        $this->type = $type;
        $this->level = $level;
    }

}