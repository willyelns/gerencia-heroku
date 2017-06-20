<?php

/**
 * Created by PhpStorm.
 * User: raevix
 * Date: 6/18/17
 * Time: 4:56 PM
 */
require_once 'Route.php';

class BusCompany
{
    public $nome;
    public $id;
    public $routes = array();

    function __construct(string $nome){
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param array $routes
     */
    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }
}