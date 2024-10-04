<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.typekit.net/dwj1pad.css">
    <title>Newletter Mimuss</title>
</head>
<body>
<?php
include 'partials/header.php';
?>  
    <section>
        <div class="blocarriere">
            <div class="blocavant">
                <h2>Vos coordonnées :</h2>
                <div class="formulaire">
                    <form action="" method="post">
                        <div>
                            <label for="nom">Prénom :</label> <br>
                            <input type="text" id="mail" name="mail" required>
                        </div>
                        <div> <br> <br>
                            <label for="message">Mail :</label> <br>
                            <input type="text" id="mail" name="mail" required>
                        </div>
                        <div> <br>
                            <input type="submit" value="Envoyer">
                        </div>
                    </form>
                
                </div>
                <div class="fond">

                </div>
            </div>

        </div>
    </section>
    <?php
    include 'partials/footer.php';
    ?>  
</body>
</html>