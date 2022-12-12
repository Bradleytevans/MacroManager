<?php 

require 'views/home.view.php';
require 'vendor/autoload.php';
require 'core/bootstrap.php';


require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());