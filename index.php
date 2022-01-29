<?php


require 'Routing.php';

//phpinfo();

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('main_page', 'DefaultController');
Routing::get('plants', 'PlantController');
Routing::get('society', 'DefaultController');
Routing::get('treatment', 'DefaultController');
Routing::get('ask_for_advice', 'DefaultController');
Routing::get('give_plant', 'DefaultController');

Routing::post('login', 'SecurityController');
Routing::post('signup', 'SecurityController');
Routing::post('settings', 'DefaultController');
Routing::post('addPlant', 'PlantController');
Routing::post('add_photo', 'ProjectController');



Routing::run($path);