<?php

require 'vendor/autoload.php';

use App\Match;
use App\Team;
use App\League;

$league  = new League();

$league->addTeam();


//$reverseTeams = array_reverse($league->teams);
//
//foreach ($league->teams as $homeIndex =>  $homeTeam) {
//    foreach ($reverseTeams as $foreignIndex => $foreignTeam) {
//        die(var_dump($reverseTeams[$foreignIndex]));
//    }
//}


$league->scheduleMatches();
var_dump($league->matches);


//
//$league = new League();
//$league->addTeam();
//
////var_dump($league->getTeams());
//var_dump($league->play());
//die();
//
//$teamNames = ["Liverpool", "Arsenal","ManCity", "ManUTD"];
//$teams = [];
//$matches = [];
//
//foreach ($teamNames as $teamName) {
//    array_push($teams, new Team($teamName));
//}
////
////die(var_dump($teams));
////// Array / Associate Arrays
////foreach ($teams as $homeIndex => $homeTeam) {
////
////    foreach ($teams as $foreignIndex => $foreignTeam) {
//////        die(var_dump($teams[$homeIndex]));
////    }
////}
////
//
//
//$teams = new \App\Teams($team);
//
//$teams->addTeam(new Team('totenham'));
//
//
//
//
//
//$match = new Match($teams);
//
//$allTeams = $match->getTeams();
//
//var_dump($allTeams);
////foreach ($allTeams as $team) {
////
////    for ($i =0; $i < count($allTeams); $i++)
////    {
////        var_dump($team->team);
////    }
////}
//
//
//$league = new League();
//$league->scheduleMatches();
//$league->startLeague();
//$league->printTable();
