<?php

require 'vendor/autoload.php';

use App\Entities\League\SoccerLeague;


$league = new SoccerLeague();

$league->prepareTeams();

$league->scheduleMatches();

$league->startLeague();



$league->prepareTableRows();




$league->printTable();
die();

?>