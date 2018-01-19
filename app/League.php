<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 1/16/2018
 * Time: 2:43 PM
 */

namespace App;

use App\Match;

class League
{


    public $teamNames = ["Liverpool", "Arsenal", "ManCity", "ManUTD", 'West Ham', 'Totenham'];
    public $teams = [];

    public $matches = [];


    public function addTeam()
    {
        foreach ($this->teamNames as $teamName) {
            array_push($this->teams, new Team($teamName));
        }
    }


    public function scheduleMatches()
    {
        $reverseTeams = array_reverse($this->teams);

        foreach ($this->teams as $homeIndex => $homeTeam) {
            foreach ($reverseTeams as $foreignIndex => $foreignTeam) {
                if ($homeTeam !== $foreignTeam) {
                    $match = new Match($homeTeam, $foreignTeam);
                    $this->addMatch($match);
                }
            }
        }
    }

    public function play()
    {

    }

    public function startLeague()
    {
        foreach ($this->matches as $match) {
            return null;
        }
    }

    public function printTable()
    {
        foreach ($this->matches as $match) {
            $row = [$match->getHomeTeam()->name, $match->getHomeScore(), $match->getForeignScore(), $match->getForeignTeam()->name];
            $this->addRow($row);
        }
    }

    private function addMatch(Match $match)
    {
        array_push($this->matches, $match);
    }

}










