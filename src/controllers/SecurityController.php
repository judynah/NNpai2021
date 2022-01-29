<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__ .'/../repository/UserRepository.php';

class SecurityController extends AppController
{

    private $userRepository;

    /**
     * @param $userRepository
     */
    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }


    public function login()
    {

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->userRepository->getUser($email);

        if(!$user){
            return $this->render('login', ['messages'=> ['User not exist']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/main_page");
    }


    public function signup(){
        if (!$this->isPost()) {
            return $this->render('signup');
        }

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $dateOfBirth = $_POST['date_of_birth'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmed_password'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $street = $_POST['street'];
        $houseNumber = $_POST['house_number'];
        $apartmentNumber = $_POST['apartment_number'];
        $phoneNumber = $_POST['phone_number'];

        if ($password !== $confirmedPassword){
            return $this->render('signup', ['message' => ['Please, provide proper password']]);
        }

        $user = New User($email, $password, $name, $surname);

//        $user->setName($name);
//        $user->setSurname($surname);
        $user->setDateOfBirth($dateOfBirth);
        $user->setCity($city);
        $user->setPostcode($postcode);
        $user->getStreet($street);
        $user->setHouseNumber($houseNumber);
        $user->setApartmentNumber($apartmentNumber);
        $user->setPhoneNumber($phoneNumber);
        $user->setEmail($email);
        $user->setPassword($password);

        $this->userRepository->addUser($user);

//        if(!$this->userRepository->addUser($user)){
//            return $this->render('signup', ['message' => ['Sth wrong']]);
//        };

        return $this->render('login', ['messages'=> ['You have been successfully registrated!']]);


    }
}