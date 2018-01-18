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

    public $teamNames = ["Liverpool", "Arsenal", "ManCity", "ManUTD", 'West Ham', 'Portsmouth'];
    public $teams = [];

    public $matches = [];

    // value types, reference types, and object instances.
    public function scheduleMatches()
    {
        foreach ($testing as $item) {
            $match = new Match(new Team(), new Team());
            $this->addMatch($match);
        }
    }

    public function startLeague(){
        foreach($this->matches as $match){
            $match->play();
        }
    }

    public function printTable(){
        foreach($this->matches as $match){
            $row = [$match->getHomeTeam()->name, $match->getHomeScore(), $match->getForeignScore(), $match->getForeignTeam()->name];
            $this->addRow($row);
        }
    }

    private function addMatch(Match $match)
    {
        array_push($this->matches, $match);
    }

}










