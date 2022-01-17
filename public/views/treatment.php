<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/treatment.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/a15f7b587f.js" crossorigin="anonymous"></script>
    <title>treatment</title>
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

            <ul>
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

        <!-- Główne działanie strony -->
        <main>
            <section class="plant-introduction">
                <div class="plant-introduction-photo">

<!--                    </div>-->
<!--                    <form action="addPlantPhoto" method="POST" ENCTYPE="multipart/form-data">-->
<!--                        <input type="file" name="plant_img_file">-->
<!--                        <button type="submit">send</button>-->
<!--                    </form>-->
                </div>
<!--                <img src="../img/plants/pl1.jpg">-->
                <div class="plant-name">plant_name</div>
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