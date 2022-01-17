<?php

require_once 'AppController.php';

class PhotoController extends AppController
{
    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads';



    private $messages = [];

    public function addPlantPhoto()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['plant_img_file']['tmp_name']) && $this->validate($_FILES['plant_img_file'])) {
            move_uploaded_file(
                $_FILES['plant_img_file'][ 'tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['plant_img_file']['name']
            );
            // TODO

            return $this->render('treatment', ['messages'=> $this->messages]);
        }

        $this->render('addPhoto', ['messages'=> $this->messages]);
    }

    private function validate(array $plant_img_file) : bool
    {
        if ($plant_img_file['size'] > self::MAX_FILE_SIZE){
            $this->messages[] = 'File is to large for destination file system';
            return false;
        }

        if ( !isset($plant_img_file['type'])  && !in_array($plant_img_file['type'], self::SUPPORTED_TYPES)){
            $this->messages[] = 'File type is not supperted';
            return false;
        }
        return true;
    }


}