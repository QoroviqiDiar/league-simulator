<?php namespace App\Entities;


use App\Abstractions\Team;


class SoccerTeam extends Team
{

    /**
     * Team constructor.
     * @param $name SoccerTeam name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}




