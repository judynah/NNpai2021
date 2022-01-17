<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/society.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/a15f7b587f.js" crossorigin="anonymous"></script>
    <title>society</title>
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
        
        <!-- główna część strony -->
        <main>
            <section class="friends">
                <div id="friend1">
                    <img src="public/img/plants/pl1.jpg">
                    <i>name1</i>
                </div>
                <div id="friend2">
                    <img src="public\img\plants\pl1.jpg">
                    <i>name2</i>
                </div>
                <div id="friend3">
                    <img src="public\img\plants\pl1.jpg">
                    <i>name3</i>
                </div>
                <div id="friend4">
                    <img src="public\img\plants\pl1.jpg">
                    <i>name4</i>
                </div>
            </section>

            <section class="plant-actions">
                <div class="give-plant">
                    <i class="fas fa-plus-circle"></i>
                    <i id="give-plant-name">podaruj roślinkę</i>
                    <i class="fas fa-gift"></i>
                </div>
                <div class="ask-for-advice">
                    <i class="fas fa-plus-circle"></i>
                    <i id="ask-for-advice-name">zapytaj o radę</i>
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