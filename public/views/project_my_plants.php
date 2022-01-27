<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/project-my-plants.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/a15f7b587f.js" crossorigin="anonymous"></script>
    <title> MY PLANTS</title>
</head>
<body>
    <div class ="base-container">
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

        <main>
            <section class="plants">
                <?php
                    foreach ($plants as $plant): ?>
                <div id="plant1">
                    <div id="img">
                         <img src="public/uploads/<?=$plant->getImage() ?>" >
                    </div>                    
                    <div id="plantname">
                        <?= $plant->getName(); ?>
                    </div>

                </div>
                <?php endforeach; ?>

                <div> plant2 </div>
                <div> plant3 </div>
                <div> plant4 </div>
                <div> plant5 </div>
                <div> plant6 </div>
                <div> plant7 </div>
                <div> plant8 </div>
            </section>
          
            
        </main>

    </div>
</body>