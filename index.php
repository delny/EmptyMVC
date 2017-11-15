<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 10/11/2017
 * Time: 10:24
 */

/*Start session*/
session_start();

/*load Configuration*/
require ('Config/parameters.php');

/*load autoloader*/
require ('Model/Autoloader.php');
Autoloader::register();

/*routeRequest*/
$router = new Router();
$router->routeRequest();