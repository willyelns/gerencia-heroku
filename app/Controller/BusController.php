<?php

/**
 * Created by PhpStorm.
 * User: Nayana Farias
 * Date: 6/19/17
 * Time: 12:37 AM
 */
require_once 'C:/xampp71/htdocs/ufrn-bus/app/Model/Bus_Model.php';
require_once 'C:/xampp71/htdocs/ufrn-bus/app/Model/BusRoute.php';
class BusController
{
    function verifyNextDir(Bus_Model $bus):Bus_Model{
        $rDir = new BusRoute();
        $rDirIndex =   array_search($bus->nextDeparture, array_keys($rDir->routeDir));
        $bus->busCompany = $rDir->routeDir[$rDirIndex+1];
        $bus->prevDeparture = $bus->nextDeparture;
        $bus->nextDeparture = array_search($bus->busCompany,$rDir->routeDir);
        return $bus;
    }
    function verifyNextInv(Bus_Model $bus):Bus_Model{
        $rInv = new BusRoute();
        $rInvIndex = array_search($bus->nextDeparture,array_keys($rInv->routeInv));
        $bus->busCompany = $rInv->routeInv[$rInvIndex+1];
        $bus->prevDeparture = $bus->nextDeparture;
        $bus->nextDeparture = array_search($bus->busCompany,$rInv->routeInv);
        return $bus;
    }
   /*function home(){
        require_once('C:/xampp71/htdocs/ufrn-bus/app/view/home.php');
    }
    function listAllBus(){
        require_once('C:/xampp71/htdocs/ufrn-bus/app/view/lista-circulares.php');
    }
    function error(){
        require_once('C:/xampp71/htdocs/ufrn-bus/app/view/error.php');
    }*/
}