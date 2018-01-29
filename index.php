<?php

require 'vendor/autoload.php';

use App\Entities\SoccerLeague;


$league = new SoccerLeague();

$league->prepareTeams();

$league->scheduleMatches();



$league->startLeague();



$league->prepareTableRows();


$league->printTable();



?>