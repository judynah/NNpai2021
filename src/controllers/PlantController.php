<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Plant.php';
require_once __DIR__ .'/../repository/PlantRepository.php';

class PlantController extends AppController
{
    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpg', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $message = [];
    private $plantRepository;

    public function __construct()
    {
        parent::__construct();
        $this->plantRepository = new PlantRepository();
    }

    public function plants()
    {
        if (!(isset($_SESSION))){
            $this->render('login');
        }

        $_SESSION["newsession"] = 1;
        $this->cookieOff();

        $plants = $this->plantRepository->getPlants($_SESSION["user"]);
        $this->render('plants', ['plants' => $plants]);
    }


    public function addPlant()
    {
        if (!(isset($_SESSION))){
            $this->render('login');
        }

        $_SESSION["newsession"] = 1;
        $this->cookieOff();

        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file'][ 'tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );
            $user = $_SESSION["user"];
            $id = $user->getIdUser();
            // create new project object and save it in database
            $plant = new Plant(
                $_POST['name'],
                $_FILES['file']['name'],
                $_POST['species'],
                $_POST['date_of_buy'],
                $_POST['temperature'],
                $_POST['pot_diameter'],
                $id
            );
                // dodać numer id usera
            $this->plantRepository->addPlant($plant, $user);

            return $this->render('plants', [
                'messages' => $this->message,
                'plants' => $this->plantRepository->getPlants($user)
            ]);

        }
        return $this->render('add_plant', ['messages' => $this->message]);

    }

    public function treatment(){

        if (!(isset($_SESSION))){
            $this->render('login');
        }

        $_SESSION["newsession"] = 1;
        $this->cookieOff();

        $id_plant = $_SESSION['id_plant'];
        $user = $_SESSION['user'];
        $plant = $this->plantRepository->getPlant($id_plant, $user );

        //  display treatment.php
        $this->render('treatment');



    }

    private function validate(array $file) : bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE){
            $this->message[] = 'File is to large for destination file system';
            return false;
        }

        if ( !isset($file['type'])  && !in_array($file['type'], self::SUPPORTED_TYPES)){
            $this->message[] = 'File type is not supported';
            return false;
        }
        return true;
    }

//    public function project_my_plants(){
//        // display plants.php
//
//        $plants = $this->plantRepository->getPlants();
//
//        $this->render('project_my_plants', ['plants'=> $plants]);
////        die("index method");
//    }
}
?>