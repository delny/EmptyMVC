<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 10/11/2017
 * Time: 10:24
 */

/*Start session*/
session_start();

/*Run Application*/
require('App/Application.php');
$myApp = new \EmptyMVC\App\Application();
$myApp->run();
