<?php
/**
 * Created by PhpStorm.
 * User: egzon
 * Date: 18-01-29
 * Time: 11.32.PD
 */

namespace App\Entities\League;



abstract class League
{
    protected $teamNames = [];

    protected $teams = [];

    protected $matches = [];

    protected $tableRow = [];

    protected abstract function prepareTeams();

    protected abstract function scheduleMatches();

    protected abstract function startLeague();

    protected abstract function prepareTableRows();

    protected abstract function printTable();
}