<?php

/**
 * Created by PhpStorm.
 * User: raevix
 * Date: 6/19/17
 * Time: 12:37 AM
 */
require_once 'Bus_Model.php';
class BusController
{
    function verifyNextDir(Bus $bus):array{
        return array_search($bus->prevDeparture,array_keys($bus->$route))
    }
}