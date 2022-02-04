<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/treatment.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/a15f7b587f.js" crossorigin="anonymous"></script>
    <title>treatment</title>
</head>

<body>
    <div class ="base-container">
        <!-- nawigacja - pasek górny -->
        <?php include_once('nav.php'); ?>
        <!-- Główne działanie strony -->
        <main>
            <section class="plant-introduction">
                <div class="plant-introduction-photo">
                    <img src="public/uploads/galina-n-miziNqvJx5M-unsplash.jpg">

<!--                    </div>-->
<!--                    <form action="addPlantPhoto" method="POST" ENCTYPE="multipart/form-data">-->
<!--                        <input type="file" name="plant_img_file">-->
<!--                        <button type="submit">send</button>-->
<!--                    </form>-->
                </div>
                <div class="plant-name"><?= $_SESSION['id_plant']; ?></div>

            </section>

            <section class="plant-planned-action">
                <div class="water">
                    <i class="fas fa-tint"></i>
                    <i class="action-name">Podlewanie</i>
                    <i class="fas fa-toggle-on"></i>
                </div>
                <div class="dust-wiping">
                    <i class="fas fa-box-tissue"></i>
                    <i class="action-name">Wycieranie kurzu</i>
                    <i class="fas fa-toggle-on"></i>
                </div>
                <div class="replanting">
                    <i class="fas fa-hand-paper"></i>
                    <i class="action-name">Przesadzanie</i>
                    <i class="fas fa-toggle-on"></i>
                </div>              
            </section> 

            <section class="plant-data">
                <div class="left-text-constant">
                    <div>Gatunek</div>
                    <div>Data zakupu</div>
                    <div>Temp otoczenia</div>
                    <div>Rozmiar osłonki</div>
                </div>
                <div class="right-text-variable"></div>
            </section>

            <section class="action-history">

            </section>


        </main>


    </div>
</body>       