<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/give-plant.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/a15f7b587f.js" crossorigin="anonymous"></script>
    <title>Give plant</title>
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
        <header class="give-plant-header"> Give Your Plant </header>

        <section class="give-plant-container">
            <form class="give-plant-form">
                <div id="give-plant-content">
                    <!--                    <div class="messages">-->
                    <!--                        --><?php
                    //                        if(isset($messages)){
                    //                            foreach($messages as $message) {
                    //                                echo $message;
                    //                            }
                    //                        }
                    //                        ?>
                    <!--                    </div>-->
                    <ul>
                        <li>
                            <h1> Plant </h1>
                            <input id="give-plant-name" type="text" placeholder="write plant's name">
                        </li>
                        <li>
                            <h1> Message </h1>
                            <input id="give-message" type="text" placeholder="write a message">
                        </li>
                        <li>
                            <h1> Due date </h1>
                            <input id="give-due-date" type="text" placeholder="write due date">
                        </li>
                        <li>
                            <button type="submit" value="settings">Submit</button>
                        </li>
                    </ul>

                </div>
            </form>
        </section>
    </main>

</div>
</body>
