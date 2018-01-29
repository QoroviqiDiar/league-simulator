<?php
/**
 * Created by PhpStorm.
 * User: egzon
 * Date: 18-01-29
 * Time: 11.13.PD
 */

namespace App\Entities\Match;


use App\Entities\Team\SoccerTeam;

abstract class Match
{
    /**
     * @var SoccerTeam
     */
    protected $homeTeam;

    /**
     * @var int | SoccerTeam
     */
    protected $homeScore = 0;

    /**
     * @var SoccerTeam
     */
    protected $foreignTeam;

    /**
     * @var int | SoccerTeam
     */
    protected $foreignScore = 0;

    protected abstract function play();


}