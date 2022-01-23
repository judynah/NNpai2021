<?php

class Plant
{
    private $id_plant;
    private $name;
    private $id_plant_data;
    private $id_plant_history;
    private $image;
    private $id_user;

    public function __construct($name,$image)
    {
        $this->name = $name;
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getName() :string
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getImage() :string
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }




}