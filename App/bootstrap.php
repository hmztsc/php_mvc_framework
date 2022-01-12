<?php

// Load Config
require_once '../App/config/config.php';

// Autoload Core Libraries
spl_autoload_register(function($class_name){
   require_once 'Core/' . $class_name . '.php';
});