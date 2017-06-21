<?php

/**
 * Created by PhpStorm.
 * User: raevix
 * Date: 6/18/17
 * Time: 5:57 PM
 */

require_once 'BusRoute.php';

class Bus_Model{
    public $busCompany;
    public $nextDeparture;
    public $prevDeparture;

    /**
     * @return BusCompany
     */
    public function getBusCompany():BusCompany
    {
        return $this->busCompany;
        
    }

    /**
     * @param BusCompany $busCompany
     */
    public function setBusCompany(BusCompany $busCompany)
    {
        $this->busCompany = $busCompany;
    }

    /**
     * @return mixed
     */
    public function getNextDeparture()
    {
        return $this->nextDeparture;
    }

    /**
     * @param mixed $nextDeparture
     */
    public function setNextDeparture($nextDeparture)
    {
        $this->nextDeparture = $nextDeparture;
    }

    /**
     * @return mixed
     */
    public function getPrevDeparture()
    {
        return $this->prevDeparture;
    }

    /**
     * @param mixed $prevDeparture
     */
    public function setPrevDeparture($prevDeparture)
    {
        $this->prevDeparture = $prevDeparture;
    }
}

