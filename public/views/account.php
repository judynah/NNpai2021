<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/give-plant.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/account.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/a15f7b587f.js" crossorigin="anonymous"></script>
    <title>My account</title>
</head>

<body>
<div class ="base-container">
    <!-- nawigacja - pasek górny -->
    <?php include_once('nav.php'); ?>

    <!-- główna część strony -->
    <main>
        <header class="give-plant-header"> My Account</header>
        <section class="account-name-container">
            <div class="user-photo">
<!--               dodac zdjęcie-->

                <img id="user-image" src="public/uploads/<?=$_SESSION['user']->getPhoto();?>" >

            </div>

            <div class="user-name">
                <h1><?=$_SESSION['user']->getName()." ".$_SESSION['user']->getSurname(); ?></h1>
            </div>

            <div class="user-data">
                <ul>
                    <li>
                        <h2> Date of birth </h2>
                        <h1><?=$_SESSION['user']->getDateOfBirth(); ?></h1>
<!--                        <h1> 19-12-1993</h1>-->
                    </li>
                    <li>
                        <h2> City </h2>
                        <h1><?=$_SESSION['user']->getCity(); ?></h1>
                    </li>
                    <li>
                        <h2> postcode </h2>
                        <h1><?=$_SESSION['user']->getPostcode(); ?></h1>
                    </li>
                    <li>
                        <h2> Street </h2>
                        <h1><?=$_SESSION['user']->getStreet(); ?></h1>
                    </li>
                    <li>
                        <h2> House number </h2>
                        <h1><?=$_SESSION['user']->getHouseNumber(); ?></h1>
                    </li>
                    <li>
                        <h2> Apartment number </h2>
                        <h1><?=$_SESSION['user']->getApartmentNumber(); ?></h1>
                    </li>
                    <li>
                        <h2> Phone number </h2>
                        <h1><?=$_SESSION['user']->getPhoneNumber(); ?></h1>
                    </li>
                </ul>
            </div>


        </section>



    </main>

</div>
</body>
