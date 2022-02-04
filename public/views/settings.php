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
    <?php include_once('nav.php'); ?>

    <!-- główna część strony -->
    <main>
        <header class="settings-header"> Settings </header>

        <section class="settings-container">
            <div id="content">
                <form class="settings" action="settings" method="POST"" ENCTYPE="multipart/form-data">

                    <div class="messages">
                        <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>

                        <div class="settings-personal-data-container">
                            <h1> Personal data </h1>
                            <ul>
                                <div class="left-data">
                                    <li>
                                        <h2> Name </h2>
                                        <input id="settings-name" name="name" type="text" placeholder="name">
                                    </li>
                                    <li>
                                        <h2> Surname </h2>
                                        <input id="settings-surname" name="surname" type="text" placeholder="surname">
                                    </li>
                                    <li>
                                        <h2> Date of birth </h2>
                                        <input id="settings-date_of_birth" name="date_of_birth" type="text" placeholder="date of birth">
                                    </li>
                                    <li>
                                        <h2> Phone number </h2>
                                        <input id="settings-phone_number" name="phone_number" type="text" placeholder="phone number">
                                    </li>
                                    <li>
                                        <h2> Photo </h2>
                                        <input id="settings-photo"  name="file"  type="file" placeholder="photo" ><br/>
                                    </li>

                                </div>

                                <div class="right-data">
                                    <li>
                                        <h2> City </h2>
                                        <input id="settings-city" name="city" type="text" placeholder="city">
                                    </li>
                                    <li>
                                        <h2> Postcode </h2>
                                        <input id="settings-postcode" name="postcode" type="text" placeholder="postcode">
                                    </li>
                                    <li>
                                        <h2> Street </h2>
                                        <input id="settings-street" name="street" type="text" placeholder="email@email.com">
                                    </li>
                                    <li>
                                        <h2> House number </h2>
                                        <input id="settings-house_number" name="house_number" type="number" placeholder="house number">
                                    </li>
                                    <li>
                                        <h2> Apartment number </h2>
                                        <input id="settings-apartment_number" name="apartment_number" type="number" placeholder="phone number">
                                    </li>

                                </div>
                            </ul>
                        </div>

                        <div class="settings-password-container">
                            <h1>Password</h1>
                            <ul>
                                <li>
                                    <h2> New Password</h2>
                                    <input id="setting-password" name="password" type="password" placeholder="password"
                                           pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{5,}$" title="Password must contain lower case, upper case letter and at least one number"
                                           readonly onfocus="this.removeAttribute('readonly');">

                                </li>
                                <li>
                                    <h2>Confirm password</h2>
                                    <input id="setting-confirm-password" name="confirmed_password" type="password" placeholder="conform-password"
                                           pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{5,}$" title="Password must contain lower case, upper case letter and at least one number"
                                           readonly onfocus="this.removeAttribute('readonly');">
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
