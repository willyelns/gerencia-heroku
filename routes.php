<?php
/**
 * Created by PhpStorm.
 * User: Nayana Farias
 * Date: 21/06/2017
 * Time: 02:04
 */
function call($controller, $action){
    require_once('C:/xampp71/htdocs/ufrn-bus/app/Controller/BusController.php' . $controller . 'BusController.php');

    $controllerKey = $controller;
    switch($controllerKey){
        case 'bus':
            $controller = new BusController();
            break;
    }
    $controller->{$action}();
    $controllers = array('bus' => ['verifyNextDir', 'verifyNextInv', 'home', 'listAllBus', 'error']);

    if(array_key_exists($controller, $controllers)) {
        if (in_array($action, $controllers[$controllerKey])) {
            call($controller, $action);
        } else {
            call($controller, 'error');
        }
    }
    else{
        call($controller,'error');
    }
}