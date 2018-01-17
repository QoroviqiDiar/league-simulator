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
    protected $teams;

    public function __construct(Teams $teams)
    {
        $this->teams = $teams;
    }

    public function getTeams()
    {
       return  $this->teams->teams();
    }

 
}








