<?php 

class PagesController{

    public function home() {
        require 'views/home.view.php';;
    }

    public function signUp() {
        require 'views/sign-up.view.php'; ;
    } 

}