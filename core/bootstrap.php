<?php
include "vendor/autoload.php";
include "function.php";
require "core/App.php";

App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])));
  
    

// $config = include "config.php";

// $database = new QueryBuilder(
//     Connection::make($config['database'])
// );