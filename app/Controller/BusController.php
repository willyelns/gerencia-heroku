<?php

/**
 * Created by PhpStorm.
 * User: Nayana Farias
 * Date: 6/19/17
 * Time: 12:37 AM
 */
require_once 'C:/xampp71/htdocs/ufrn-bus/app/Model/Bus_Model.php';
require_once 'C:/xampp71/htdocs/ufrn-bus/app/Model/BusRoute.php';
class BusController{
    public $bus;

    function verifyNextDir(){
        $rDir = new BusRoute();
        $hour = $this->getCurrentTime();
        $last = null;
        $found = false;

        foreach ($rDir->routeDir as $time => $company){
            if($time >= $hour){
                $found = true;
                $this->bus->prevDeparture = $last;
                $this->bus->nextDeparture = $time;
                $this->bus->busCompany = $rDir[$time];
                break;
            }
            $last = $time;
        }

        if($found == true){
            $last = $this->bus->nextDeparture;
        }
        else{
            $last = null;
        }
//        $rDirIndex =   array_search($next, array_keys($rDir->routeDir));
//        $this->bus->busCompany = $rDir->routeDir[$rDirIndex+1];
//        $this->bus->prevDeparture = $next;
//        $this->bus->nextDeparture = array_search($this->bus->busCompany,$rDir->routeDir);
        return $last;
    }
    function verifyNextInv(){
        $rInv = new BusRoute();
        $hour = $this->getCurrentTime();
        $last = null;
        $found = false;

        foreach ($rInv->routeDir as $time => $company){
            if($time >= $hour){
                $found = true;
                $this->bus->prevDeparture = $last;
                $this->bus->nextDeparture = $time;
                $this->bus->busCompany = $rInv[$time];
                break;
            }
            $last = $time;
        }

        if(found == true){
            $last = $this->bus->nextDeparture;
        }
        else{
            $last = null;
        }
//        $rInvIndex = array_search($next,array_keys($rInv->routeInv));
//        $this->bus->busCompany = $rInv->routeInv[$rInvIndex+1];
//        $this->bus->prevDeparture = $next;
//        $this->bus->nextDeparture = array_search($this->bus->busCompany,$rInv->routeInv);
        return $last;
    }
    function getCurrentTime(){
        date_default_timezone_set('America/Fortaleza');
        return $time= date('H:i',time());
    }
    function home(){
        $bus = new Bus_Model();
        require_once('C:/xampp71/htdocs/ufrn-bus/app/view/home.php');
    }
    function listAllBus(){
        require_once('C:/xampp71/htdocs/ufrn-bus/app/view/lista-circulares.php');
    }
    function error(){
        require_once('C:/xampp71/htdocs/ufrn-bus/app/view/error.php');
    }
}