<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 1/16/2018
 * Time: 2:31 PM
 */

namespace App;


class Team
{

    public $teamName = [];

    /**
     * Team constructor.
     * @param $teamName
     */
    public function __construct($teamName = [])
    {
        $this->teamName = $teamName;
    }

    
}