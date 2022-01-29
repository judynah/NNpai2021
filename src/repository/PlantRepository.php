<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Plant.php';



class PlantRepository extends Repository
{
    public function getPlant(int $id_plant): ?Plant
    {
        $stmt = $this->database->connect()->prepare('
         SELECT * FROM public."Plants" WHERE "id_plant"= :id_plant
         ');

        $stmt->bindParam(':id_plant', $id_plant, PDO::PARAM_INT);
        $stmt->execute();

        $plant = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($plant==false){
            return null;
        }

        return new Plant(
            $plant['name'],
            $plant['image'],
            $plant['species'],
            $plant['date_of_buy'],
            $plant['temperature'],
            $plant['pot_diameter']
        );
    }

    public function addPlant(Plant $plant): void
    {
//        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public."Plants"  ("name", "image", "id_user") 
            VALUES (?, ?, ?)
        ');
        $id_user = 1;
        $stmt->execute([
            $plant->getName(),
            $plant->getImage(),
            $id_user
        ]);

        $stmt = $this->database->connect()->prepare('
            INSERT INTO public."PlantData" ( "date_of_buy", "temperature", "pot_diameter", "species") 
            VALUES (?, ?, ?, ?)
        ');
        $stmt->execute([
            $plant->getDateOfBuy(),
            $plant->getTemperature(),
            $plant->getPotDiameter(),
            $plant->getSpecies()
        ]);

    }

    public function getPlants(): array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."Plants"; 
        ');
        $stmt->execute();
        $plants = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($plants as $plant){
            $result[] = new Plant(
                $plant['name'],
                $plant['image'],
                $plant['species'],
                $plant['date_of_buy'],
                $plant['temperature'],
                $plant['pot_diameter']
            );
        }
        return $result;
    }

}