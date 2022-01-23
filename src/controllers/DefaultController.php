<?php

require_once 'AppController.php';

class  DefaultController extends AppController {
    public function index(){
        // display login.php
        $this->render('login');
//        die("index method");
    }

    public function login(){
        // display login.php
        $this->render('login');
//        die("login method");
    }

    public function main_page(){
        // display main_page.php
        $this->render('main_page');
//        die("main_page method");
    }

    public function society(){
        //  display society.php
        $this->render('society');
    }

    public function treatment(){
        //  display treatment.php
        $this->render('treatment');
    }

    public function signup(){
        // display signup.php
        $this->render('signup');
    }
}