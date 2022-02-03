<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/give-plant.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/a15f7b587f.js" crossorigin="anonymous"></script>
    <title>Ask for advice</title>
</head>

<body>
<div class ="base-container">
    <!-- nawigacja - pasek górny -->
    <?php include_once('nav.php'); ?>

    <!-- główna część strony -->
    <main>
        <header class="give-plant-header"> Ask for advice </header>

        <section class="give-plant-container">
            <form class="give-plant-form">
                <div id="give-plant-content">
                    <!--                    <div class="messages">-->
                    <!--                        --><?php
                    //                        if(isset($messages)){
                    //                            foreach($messages as $message) {
                    //                                echo $message;
                    //                            }
                    //                        }
                    //                        ?>
                    <!--                    </div>-->
                    <ul>
                        <li>
                            <h1> Plant </h1>
                            <input id="ask-for-advice-name" type="text" placeholder="write plant's name">
                        </li>
                        <li>
                            <h1> Description </h1>
                            <textarea name="ask-for-advice-description" rows=3 placeholder="description"></textarea>
                        </li>
                        <li>
                            <h1> Due date </h1>
                            <input id="ask-for-advice-due-date" type="text" placeholder="write due date">
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
