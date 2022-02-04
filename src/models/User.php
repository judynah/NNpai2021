<?php

class User
{
    private $email ;
    private $password;

    private $name;
    private $surname;
    private $dateOfBirth;
    private $city;
    private $postcode;
    private $street;
    private $houseNumber;
    private $apartmentNumber;
    private $phoneNumber;
    private $photo;
    private $id_user;

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
    }

    public function __construct(string $login,string $password, string $name, string $surname,
    string $dateOfBirth, string $city, string $postcode, string $street, int $houseNumber,
                                int $apartmentNumber, string $phoneNumber)
    {
        $this->email = $login;
        $this->password = $password;
        $this->name= $name;
        $this->surname = $surname;
        $this->dateOfBirth = $dateOfBirth;
        $this->city = $city;
        $this->postcode = $postcode;
        $this->street=$street;
        $this->houseNumber=$houseNumber;
        $this->apartmentNumber=$apartmentNumber;
        $this->phoneNumber=$phoneNumber;
//        $this->photo=$photo;


    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }
//    private $idUserInfo;

//    /**
//     * @return mixed
//     */
//    public function getIdUserInfo()
//    {
//        return $this->idUserInfo;
//    }
//
//    /**
//     * @param mixed $idUserInfo
//     */
//    public function setIdUserInfo($idUserInfo): void
//    {
//        $this->idUserInfo = $idUserInfo;
//    }
//
//    /**
//     * @return mixed
//     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street): void
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * @param mixed $houseNumber
     */
    public function setHouseNumber($houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return mixed
     */
    public function getApartmentNumber()
    {
        return $this->apartmentNumber;
    }

    /**
     * @param mixed $apartmentNumber
     */
    public function setApartmentNumber($apartmentNumber): void
    {
        $this->apartmentNumber = $apartmentNumber;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }




}