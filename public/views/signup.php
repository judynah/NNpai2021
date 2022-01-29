<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/login-page-signup.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?<?php echo time(); ?>">
    <title>Sign up</title>
</head>

<body>
<div class="container">

    <div class="monstera-background">
        <div class="monstera-container">
            <div class="logo-container">
                <div class="logo">
                    Plantcherish
                </div>
            </div>

            <div class="signup-container">
                <form class="form-signup" action="signup" method="post">
                    <div class="messages">
                        <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <div class="left-data">
                        <input name="name" type="text" placeholder="name">
                        <input name="surname" type="text" placeholder="surname">
                        <input name="date_of_birth" type="text" placeholder="date of birth">
                        <input name="email" type="text" placeholder="email@email.com">
                        <input name="password" type="text" placeholder="password">
                        <input name="confirmed_password" type="text" placeholder="confirm password">
                    </div>

                    <div class="right-data">
                        <input name="city" type="text" placeholder="city">
                        <input name="postcode" type="text" placeholder="postcode">
                        <input name="street" type="text" placeholder="street">
                        <input name="house_number" type="number" placeholder="house number">
                        <input name="apartment_number" type="number" placeholder="apartment number">
                        <input name="phone_number" type="text" placeholder="phone number">
                    </div>

                    <button id="create-account-submit-button">submit</button>

                </form>

            </div>
        </div>


    </div>

</div>
</body>
