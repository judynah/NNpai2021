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
            $user['surname'],
            $user['date_of_birth'],
            $user['city'],
            $user['postcode'],
            $user['street'],
            $user['house_number'],
            $user['apartment_number'],
            $user['phone_number'],
            $user['photo']
        );
    }

    public function getUsers() :array
    {

        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."Users" u 
            LEFT JOIN public."UserInfo" ui
            ON u.id_user_info = ui."id_userInfo"
        ');

        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($users as $user){
            $result[] = new User(
                $user['email'],
                $user['password'],
                $user['name'],
                $user['surname'],
                $user['date_of_birth'],
                $user['city'],
                $user['postcode'],
                $user['street'],
                $user['house_number'],
                $user['apartment_number'],
                $user['phone_number'],
                $user['photo']
            );
        }
        return $result;
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
        INSERT INTO public."Users" ("email", "password", id_user_info, created_at)
        VALUES (?, ?, ?, ?)
        ');

        $id_user_info = 1;
        $date = new DateTime();

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
            $this->getUserInfoId($user),
            $date->format('Y-m-d')
//            $id_user_info
        ]);

        $id = $this->getUserId($user);
        $user->setIdUser($id);


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

    public function getUserId(User $user) :int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."Users" WHERE "email" = :email
        ');
        $email = $user->getEmail();

        $stmt->bindParam(':email',$email, PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $id_user = $data['id_user'];
        $user->setIdUser($id_user);
        return $data['id_user'];
    }


    public function editUser(User $user, $name, $surname, $dateOfBirth, $phoneNumber, $photo,
    $city, $postcode, $street, $house_number, $apartment_number, $password)
    {
        $id = $this->getUserId($user);
        $id_info = $this->getUserInfoId($user);

        $stmt = $this->database->connect()->prepare('
            UPDATE public."UserInfo"  u 
            SET name=?, surname=?, date_of_birth=?, photo=?, phone_number=?, city=?, postcode=?, street=?,
            house_number=?, apartment_number=? 
            WHERE u."id_userInfo" = ? ;
        ');

        $stmt->execute([
            $name,
            $surname,
            $dateOfBirth,
            $photo,
            $phoneNumber,
            $city,
            $postcode,
            $street,
            $house_number,
            $apartment_number,
            $id_info
        ]);

        $stmt = $this->database->connect()->prepare('
            UPDATE public."Users" u
            SET password=?
            WHERE u."id_user" = ?;
        ');

        $stmt->execute([
            $password,
            $id
        ]);
    }




}
?>