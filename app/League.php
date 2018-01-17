<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 1/16/2018
 * Time: 2:43 PM
 */

namespace App;

use App\Match;

class League
{

    public $match;

    /**
     * League constructor.
     * @param $match
     */
    public function __construct(Match $match)
    {
        $this->match = $match;
    }

    public function playMatches()
    {
        foreach ($this->match->teams as $key => $team) {
            echo $key;
        }
    }
}


