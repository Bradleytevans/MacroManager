<?php

$router->get('', 'PagesController@home');
$router->get('signup', 'PagesController@signup');
$router->get('login', 'PagesController@login');

$router->post('createAccount', 'PagesController@createAccount');