<?php


class Character
{

    public $name;
    public $healthPoints;
    public $characterClass;
    public $ascendancy;
    public $skills = [];
    public $attributes;

    /**
     * Character constructor.
     * @param string $name
     * @param int $healthPoints
     * @param CharacterClass $characterClass
     * @param Ascendancy $ascendancy
     * @param array $skills
     * @param Attributes $attributes
     */
    public function __construct(string $name, int $healthPoints, CharacterClass $characterClass, Ascendancy $ascendancy, SkillSet $skills, Attributes $attributes)
    {
        $this->name = $name;
        $this->healthPoints = $healthPoints;
        $this->characterClass = $characterClass;
        $this->ascendancy = $ascendancy;
        $this->skills = $skills;
        $this->attributes = $attributes;
    }


}
