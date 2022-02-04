<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/main-page.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/a15f7b587f.js" crossorigin="anonymous"></script>
    <title>MAIN PAGE</title>
</head>

<body>
    <div class ="base-container">
        <!-- nawigacja - pasek górny -->
        <?php include_once('nav.php'); ?>
        
        <!-- główna część strony -->
        <main>
            <header class="upcoming-treatment-header"> Upcoming treatment </header>
            <section class="upcoming-treatment">
                <div id="treat1">
                    <img src="public/img/plants/pl1.jpg">
                    <div class="plant-short-data">
                        <i class="plant-name"></i>
                        <i class="action-icon"></i>
                        <i class="date"></i>
                        <i class="time"></i>
                    </div>
                </div>  
                <div id="treat2">
                    <img src="public/img/plants/pl2.jpg">
                    <div class="plant-short-data">
                        <i class="plant-name"></i>
                        <i class="action-icon"></i>
                        <i class="date"></i>
                        <i class="time"></i>
                    </div>
                </div>
                <div id="treat3">
                    <img src="public/img/plants/pl3.jpg">
                    <div class="plant-short-data">
                        <i class="plant-name"></i>
                        <i class="action-icon"></i>
                        <i class="date"></i>
                        <i class="time"></i>
                    </div>
                </div>
                <div id="treat4">
                    <img src="public/img/plants/pl1.jpg">
                    <div class="plant-short-data">
                        <i class="plant-name"></i>
                        <i class="action-icon"></i>
                        <i class="date"></i>
                        <i class="time"></i>
                    </div>
                </div>
            </section>

            <header class = "last-actions-header"> Last actions </header>

            <section class= "last-actions">
                <div id="action1">
                    <img src="public/img/plants/pl1.jpg">
                    <div class="plant-short-data">
                        <i class="plant-name"></i>
                        <i class="action-icon"></i>
                        <i class="date"></i>
                        <i class="time"></i>
                    </div>
                </div>
                <div id="action2">
                    <img src="public/img/plants/pl1.jpg">
                    <div class="plant-short-data">
                        <i class="plant-name"></i>
                        <i class="action-icon"></i>
                        <i class="date"></i>
                        <i class="time"></i>
                    </div>
                </div>    
                <div id="action3">
                    <img src="public/img/plants/pl1.jpg">
                    <div class="plant-short-data">
                        <i class="plant-name"></i>
                        <i class="action-icon"></i>
                        <i class="date"></i>
                        <i class="time"></i>
                    </div>
                </div>
                <div id="action4">
                    <img src="public/img/plants/pl1.jpg">
                    <div class="plant-short-data">
                        <i class="plant-name"></i>
                        <i class="action-icon"></i>
                        <i class="date"></i>
                        <i class="time"></i>
                    </div>
                </div>
            </section>

        </main>

    </div>
</body>