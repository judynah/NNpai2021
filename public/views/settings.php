<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/settings.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/a15f7b587f.js" crossorigin="anonymous"></script>
    <title>Settings</title>
</head>

<body>
<div class ="base-container">
    <!-- nawigacja - pasek górny -->
    <nav>
        <div class="p-logo">
            <a href="#" class="button"> P</a>
        </div>
        <div class="my-plants-header">
            <a href="#" class="button"> Moje rośliny</a>
        </div>
        <div class="treatment">
            <a href="#" class="button"> Pielęgnacja</a>
        </div>
        <div class="society">
            <a href="#" class="button"> Społeczność</a>
        </div>

        <ul class="ul_buttons">
            <li>
                <i class="fas fa-search"></i>
                <a href="#" class="button"> search-button</a>
            </li>
            <li>
                <i class="fas fa-user-alt"></i>
                <a href="#" class="button"> account-button</a>
            </li>
            <li>
                <i class="fas fa-cog"></i>
                <a href="#" class="button"> setttings-button</a>
            </li>
            <li>
                <i class="fas fa-bell"></i>
                <a href="#" class="button"> alarm-button</a>
            </li>

        </ul>
    </nav>

    <!-- główna część strony -->
    <main>
        <header class="settings-header"> Settings </header>

        <section class="settings-container">
            <div id="content">
                <form class="login">

<!--                    <div class="messages">-->
<!--                        --><?php
//                        if(isset($messages)){
//                            foreach($messages as $message) {
//                                echo $message;
//                            }
//                        }
//                        ?>
<!--                    </div>-->

                        <div class="settings-personal-data-container">
                            <h1> Personal data </h1>
                            <ul>
                                <div class="left-data">
                                    <li>
                                        <h2> Name </h2>
                                        <input id="settings-name" type="text" placeholder="name">
                                    </li>
                                    <li>
                                        <h2> Surname </h2>
                                        <input id="settings-surname" type="text" placeholder="surname">
                                    </li>
                                    <li>
                                        <h2> Date of birth </h2>
                                        <input id="settings-date_of_birth" type="text" placeholder="date of birth">
                                    </li>
                                    <li>
                                        <h2> Phone number </h2>
                                        <input id="settings-phone_number" type="text" placeholder="phone number">
                                    </li>
                                    <li>
                                        <h2> Email </h2>
                                        <input id="settings-email" type="text" placeholder="email@email.com">
                                    </li>

                                </div>

                                <div class="right-data">
                                    <li>
                                        <h2> City </h2>
                                        <input id="settings-city" type="text" placeholder="city">
                                    </li>
                                    <li>
                                        <h2> Postcode </h2>
                                        <input id="settings-postcode" type="text" placeholder="postcode">
                                    </li>
                                    <li>
                                        <h2> Street </h2>
                                        <input id="settings-street" type="text" placeholder="email@email.com">
                                    </li>
                                    <li>
                                        <h2> House number </h2>
                                        <input id="settings-house_number" type="text" placeholder="house number">
                                    </li>
                                    <li>
                                        <h2> Apartment number </h2>
                                        <input id="settings-apartment_number" type="text" placeholder="phone number">
                                    </li>

                                </div>
                            </ul>
                        </div>

                        <div class="settings-password-container">
                            <h1>Password</h1>
                            <ul>
                                <li>
                                    <h2> New Password</h2>
                                    <input id="setting-password" type="text" placeholder="password">
                                </li>
                                <li>
                                    <h2>Confirm password</h2>
                                    <input id="setting-confirm-password" type="text" placeholder="conform-password">
                                </li>
                                <li>
                                    <button type="submit" value="settings">Update</button>
                                </li>
                            </ul>
                        </div>

                </form>

            </div>
    </main>

</div>
</body>
