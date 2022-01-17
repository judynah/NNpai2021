<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/login-page.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>LOGIN PAGE</title>
</head>

<body>   
    <div class="container">
        
        <div class="monstera-background">
            <div class="monstera-container">
                <div class="logo-container">
                    <div class="logo">
                        Plantcherish
                    </div>
                </div>
                        
                <div class="login-container">
                    <form action="addProject" method="POST" ENCTYPE="multipart/form-data">
                        <div class="messages">
                            <?php
                            if(isset($messages)){
                                foreach($messages as $message) {
                                    echo $message;
                                }
                            }
                            ?>
                        </div>
                        <input type="file" name="plant_photo_file"/><br/>
                        <button type="submit">send</button>
                    </form>
                
                </div>
            </div>

            
        </div>
        
    </div>
</body>