<?php

ini_set('display_errors', 1);

class CharacterRepository {

    public static function getCharacterData($id) {
        switch ($id) {
            case 0:
                return [
                    'id' => 0,
                    'name' => 'Dakrist',
                    'level' => 83,
                    'class' => 'Shadow',
                    'ascendancy' => 'Assassin',
                    'bonuses' => [
                        'Critical Strike Chance' => 40,
                        'Attack Speed' => 10,
                        'Dodge Chance' => 10
                    ]
                ];
            case 1:
                return [
                    'id' => 1,
                    'name' => 'Olivia',
                    'level' => 58,
                    'class' => 'Witch',
                    'ascendancy' => null,
                    'bonuses' => [
                        'Minion Damage' => 15,
                        'Elemental Damage' => 15,
                        'Damge over Time' => 15
                    ]
                ];
        }
    }
}

class Character {

    public $name;
    public $level;
    public $class;
    public $bonuses;

    public function __construct(int $id) {
        $characterData = CharacterRepository::getCharacterData($id);

        $this->name = $characterData['name'];
        $this->level = $characterData['level'];
        $this->class = $characterData['class'];
        $this->bonuses = $characterData['bonuses'];
    }

    public function levelUp() {
        $this->level + 1;
        return $this->name . ' gained a level!';
    }
}

class CharacterClass {

    public $className;
    public $icon;
    public $bonuses;

    public function __construct($className, $icon, $bonuses) {
        $this->className = $className;
        $this->icon = $icon;
        $this->bonuses = $bonuses;
    }
}

class AscendancyClass extends CharacterClass {
    public $ascendancySkillPoints;
}

$character = new Character(0);
echo '<pre>',var_dump($character),'</pre>';

$character->levelUp();
echo '<pre>',var_dump($character),'</pre>';
exit();