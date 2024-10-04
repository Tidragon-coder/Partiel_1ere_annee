<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lire.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.typekit.net/dwj1pad.css">
    <title>Lire</title>
</head>
<body>
<?php
include 'partials/header.php';
?>  
    <section>
        <div class="BD">
            <div class="imgbd">
                <img src="images/bd1.jpg" alt="Image de la BD N°1" id="image" height="600px" width="450px">
            </div>
            <div class="txt">
                <div class="txtbdtitre">
                    <h5 id="num">BD n°1</h5>
                    <h1 id="title">Mimus Harcelé 1</h1>
                    <h5>Par Mathilde Sassier</h5>
                </div>
                <div class="txtbdbody">
                    <p id="cont">Nous suivons l’histoire de Mimuss, un personnage non genré qui représente chacun d’entre nous. Mimuss est passionné(e) d’informatique et de réseaux sociaux. Un jour, il/elle devient la cible de cyberharcèlement. Des messages haineux, des menaces et des rumeurs commencent à envahir sa vie virtuelle, mais aussi sa vie réelle. Mimuss se sent isolé(e), impuissant(e) et effrayé(e).
                        Cependant, tout change lorsque Mimuss découvre un centre d’aide spécialisé dans la lutte contre le cyberharcèlement. Il/elle y rencontre des professionnels bienveillants : psychologues, avocats et experts en sécurité numérique. Ils l’écoutent sans jugement, lui offrent des conseils et l’encouragent à briser le silence. Mimuss réalise que parler de son expérience est la première étape vers la résolution de ce cauchemar.</p>
                </div>
            </div>
            <div class="fleche">
                <img src="images/Fleche-droite.png" alt="fleche" id="fleche" height="50px" width="50px">
            </div>
        </div>
    </section>
    <button id="changeBtn">Changer test</button>
    <?php
    include 'partials/footer.php';
    ?>  
    <script src="js/lire.js"></script>
</body>
</html>
