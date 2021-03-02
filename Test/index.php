<?php

ini_set('display_errors', 1);

class CharacterRepository {

    public static function getCharacterData($id) {
        switch ($id) {
            case 0:
                return [
                    'id' => 0,
                    'user_id' => 0,
                    'name' => 'Dakrist',
                    'level' => 78,
                    'characterClass' => 'Shadow',
                    'life' => 4550,
                    'mana' => 1812,
                    'icon' => 'shadow_icon.png'

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
class CharacterClass {

    public $name;
    public $life;
    public $mana;
    public $icon;

    public function __construct($name, $life, $mana, $icon) {
        $this->name = $name;
        $this->life = $life;
        $this->mana = $mana;
        $this->icon = $icon;
    }
}

class AscendancyClass {

    public $name;
    public $icon;

    public function __construct($name, $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }

}

class Character {

    public $name;
    public $level;
    public $life;
    public $mana;
    public $icon;
    //public $traits;
    public $characterClass;
    public $ascendancyClass;

    public function __construct(string $name, int $level, CharacterClass $characterClass, AscendancyClass $ascendancyClass = null) {
        $this->name = $name;
        $this->level = $level;
        $this->life = $characterClass->life;
        $this->mana = $characterClass->mana;
        $this->characterClass = $characterClass->name;

        if ($ascendancyClass) {
            $this->ascendancyClass = $ascendancyClass->name;
            $this->icon = $ascendancyClass->icon;
        }

        $this->icon = $characterClass->icon;
    }

    public function attack() {

    }

    public function defend() {

    }

    public function levelUp() {

    }

    public function calculateLife() {

    }

    public function calculateMana() {

    }


}

$characterClass = new CharacterClass('Shadow', 52, 57, 'shadow_icon.png');
$ascendancyClass = new AscendancyClass('Assassin', 'assassin_icon.png');
$character = new Character('Dakrist', 78, $characterClass, $ascendancyClass);

echo '<pre>',var_dump($character),'</pre>';
exit();