<?php



namespace App;


class Team
{

    public $teamName = [];

    /**
     * Team constructor.
     * @param $teamName
     */
    public function __construct($teamName = [])
    {
        $this->teamName = $teamName;
    }

}