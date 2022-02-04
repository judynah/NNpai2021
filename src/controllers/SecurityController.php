<?php
require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__ .'/../repository/UserRepository.php';

class SecurityController extends AppController
{
    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpg', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

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
        if (!isset($_SESSION)){
            session_start();
        }


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

        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $user;
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $user->getName();
        $_SESSION["surname"] = $user->getSurname();
        $_SESSION["city"] = $user->getCity();


        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location:{$url}/main_page");
    }


    public function signup(){

        $_SESSION["newsession"] = 1;
        $this->cookieOn();

        if (!$this->isPost()) {
            return $this->render('signup');
        }

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $date_of_birth = $_POST['date_of_birth'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmed_password'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $street = $_POST['street'];
        $houseNumber = $_POST['house_number'];
        $apartmentNumber = $_POST['apartment_number'];
        $phoneNumber = $_POST['phone_number'];


        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->render('signup', ['messages' => ["Wrong email type!"]]);
        }

        if ($this->userRepository->getUser($email) != null){
            return $this->render('signup', ['messages' => ["User with this email already exists!"]]);
        }

        if ($password !== $confirmedPassword){
            return $this->render('signup', ['message' => ['Please, provide proper password']]);
        }
//        $_SESSION["user"] = $user;
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $name;
        $_SESSION["surname"] = $surname;
        $_SESSION['loggedin'] == true;

        $user = New User($email, password_hash($password, PASSWORD_BCRYPT), $name, $surname,
        $date_of_birth, $city, $postcode, $street, $houseNumber, $apartmentNumber, $phoneNumber);

//        $user->setName($name);
//        $user->setSurname($surname);
        $user->setDateOfBirth($date_of_birth);
        $user->setCity($city);
        $user->setPostcode($postcode);
        $user->setStreet($street);
        $user->setHouseNumber($houseNumber);
        $user->setApartmentNumber($apartmentNumber);
        $user->setPhoneNumber($phoneNumber);
        $user->setEmail($email);
        $user->setPassword($password);

        $this->userRepository->addUser($user);

//        if(!$this->userRepository->addUser($user)){
//            return $this->render('signup', ['message' => ['Sth wrong']]);
//        };

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/main_page");

//        return $this->render('login', ['messages'=> ['You have been successfully registrated!']]);

    }


    public function settings(){
//        if (!$this->isPost()){
//            return $this->render('settings');
//        }

        if (!(isset($_SESSION))){
            $this->render('login');
        }

        $_SESSION["newsession"] = 1;
        $this->cookieOff();

        move_uploaded_file(
            $_FILES['file'][ 'tmp_name'],
            dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
        );

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $date_of_birth = $_POST['date_of_birth'];
        $photo = $_FILES['file']['name'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmed_password'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $street = $_POST['street'];
        $houseNumber = $_POST['house_number'];
        $apartmentNumber = $_POST['apartment_number'];
        $phoneNumber = $_POST['phone_number'];


        if ($name == null) {
            return $this->render('settings', ['messages' => ["Your Name is necessarily!"]]);
        }

        if ($surname == null) {
            return $this->render('settings', ['messages' => ["Your Surname is necessarily!"]]);
        }
        if ($password !== $confirmedPassword) {
            return $this->render('settings', ['messages' => ["Confirmed password should be the same as password!"]]);
        }
//        $user = $_SESSION['user'];
        $user = $this->userRepository->getUser($_SESSION['email']);
        $this->userRepository->editUser( $user, $name, $surname, $date_of_birth, $phoneNumber, $photo,
            $city, $postcode, $street, $houseNumber, $apartmentNumber, $password);

        $_SESSION['email'] = $user->getEmail();
        $_SESSION['name'] =$name;
        $_SESSION['surname'] = $surname;


        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/account");

    }

    public function logout(){
        session_start();
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            session_destroy();
        } else {
            echo "Please log in first to see this page.";
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }

    public function society(){
        //  display society.php
        if (!(isset($_SESSION))){
            $this->render('login');
        }

        $_SESSION["newsession"] = 1;
        $this->cookieOff();


        $users = $this->userRepository->getUsers();
        $this->render('society', ['users' => $users]);
    }
}
?>