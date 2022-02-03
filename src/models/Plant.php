<?php

class Plant
{
    private $id_plant;
    private $name;
    private $id_plant_data;
    private $id_plant_history;
    private $image;
    private $id_user;

    private $species;
    private $date_of_buy;
    private $temperature;
    private $pot_diameter;

    public function __construct($name,$image, $species, $date_of_buy, $temperature, $pot_diameter, $id_user)
    {
        $this->name = $name;
        $this->image = $image;
        $this->species = $species;
        $this->date_of_buy = $date_of_buy;
        $this->temperature = $temperature;
        $this->pot_diameter = $pot_diameter;
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * @param mixed $species
     */
    public function setSpecies($species): void
    {
        $this->species = $species;
    }

    /**
     * @return mixed
     */
    public function getDateOfBuy()
    {
        return $this->date_of_buy;
    }

    /**
     * @param mixed $date_of_buy
     */
    public function setDateOfBuy($date_of_buy): void
    {
        $this->date_of_buy = $date_of_buy;
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param mixed $temperature
     */
    public function setTemperature($temperature): void
    {
        $this->temperature = $temperature;
    }

    /**
     * @return mixed
     */
    public function getPotDiameter()
    {
        return $this->pot_diameter;
    }

    /**
     * @param mixed $pot_diameter
     */
    public function setPotDiameter($pot_diameter): void
    {
        $this->pot_diameter = $pot_diameter;
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