<?php



namespace App;


class Team
{

    public  $teams = [];

    /**
     * Team constructor.
     * @param $teamName
     */
    public function __construct($teams = [])
    {
        $this->teams = $teams;
    }


}

