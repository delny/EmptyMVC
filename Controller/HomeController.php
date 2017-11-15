<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 10/11/2017
 * Time: 10:23
 */

class HomeController extends Controller
{
    public function run(){
        $this->renderView('home',[]);
    }
}
