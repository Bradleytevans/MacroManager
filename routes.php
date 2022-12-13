<?php

$router->get('', 'PagesController@home');
$router->get('signup', 'PagesController@signup');
$router->post('signup', 'PagesController@signup');
$router->get('login', 'PagesController@login');

