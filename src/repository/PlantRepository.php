<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Plant.php';

class PlantRepository extends Repository
{
    public function getPlant(int $id_plant, User $user): ?Plant
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
        $id_user = $user->getIdUser();

        return new Plant(
            $plant['name'],
            $plant['image'],
            $plant['species'],
            $plant['date_of_buy'],
            $plant['temperature'],
            $plant['pot_diameter'],
            $id_user
        );
    }

    public function addPlant(Plant $plant, User $user): void
    {
//        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public."Plants"  ("name", "image", "id_user") 
            VALUES (?, ?, ?)
        ');
        $id_user = $user->getIdUser();
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

//    public function getPlants(User $user): array
//    {
//        $email = $user->getEmail();
//
//        $result = [];
//        $stmt = $this->database->connect()->prepare('
//            SELECT * FROM public."Plants" p LEFT JOIN public."Users" u
//         ON p.id_user = u.id_user WHERE email= :email;
//        ');
//
//        $stmt->bindParam(':email',$email, PDO::PARAM_STR);
//        $stmt->execute();
//        $plants = $stmt->fetchAll(PDO::FETCH_ASSOC);
//        $id_user = $this->getPlantUserId($user);
//
//        foreach($plants as $plant){
//            $result[] = new Plant(
//                $plant['name'],
//                $plant['image'],
//                $plant['species'],
//                $plant['date_of_buy'],
//                $plant['temperature'],
//                $plant['pot_diameter'],
//                $id_user
//            );
//        }
//        return $result;
//    }

    public function getPlants(User $user)
    {
        $email = $user->getEmail();

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."Plants" p LEFT JOIN public."Users" u
         ON p.id_user = u.id_user WHERE email= :email;
        ');

        $stmt->bindParam(':email',$email, PDO::PARAM_STR);
        $stmt->execute();
        $plants = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $id_user = $this->getPlantUserId($user);

        return $plants;

    }



    public function getPlantUserId(User $user) :int
    {
        $email = $user->getEmail();

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."Plants" p LEFT JOIN public."Users" u
         ON p.id_user = u.id_user WHERE email= :email;
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $plant = $stmt->fetch(PDO::FETCH_ASSOC);

        $id_user = $plant['id_user'];
        $user->setIdUser($id_user);


        return $id_user;
    }

    public function getPlantIdPlant(int $id_plant){
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."Plants" WHERE id_plant= :id_plant;
        ');

        $stmt->bindParam(':id_plant', $id_plant, PDO::PARAM_INT);
        $stmt->execute();

        $plant = $stmt->fetch(PDO::FETCH_ASSOC);
        return $plant;
    }
}




?>