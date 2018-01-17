<?php

require 'vendor/autoload.php';

use App\Match;
use App\Team;

//$teams =  new Team([
//   new Team('liverpool'),
//   new Team('arsenal'),
//   new Team('man city'),
//   new Team('man utd'),
//]);

$team = [
    new Team('liverpool'),
    new Team('arsenal'),
    new Team('man city'),
    new Team('man utd')
];

$teams = new \App\Teams($team);

$teams->addTeam(new Team('totenham'));

//foreach ($teams->teams as $index => $team) {
//    echo $index . "<br />";
//}

//var_dump($teams->teams);

$match = new Match($teams);
//var_dump();

foreach ($match->getTeams() as $index => $team) {
    echo $index;
}

