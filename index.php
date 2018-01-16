<?php

require 'vendor/autoload.php';

use App\Match;
use App\Team;

$match = new Match(
    new Team([
        new Team('liverpool'),
        new Team('Arsenal'),
        new Team('Chelsea'),
        new Team('Man City'),
        new Team('Man United')
    ])
);

var_dump($match->teams);