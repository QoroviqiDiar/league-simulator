<?php


namespace App\Team;


class FootballTeam extends \Team
{

    /**
     * Team constructor.
     * @param $name Team name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}




