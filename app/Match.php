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
     * @param Team|null $homeTeam
     * @param Team|null $foreignTeam
     */
    public function __construct(Team $homeTeam = null, Team $foreignTeam = null)
    {
        $this->homeTeam = $homeTeam;
        $this->foreignTeam = $foreignTeam;
    }

    public function play(){
        $this->homeScore = 3;
        $this->foreignScore = 4;
    }

    public function getWinningScore(){
        return ($this->homeScore > $this->foreignScore) ? $this->homeScore : $this->foreignScore;
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








