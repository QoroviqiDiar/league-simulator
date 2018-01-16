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
    protected $mathces = [];

    /**
     * Match constructor.
     * @param array $mathces
     */
    public function __construct(array $mathces)
    {
        $this->mathces = $mathces;
    }

    
}