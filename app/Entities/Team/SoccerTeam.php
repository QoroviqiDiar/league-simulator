<?php


namespace App\Entities\Team;

use App\Entities\Team\Team;


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




