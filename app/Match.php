<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 1/16/2018
 * Time: 2:36 PM
 */

namespace App;




class Match
{
    public $teams = [];


    public function __construct(Team $team)
    {
        $this->teams = $team;
    }


}








