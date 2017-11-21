<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 10/11/2017
 * Time: 10:23
 */

namespace Application\Controller;

use Application\App\Controller;

class HomeController extends Controller
{
    public function run(){
        $this->renderView('home',[]);
    }
}
