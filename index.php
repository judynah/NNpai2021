<?php


require 'Routing.php';

//phpinfo();

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('main_page', 'DefaultController');
Routing::get('account', 'DefaultController');
Routing::get('plants', 'PlantController');
Routing::get('society', 'SecurityController');
Routing::get('treatment', 'PlantController');
Routing::post('ask_for_advice', 'DefaultController');
Routing::post('give_plant', 'DefaultController');

Routing::post('login', 'SecurityController');
Routing::post('logout', 'SecurityController');
Routing::post('signup', 'SecurityController');

Routing::post('settings', 'SecurityController');
//Routing::post('editSettings', 'SecurityController');

Routing::post('addPlant', 'PlantController');
Routing::post('add_photo', 'ProjectController');



Routing::run($path);
?>
