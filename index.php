<?php

require 'vendor/autoload.php';

use App\Match;
use App\Team;
use App\League;

//
//$teamNames = ["Liverpool", "Arsenal", "ManCity", "ManUTD", 'West Ham', 'Totenham'];
//$matches = [];
//
//foreach ($teamNames as $teamName) {
//    $m = array_rand($teamNames, 2);
//}
//
//
//$homeTeam = $teamNames[$m[0]];
//$foreignTeam = $teamNames[$m[1]];
//echo $homeTeam;
//echo $foreignTeam; die();


$league = new League();

$league->addTeam();

$league->scheduleMatches();

var_dump($league->matches);

//$reverseTeams = array_reverse($league->teams);
//
//foreach ($league->teams as $homeIndex =>  $homeTeam) {
//    foreach ($reverseTeams as $foreignIndex => $foreignTeam) {
//        die(var_dump($reverseTeams[$foreignIndex]));
//    }
//}


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
