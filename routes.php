<?php

$router->get('', 'PagesController@home');
$router->get('signup', 'PagesController@signup');
$router->post('signup', 'PagesController@store');
$router->get('login', 'PagesController@login');

