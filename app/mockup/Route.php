<?php

/**
 * Created by PhpStorm.
 * User: raevix
 * Date: 6/18/17
 * Time: 8:52 PM
 */
require_once 'BusCompany.php';

class Route
{
    public $routeDir = array(

        '06:00' => 'Guanabara',
        '06:10' => 'Santa Maria',
        '06:30' => 'Reunidas',
        '06:35' => 'Guanabara',
        '06:40' => 'Guanabara',
        '06:46' => 'Guanabara',
        '07:00' => 'Santa Maria',
        '07:05' => 'Reunidas',
        '07:10' => 'Guanabara',
        '07:18' => 'Guanabara',
        '07:22' => 'Santa Maria',
        '07:35' => 'Cidade Natal',
        '07:40' => 'Reunidas',
        '07:45' => 'Guanabara',
        '08:00' => 'Santa Maria',
        '08:27' => 'Cidade Natal',
        '08:45' => 'Guanabara',
        '08:55' => 'Guanabara',
        '09:15' => 'Cidade Natal',
        '09:35' => 'Guanabara',
        '09:45' => 'Santa Maria',
        '10:05' => 'Reunidas',
        '10:15' => 'Guanabara',
        '10:20' => 'Guanabara',
        '10:25' => 'Santa Maria',
        '10:35' => 'Reunidas',
        '10:55' => 'Guanabara',
        '11:00' => 'Cidade Natal',
        '11:04' => 'Guanabara',
        '11:08' => 'Santa Maria',
        '11:16' => 'Reunidas',
        '11:30' => 'Guanabara',
        '11:35' => 'Cidade Natal',
        '11:38' => 'Guanabara',
        '11:43' => 'Santa Maria',
        '11:51' => 'Reunidas',
        '12:05' => 'Guanabara',
        '12:10' => 'Cidade Natal',
        '12:15' => 'Guanabara',
        '12:20' => 'Santa Maria',
        '12:30' => 'Reunidas',
        '12:45' => 'Guanabara',
        '12:52' => 'Cidade Natal',
        '12:59' => 'Guanabara',
        '13:06' => 'Santa Maria',
        '13:19' => 'Reunidas',
        '13:40' => 'Guanabara',
        '13:47' => 'Cidade Natal',
        '13:54' => 'Guanabara',
        '14:01' => 'Santa Maria',
        '14:15' => 'Reunidas',
        '14:36' => 'Guanabara',
        '14:43' => 'Cidade Natal',
        '14:50' => 'Guanabara',
        '14:57' => 'Santa Maria',
        '15:11' => 'Reunidas',
        '15:32' => 'Guanabara',
        '15:39' => 'Cidade Natal',
        '15:46' => 'Guanabara',
        '15:53' => 'Santa Maria',
        '16:06' => 'Reunidas',
        '16:24' => 'Cidade Natal',
        '16:30' => 'Guanabara',
        '16:42' => 'Reunidas',
        '17:00' => 'Cidade Natal',
        '17:05' => 'Guanabara',
        '17:10' => 'Guanabara',
        '17:20' => 'Reunidas',
        '17:30' => 'Santa Maria',
        '17:40' => 'Cidade Natal',
        '17:45' => 'Guanabara',
        '17:50' => 'Guanabara',
        '17:55' => 'Reunidas',
        '18:07' => 'Santa Maria',
        '18:21' => 'Cidade Natal',
        '18:29' => 'Guanabara',
        '18:36' => 'Guanabara',
        '18:43' => 'Santa Maria',
        '18:58' => 'Cidade Natal',
        '19:06' => 'Guanabara',
        '19:22' => 'Santa Maria',
        '19:30' => 'Reunidas',
        '19:50' => 'Guanabara',
        '20:08' => 'Santa Maria',
        '20:16' => 'Reunidas',
        '20:24' => 'Guanabara',
        '20:50' => 'Guanabara',
        '21:00' => 'Cidade Natal',
        '21:20' => 'Santa Maria',
        '21:30' => 'Reunidas',
        '21:40' => 'Guanabara',
        '22:05' => 'Cidade Natal',
        '22:15' => 'Guanabara',
        '22:40' => 'Cidade Natal',
        '22:50' => 'Guanabara'
    );

    public $routeInv = array(

        '06:20' => 'Guanabara',
        '06:42' => 'Conceição',
        '06:50' => 'Via Sul',
        '06:55' => 'Guanabara',
        '07:14' => 'Conceição',
        '07:26' => 'Via Sul',
        '07:30' => 'Guanabara',
        '07:52' => 'Conceição',
        '08:09' => 'Via Sul',
        '08:18' => 'Guanabara',
        '09:05' => 'Via Sul',
        '09:25' => 'Conceição',
        '09:55' => 'Guanabara',
        '10:10' => 'Conceição',
        '10:30' => 'Guanabara',
        '10:45' => 'Conceição',
        '10:50' => 'Via Sul',
        '11:12' => 'Guanabara',
        '11:20' => 'Conceição',
        '11:25' => 'Via Sul',
        '11:47' => 'Guanabara',
        '11:55' => 'Conceição',
        '12:00' => 'Via Sul',
        '12:25' => 'Guanabara',
        '12:35' => 'Conceição',
        '12:40' => 'Via Sul',
        '13:12' => 'Guanabara',
        '13:26' => 'Conceição',
        '13:33' => 'Via Sul',
        '14:08' => 'Guanabara',
        '14:22' => 'Conceição',
        '14:29' => 'Via Sul',
        '15:04' => 'Guanabara',
        '15:18' => 'Conceição',
        '15:25' => 'Via Sul',
        '16:00' => 'Guanabara',
        '16:12' => 'Conceição',
        '16:18' => 'Via Sul',
        '16:36' => 'Guanabara',
        '16:48' => 'Conceição',
        '16:53' => 'Via Sul',
        '17:15' => 'Guanabara',
        '17:25' => 'Conceição',
        '17:35' => 'Via Sul',
        '18:00' => 'Conceição',
        '18:14' => 'Via Sul',
        '18:50' => 'Via Sul',
        '19:14' => 'Guanabara',
        '19:40' => 'Conceição',
        '20:00' => 'Guanabara',
        '20:32' => 'Conceiçao',
        '20:40' => 'Via Sul',
        '21:20' => 'Guanabara',
        '21:50' => 'Via Sul',
        '22:30' => 'Via Sul'
    );

    /**
     * @return array
     */
    public function getRouteDir(): array
    {
        return $this->routeDir;
    }

    /**
     * @return array
     */
    public function getRouteInv(): array
    {
        return $this->routeInv;
    }
}
$route = new BusRoute();

foreach ($route->getRouteInv() as $rd){
    echo $rd;
}
$date = date('d/m/Y h:i a');