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
                    <div class="user">
                        <div id="img">
                            <img src="public/uploads/<?=$user['photo'];?>" >
                        </div>
                        <div id="friendname">
                            <a href="plants" class="users-button"><?= $user['name'];?></a>
                        </div>

                    </div>
                <?php endforeach; ?>
            </section>

            <section class="plant-actions">
                <div class="give-plant">
                    <i class="fas fa-plus-circle"></i>
                    <a href="give_plant" class="button">Give the plant</a>
<!--                    <i id="give-plant-name">Give the plant</i>-->
                    <i class="fas fa-gift"></i>
                </div>
                <div class="ask-for-advice">
                    <i class="fas fa-plus-circle"></i>
                    <a href="ask_for_advice" class="button">Ask for advice</a>
<!--                    <i id="ask-for-advice-name">Ask for advice</i>-->
                    <i class="fas fa-question-circle"></i>
                </div>
            </section>

            <section class="advertisments">
                <div id="advert-name">Ogłoszenia</div>
                <div class="advert">
                
                </div>
                <div class="advert">
                
                </div>
                <div class="advert">
                
                </div>
            </section>



        </main>

    </div>
</body>