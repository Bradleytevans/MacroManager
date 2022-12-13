<?php 

class PagesController{

    public function home() {
        require 'views/home.view.php';;
    }

    public function signUp() {
        require 'views/signup.view.php'; ;
    }
    
    public functions store()
    {
        return 'sign-up-stored';   
    }
    
    public function login() {
        require 'views/login.view.php'; ;
    } 

}
