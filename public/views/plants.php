<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/project-my-plants.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/a15f7b587f.js" crossorigin="anonymous"></script>
    <title>My Plants</title>
</head>
<body>
    <div class ="base-container">
        <?php include_once('nav.php'); ?>

        <main>
            <section class="plants">
                <?php
                if(isset($plants)) {
                    foreach($plants as $plant):?>
                    <div class="plant1">
                        <div id="img">
                             <img src="public/uploads/<?=$plant['image'] ;?>" >
                        </div>
                        <div id="plantname">
                            <? $_SESSION['id_plant'] = $plant['id_plant'] ; ?>
                            <a href="treatment" class="button"><?= $plant['name'];?></a>
                        </div>

                    </div>
                <?php endforeach;
                }
                ?>

            </section>
          
            
        </main>

    </div>
</body>