<?php 

class PagesController{

    public function home() {
        require 'views/home.view.php';;
    }

    public function signUp() {
        require 'views/signup.view.php'; ;
    } 
    
    public function login() {
        require 'views/login.view.php'; ;
    } 

}