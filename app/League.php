<?php
/**
 * Created by PhpStorm.
 * User: Diar
 * Date: 1/16/2018
 * Time: 2:43 PM
 */

namespace App;

use App\Match;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\ConsoleOutput;


class League extends Command
{


    public $teamNames = ["Liverpool", "Arsenal", "ManCity", "ManUTD", 'West Ham', 'Totenham'];
    public $teams = [];

    public $matches = [];


    public $tableRow = [];


    public function prepareTeams()
    {
        foreach ($this->teamNames as $teamName) {
            array_push($this->teams, new Team($teamName));
        }
    }


    public function scheduleMatches()
    {
        foreach ($this->teams as $homeIndex => $homeTeam) {
            foreach ($this->teams as $foreignIndex => $foreignTeam) {
                if ($homeTeam !== $foreignTeam) {
                    $match = new Match($homeTeam, $foreignTeam);
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


    private function addMatch(Match $match)
    {
        array_push($this->matches, $match);
    }


}










