<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/add-plant.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/a15f7b587f.js" crossorigin="anonymous"></script>
    <title>AddPlant</title>
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
        <header class="addPlant-header"> Add New Plant </header>

        <section class="add-container">
            <form class="add-plant-form">
                <div id="add-content">
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
                            <h1> Name </h1>
                            <input id="plant-name" type="text" placeholder="plant name">
                        </li>
                        <li>
                            <h1> Image </h1>
                            <input id="plant-image" type="text" placeholder="plant photo">
                        </li>
                        <li>
                            <h1> Species </h1>
                            <input id="species" type="text" placeholder="species">
                        </li>
                        <li>
                            <h1> Date of buy </h1>
                            <input id="day-of-buy" type="text" placeholder="day of buy">
                        </li>
                        <li>
                            <h1>Ambient temperature </h1>
                            <input id="ambient-temperature" type="text" placeholder="temperature">
                        </li>
                        <li>
                            <h1> Pot diameter </h1>
                            <input id="pot-diameter" type="text" placeholder="pot diameter">
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
