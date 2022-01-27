<?php


require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('main_page', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('signup', 'DefaultController');
Routing::post('settings', 'DefaultController');
Routing::post('add_plant', 'DefaultController');
Routing::post('add_photo', 'ProjectController');

Routing::get('project_my_plants', 'PlantController');
Routing::get('society', 'DefaultController');
Routing::get('treatment', 'DefaultController');
Routing::get('ask_for_advice', 'DefaultController');
Routing::get('give_plant', 'DefaultController');

Routing::run($path);