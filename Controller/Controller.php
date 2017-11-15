<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 10/11/2017
 * Time: 09:59
 */

class Controller
{
    /**
     * @param $viewName
     * @param $params
     */
    protected function renderView($viewName,$params){
        $view = new View();
        $view->createView($viewName,$params);
    }
}
