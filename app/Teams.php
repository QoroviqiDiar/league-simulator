<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 1/17/2018
 * Time: 9:44 AM
 */

namespace App;


class Teams
{
    public $teams = [];

    /**
     * Teams constructor.
     * @param array $teams
     */
    public function __construct(array $teams)
    {
        for ($i = 0; $i < count($teams); $i++) {
            $this->teams[$i] = $teams[$i];
        }
//        $this->teams = $teams;
    }

    public function addTeam(Team $team)
    {
        $this->teams[] = $team;
    }

    public function teams()
    {
        return $this->teams;
    }

}
