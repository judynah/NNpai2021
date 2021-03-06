<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/login-page.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?<?php echo time(); ?>">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>Login page</title>
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

            <div class="login-container">
                <form class="form-login" action="login" method="post">
                    <div class="messages">
                        <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <input name="email" type="text" placeholder="email@email.com">
                    <input name="password" type="password" placeholder="password">
                    <button id="login-button" type="submit" value="login">Sign in</button>
                    <a href="signup">
                        <button id="create-account-button" type="button" name="signup"  >Create account</button>
                    </a>
                </form>

            </div>
        </div>


    </div>

</div>

</body>