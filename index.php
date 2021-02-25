<?php

require_once('Character.php');
require_once('CharacterClass.php');
require_once('Attributes.php');
require_once('Ascendancy.php');
require_once('Skill.php');
require_once('SkillSet.php');


$skillSet = new SkillSet();
$skillSet->AddSkillToSet(new Skill('Ice Nova', 'Attack', 1));
$skillSet->AddSkillToSet(new Skill('Cyclone', 'Attack', 1));
$skillSet->AddSkillToSet(new Skill('Steelskin', 'Defence', 1));
$skillSet->AddSkillToSet(new Skill('Flame Dash', 'Movement', 1));

$character = new Character(
    'Olivia',
    3500,
    new CharacterClass(),
    new Ascendancy(),
    $skillSet,
    new Attributes());

echo '<pre>';
var_dump($character);
echo '</pre>';