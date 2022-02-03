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
    <?php include_once('nav.php'); ?>

    <!-- główna część strony -->
    <main>
        <header class="addPlant-header"> Add New Plant </header>
        <section class="add-container">
            <form class="add-plant-form" action="addPlant" method="POST" ENCTYPE="multipart/form-data">
                <div id="add-content">
                    <div class="messages">
                        <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <ul>
                        <li>
                            <h1> Name </h1>
                            <input id="plant-name" name="name" type="text" placeholder="plant name">
                        </li>
                        <li>
                            <h1> Image </h1>
                            <input id="plant-image"  name="file"  type="file" ><br/>
                        </li>
                        <li>
                            <h1> Species </h1>
                            <input id="species"  name="species" type="text" placeholder="species">
                        </li>
                        <li>
                            <h1> Date of buy </h1>
                            <input id="day-of-buy" name="date_of_buy"  type="text" placeholder="day of buy">
                        </li>
                        <li>
                            <h1>Ambient temperature </h1>
                            <input id="ambient-temperature"  name="temperature" type="text" placeholder="temperature (degC)">
                        </li>
                        <li>
                            <h1> Pot diameter </h1>
                            <input id="pot-diameter"  name="pot_diameter" type="text" placeholder="pot diameter">
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
