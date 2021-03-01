<?php


class SkillSet
{

    public $skills = [];

    public function AddSkillToSet(Skill $skill)
    {
        $this->skills[] = $skill;
    }
}