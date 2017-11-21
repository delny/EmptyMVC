<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 10/11/2017
 * Time: 09:12
 */

class Autoloader
{
    /**
     * register function loadClass as __autoload() implementation
     */
    public static function register()
    {
        spl_autoload_register('self::loadClass');
    }

    /**
     * @param $class
     */
    public static function loadClass($class)
    {
        /*Require the good file based on the name of the class*/
        if(file_exists('Controller/'.$class.'.php')){
            require ('Controller/'.$class.'.php');
        } elseif (file_exists('Model/Manager/'.$class.'.php')){
            require ('Model/Manager/'.$class.'.php');
        }elseif (file_exists('Model/Router/'.$class.'.php')){
            require ('Model/Router/'.$class.'.php');
        } elseif (file_exists('View/'.$class.'.php')){
            require('View/'.$class.'.php');
        } elseif (file_exists('Model/Entity'.$class.'.php')){
            require ('Model/Entity'.$class.'.php');
        }
    }
}
