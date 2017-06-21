<?php
/**
 * Created by PhpStorm.
 * User: Nayana Farias
 * Date: 21/06/2017
 * Time: 02:04
 */
function call($controller, $action){
    require_once ('app/Controller' . $controller . '_controller.php');

    switch($controller){
        case 'bus':
            $controller = new BusController();
            break;
    }
    $controller->{$action}();
    $controllers = array('bus' => ['verifyNextDir', 'verifyNextInv', 'home', 'listAllBus', 'error']);

    if(array_key_exists($controller, $controllers)){
        if(in_array($action, $controllers[$controller])){
            call($controller,$action);
        }
        else{

        }
    }
}