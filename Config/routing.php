<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 16/11/2017
 * Time: 11:57
 */

/*
 *  Routes Configuration
 */

/*Compatible only with php 7 or higher*/
define('ROUTES', [
    /**
     * To add a route, follow this example :
     * '{Name on the action}' => ['Controller' => '{controller name}','Action' => ' method of controller to call'],
     */
    'Home' => ['Controller' => 'HomeController','Action' => 'run'],
    'list' => ['Controller' => 'ListController','Action' => 'getList'],
    'addlist' => ['Controller' => 'ListController','Action' => 'addList'],
]);
