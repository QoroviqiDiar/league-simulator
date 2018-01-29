<?php

require 'vendor/autoload.php';

use App\League;


$league = new League();

$league->prepareTeams();

$league->scheduleMatches();

$league->startLeague();

$league->prepareTableRows();




$league->printTable();
die();

?>