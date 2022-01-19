<?php

class Plant
{
    private $name;
    private $species;
    private $image;

    public function __construct($name, $species, $image)
    {
        $this->name = $name;
        $this->species = $species;
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

    public function getSpecies() :string
    {
        return $this->species;
    }

    public function setSpecies($species)
    {
        $this->species = $species;
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