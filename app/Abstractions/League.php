<?php namespace App\Abstractions;



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