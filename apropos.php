<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/apropos.css">
    <link rel="stylesheet" href="https://use.typekit.net/dwj1pad.css">
    <title>A propos Mimuss</title>
</head>
<body>
<?php
include 'partials/header.php';
?>  
    <section>
        <div class="centre">
            <div class="blocarriere">
                <div class="blocavant">
                    <h2>Nous conctater :</h2>
                    <div class="formulaire">
                        <form action="" method="post">
                            <div>
                                <label for="nom">E-mail :</label> <br>
                                <input type="text" id="mail" name="mail" required>
                            </div>
                            <div> <br>
                                <label for="message">Message :</label> <br>
                                <textarea id="message" name="message" rows="4" required></textarea>
                            </div>
                            <div>
                                <input type="submit" value="Envoyer">
                            </div>
                        </form>
                    
                    </div>
                    <div class="fond">

                    </div>
                </div>

            </div>
            
            <div class="blocarriere">
                <div class="blocavant2">
                    <h2>Nos coordonnées :</h2>
                    <div class="ggmaps">
                    </div>
                    <div class="coordonnees">
                        <ul>
                            <li>Mydigitalschool</li>
                            <li><img src="images/loc.png" alt="localisation" width="40px" height="40px">40 rue du chemin vert, 75011 PARIS</li>
                            <li><img src="images/tel.png" alt="téléphone" width="30px" height="30px">  01 23 45 67 89</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include 'partials/footer.php';?>  
</body>
</html>