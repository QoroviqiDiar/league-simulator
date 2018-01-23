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

    /**
     * @var Team
     */
    private $homeTeam;

    /**
     * @var Team
     */
    private $homeScore = 0;

    /**
     * @var Team
     */
    private $foreignTeam;

    /**
     * @var Team
     */
    private $foreignScore = 0;

    /**
     * Match constructor.
     * @param Team $homeTeam
     * @param Team $foreignTeam
     */
    public function __construct(Team $homeTeam = null, Team $foreignTeam = null)
    {
        $this->homeTeam = $homeTeam;
        $this->foreignTeam = $foreignTeam;
    }

    public function play()
    {
        $this->homeScore = random_int(0,5);
        $this->foreignScore = random_int(0, 5);
    }

    public function getWinningScore()
    {
        if  ($this->homeScore > $this->foreignScore)
        {
            return $this->homeScore;
        } elseif ($this->foreignScore > $this->homeScore ) {
            return $this->foreignScore;
        } else {
            return null;
        }
    }

    /**
     * @return Team
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param Team $homeTeam
     */
    public function setHomeTeam(Team $homeTeam)
    {
        $this->homeTeam = $homeTeam;
    }

    /**
     * @return Team
     */
    public function getHomeScore()
    {
        return $this->homeScore;
    }

    /**
     * @param Team $homeScore
     */
    public function setHomeScore(Team $homeScore)
    {
        $this->homeScore = $homeScore;
    }

    /**
     * @return Team
     */
    public function getForeignTeam()
    {
        return $this->foreignTeam;
    }

    /**
     * @param Team $foreignTeam
     */
    public function setForeignTeam(Team $foreignTeam)
    {
        $this->foreignTeam = $foreignTeam;
    }

    /**
     * @return Team
     */
    public function getForeignScore()
    {
        return $this->foreignScore;
    }


    /**
     * @param Team $foreignScore
     */
    public function setForeignScore(Team $foreignScore)
    {
        $this->foreignScore = $foreignScore;
    }


}








