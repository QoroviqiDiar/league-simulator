<?php
/**
 * Created by PhpStorm.
 * User: Diar
 * Date: 1/16/2018
 * Time: 2:43 PM
 */

namespace App\Entities\League;

use App\Entities\League\League;
use App\Entities\Match\SoccerMatch;


use App\Entities\Team\SoccerTeam;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\ConsoleOutput;


class SoccerLeague extends League
{


   public $teamNames = ["Liverpool", "Arsenal", "ManCity", "ManUTD", 'West Ham', 'Totenham'];
//    public $teams = [];
//
//    public $matches = [];
//
//
//    public $tableRow = [];




    public function prepareTeams()
    {
        foreach ($this->teamNames as $teamName) {
            array_push($this->teams, new SoccerTeam($teamName));
        }
    }


    public function scheduleMatches()
    {
        foreach ($this->teams as $homeIndex => $homeTeam) {
            foreach ($this->teams as $foreignIndex => $foreignTeam) {
                if ($homeTeam !== $foreignTeam) {
                    $match = new SoccerMatch($homeTeam, $foreignTeam);
                    $this->addMatch($match);
                }
            }
        }
    }


    public function startLeague()
    {

        foreach ($this->matches as $index => $match) {
            $match->play();
        }
    }

    public function prepareTableRows()
    {
        foreach ($this->matches as $match) {
            array_push($this->tableRow, [$match->getHomeTeam()->name, $match->getHomeScore(), $match->getForeignScore(), $match->getForeignTeam()->name]);
        }
    }

    public function printTable()
    {
        $output = new ConsoleOutput();
        $table = new Table($output);

        foreach ($this->tableRow as $index => $tableRow) {

            $table
                ->setHeaders(array('Home Team', 'Result', 'Away Team'))
                ->addRow(
                    array($tableRow[0], $tableRow[1] . " : " . $tableRow[2], $tableRow[3])
                );

        }


        $table->render();
    }


    private function addMatch(SoccerMatch $match)
    {
        array_push($this->matches, $match);
    }


}










