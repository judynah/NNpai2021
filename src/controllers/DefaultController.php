<?php

require_once 'AppController.php';

class  DefaultController extends AppController {
    public function index(){
        // TODO display login.php
        $this->render('login');
//        die("index method");
    }

    public function login(){
        // TODO display login.php
        $this->render('login');
//        die("login method");
    }

    public function main_page(){
        // TODO display main_page.php
        $this->render('main_page');
//        die("main_page method");
    }



    public function society(){
        // TODO display society.php
        $this->render('society');
    }

    public function treatment(){
        // TODO display treatment.php
        $this->render('treatment');
    }
}