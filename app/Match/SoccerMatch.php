<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 1/16/2018
 * Time: 2:36 PM
 */

namespace App;


use App\Team\SoccerTeam;
use App\Match\Match;

class SoccerMatch extends Match
{
    /**
     * Match constructor.
     * @param SoccerTeam $homeTeam
     * @param SoccerTeam $foreignTeam
     */
    public function __construct(SoccerTeam $homeTeam = null, SoccerTeam $foreignTeam = null)
    {
        $this->homeTeam = $homeTeam;
        $this->foreignTeam = $foreignTeam;
    }

    public function play()
    {
        $this->homeScore = random_int(0, 5);
        $this->foreignScore = random_int(0, 5);
    }

    public function getWinningScore()
    {
        if ($this->homeScore > $this->foreignScore) {
            return $this->homeScore;
        } elseif ($this->foreignScore > $this->homeScore) {
            return $this->foreignScore;
        } else {
            return null;
        }
    }

    /**
     * @return SoccerTeam
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param SoccerTeam $homeTeam
     */
    public function setHomeTeam(SoccerTeam $homeTeam)
    {
        $this->homeTeam = $homeTeam;
    }

    /**
     * @return SoccerTeam
     */
    public function getHomeScore()
    {
        return $this->homeScore;
    }

    /**
     * @param SoccerTeam $homeScore
     */
    public function setHomeScore(SoccerTeam $homeScore)
    {
        $this->homeScore = $homeScore;
    }

    /**
     * @return SoccerTeam
     */
    public function getForeignTeam()
    {
        return $this->foreignTeam;
    }

    /**
     * @param SoccerTeam $foreignTeam
     */
    public function setForeignTeam(SoccerTeam $foreignTeam)
    {
        $this->foreignTeam = $foreignTeam;
    }

    /**
     * @return SoccerTeam
     */
    public function getForeignScore()
    {
        return $this->foreignScore;
    }


    /**
     * @param SoccerTeam $foreignScore
     */
    public function setForeignScore(SoccerTeam $foreignScore)
    {
        $this->foreignScore = $foreignScore;
    }


}








