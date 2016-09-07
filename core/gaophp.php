<?php

namespace core;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class gaophp
{
    public static $classMap = array();
    static public function run() {
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        
        $ctrlFile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $ctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if(is_file($ctrlFile)) {
            include $ctrlFile;
            $ctrl = new $ctrlClass();
            $ctrl->$action();
        } else {
            throw new \Exception('Can not find the controller: '.$classCtrl);
        }
    }
    
    static public function load($class) {
        if(isset($classMap[$class])) {
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = GAOPHP.'/'.$class.'.php';
            if(is_file($file)) {
                include $file;
            } else {
                return false;
            }
        }        
    }
}


