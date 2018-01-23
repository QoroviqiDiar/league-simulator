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
    public $matchesInformation = [];
    public $matches = [];

    // Table Console Row
    public $tableRow = [];


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


    public function startLeague()
    {

        foreach ($this->matches as $index => $match) {
            $match->play();
        }
    }

    public function tableRow()
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
                    array($this->tableRow[$index][0], $this->tableRow[$index][1] . " : " . $this->tableRow[$index][2], $this->tableRow[$index][3])
                );

        }


//                array('9971-5-0210-0', 'A Tale of Two Cities', 'Charles Dickens'),
//                array('960-425-059-0', 'The Lord of the Rings', 'J. R. R. Tolkien'),
//                array('80-902734-1-6', 'And Then There Were None', 'Agatha Christie'),

        $table->render();
    }


    private function addMatch(Match $match)
    {
        array_push($this->matches, $match);
    }


}










