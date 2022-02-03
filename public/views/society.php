<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/society.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/a15f7b587f.js" crossorigin="anonymous"></script>
    <title>society</title>
</head>

<body>
    <div class ="base-container">
        <!-- nawigacja - pasek górny -->
        <?php include_once('nav.php'); ?>
        
        <!-- główna część strony -->
        <main>

            <section class="friends" >

                <?php foreach( $users as $user): ?>
<!--                    --><?php //echo $user->getName() ?>
                    <div class="user1">
                        <div id="img">
<!--                            <img src="public/uploads/--><?//=$user->getImage();?><!--" >-->
                        </div>
                        <div id="plantname">
<!--                            <a href="users" class="users-button">--><?//= $user->getName();?><!--</a>-->
                        </div>

                    </div>
                <?php endforeach; ?>
            </section>

            <section class="plant-actions">
                <div class="give-plant">
                    <i class="fas fa-plus-circle"></i>
                    <i id="give-plant-name">Give the plant</i>
                    <i class="fas fa-gift"></i>
                </div>
                <div class="ask-for-advice">
                    <i class="fas fa-plus-circle"></i>
                    <i id="ask-for-advice-name">Ask for advice</i>
                    <i class="fas fa-question-circle"></i>
                </div>
            </section>

            <section class="advertisments">
                <div id="advert-name">Ogłoszenia</div>
                <div class="advert1">
                
                </div>
                <div class="advert2">
                
                </div>
                <div class="advert3">
                
                </div>
            </section>



        </main>

    </div>
</body>