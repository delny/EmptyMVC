<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 10/11/2017
 * Time: 09:59
 */

namespace Application\App;

use Application\View\View;

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
