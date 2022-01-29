<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
         SELECT * FROM public."Users" u LEFT JOIN public."UserInfo" ui
         ON u.id_user_info = ui."id_userInfo" WHERE email= :email;
         ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
//        $stmt->execute(var_dump($stmt->fetch()));
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user==false){
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );
    }

    public function addUser(User $user){
        $stmt = $this->database->connect()->prepare('
        INSERT INTO public."UserInfo" ("name", "surname", "date_of_birth", 
                                        "city", "postcode", "street", "house_number", 
                                       "apartment_number", "phone_number")
                                       VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getDateOfBirth(),
            $user->getCity(),
            $user->getPostcode(),
            $user->getStreet(),
            $user->getHouseNumber(),
            $user->getApartmentNumber(),
            $user->getPhoneNumber()
        ]);

        $stmt = $this->database->connect()->prepare('
        INSERT INTO public."Users" ("email", "password", id_user_info)
        VALUES (?, ?, ?)
        ');

        $id_user_info = 1;

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
            $this->getUserInfoId($user)
//            $id_user_info
        ]);
    }

    public function getUserInfoId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."UserInfo" WHERE "name" = :name AND "surname" = :surname AND "phone_number" = :phone_number
        ');
        $name = $user->getName();
        $surname = $user->getSurname();
        $phone_number = $user->getPhoneNumber();

        $stmt->bindParam(':name',$name, PDO::PARAM_STR);
        $stmt->bindParam(':surname',$surname , PDO::PARAM_STR);
        $stmt->bindParam(':phone_number', $phone_number, PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id_userInfo'];
    }



}