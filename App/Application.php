<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 21/11/2017
 * Time: 14:37
 */

namespace EmptyMVC\App;

class Application
{
    public function run (){
        /*load Configuration*/
        require ('Config/parameters.php');
        require ('Config/routing.php');

        /*routeRequest*/
        $router = new Router();
        $router->routeRequest();
    }
}