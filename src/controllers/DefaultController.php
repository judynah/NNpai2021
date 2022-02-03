<?php

require_once 'AppController.php';

class  DefaultController extends AppController {
//    public function index(){
//        // display login.php
//        $this->render('login');
////        die("index method");
//    }

//    public function login(){
//        // display login.php
//        $this->render('login');
////        die("login method");
//    }




    public function treatment(){
        //  display treatment.php
        $this->render('treatment');
    }

    public function account(){
        // display account.php

        if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)){
            $this->render('login');
        }

        $this->render('account');
    }

    public function add_plant(){
        // display settings.php
        $this->render('add_plant');
    }

    public function ask_for_advice(){
        // display settings.php
        $this->render('ask_for_advice');
    }
    public function give_plant(){
        // display give_plant.php
        $this->render('give_plant');
    }

//    public function index()
//    {
//        $_SESSION["newsession"] = 1;
//        $this->cookieOn();
//
//        $this->render('login');
//    }

    public function main_page()
    {
//        session_start();

        if (!(isset($_SESSION))){
            $this->render('login');
        }

        $_SESSION["newsession"] = 1;
        $this->cookieOff();

//        if (!$this->isPost()) {
//            $_SESSION["newsession"] = 1;
//        }

        $this->render('main_page');
    }


}
?>