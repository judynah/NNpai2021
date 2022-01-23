<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Plant.php';



class PlantRepository
{
    public function getPlant(string $id_plant): ?Plant
    {
        $stmt = $this->database->connect()->prepare('
         SELECT * FROM public."id_plant" WHERE "id_plant"= :id_plant
         ');

        $stmt->bindParam(':id_plant', $id_plant, PDO::PARAM_INT);
        $stmt->execute();

        $plant = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($plant==false){
            return null;
        }

        return new Plant(
            $plant['name'],
            $plant['image']
        );
    }

    public function addPlant(Plant $plant): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public."Plants" ("name", "image", "id_user") 
            VALUES (?, ?, ?)
        ');
        $id_user = 1;
        $stmt->execute([
            $plant->getName(),
            $plant->getImage(),
            $id_user
        ]);
    }

    public function getPlants(): array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."Plants"
        ');
        $stmt->execute();
        $plants = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($plants as $plant){
            $result = new Plant(
                $plant['name'],
                $plant['image']
            );
        }
        return $result;
    }

}