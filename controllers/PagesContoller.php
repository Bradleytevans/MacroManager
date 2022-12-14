<?php

class PagesController
{

    public function home()
    {
        require 'views/home.view.php';
    }

    public function signUp()
    {
        require 'views/signup.view.php';
    }

    public function login()
    {
        require 'views/login.view.php';
    }

    public function createAccount()
    {
        $QueryBuilder = App::get('database');
        $QueryBuilder->insert('users', ['username' => $_POST['username'], 'email' => $_POST['email'], 'password' => $_POST['password'] ]);
    }
}
