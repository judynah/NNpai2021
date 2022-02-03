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
                <?php foreach($plants as $plant):?>
                <div class="plant1">
                    <div id="img">
                         <img src="public/uploads/<?=$plant->getImage();?>" >
                    </div>
                    <div id="plantname">
                        <a href="treatment" class="button"><?= $plant->getName();?></a>
                    </div>

                </div>
                <?php endforeach; ?>

            </section>
          
            
        </main>

    </div>
</body>