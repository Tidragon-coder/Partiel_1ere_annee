<?php
// En premier, on démarre la session
// Connexion à la base de données
include('config.php');

// On récupère les données du formulaire de connexion si elles sont envoyées
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['emailLogin']) && isset($_POST['passwordLogin'])) {
    // On récupère les données du formulaire
    $email = $_POST['emailLogin'];
    $password = $_POST['passwordLogin'];

    // On prépare et exécute la requête SQL
    $requete = $sql->prepare("SELECT * FROM users WHERE mail = :email");
    $requete->bindParam(':email', $email);
    $requete->execute();
    $resultat = $requete->fetch();

    // Si on a un résultat, on vérifie le mot de passe
    if ($resultat) {
        $userPassword = $resultat['password'];
        if (password_verify($password, $userPassword)) {
            $userId = $resultat['id'];
            $userName = $resultat['nickname'];
            $userEmail = $resultat['mail'];
            // On met les données de l'utilisateur en session
            session_start();
            $_SESSION['id'] = $userId;
            $_SESSION['nickname'] = $userName;
            $_SESSION['mail'] = $userEmail;
            
            // Redirection vers la page d'accueil après connexion
            header('Location: /index.php');
            exit(); // Assurez-vous de terminer le script après la redirection
        } else {
            echo "Mot de passe invalide";
        }
    } else {
        echo "Pas d'utilisateur avec cet email";
    }
}

// On récupère les données du formulaire d'inscription si elles sont envoyées
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    // On récupère les données du formulaire
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // On crée une requête SQL
    $requete = $sql->prepare('INSERT INTO users(nickname, mail, password) VALUES (:nom, :email, :password)');
    // On lance la requête
    try {
        $requete->execute([
            'nom' => $nom,
            'email' => $email,
            'password' => $password,
        ]);
        
      
        $_SESSION['nickname'] = $nom;
         
        header('Location: /index.php');
        exit(); // Assurez-vous de terminer le script après la redirection
    } catch(Exception $e) {
        echo "Erreur dans la création de l'utilisateur : " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.typekit.net/dwj1pad.css">
    <title>Lire</title>
</head>
<body>
<?php
include 'partials/header.php';
?>  

<div class="form-container">
    <div class="login-form">
        <h3>Se connecter :</h3>
        <form method="POST" action="connexion.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                <input type="email" name="emailLogin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" name="passwordLogin" class="form-control" id="exampleInputPassword1" required>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>

    <div class="signup-form">
        <h3>Créer un compte :</h3>
        <form method="POST" action="connexion.php">
            <div class="mb-3">
                <label for="inputName" class="form-label">Nom :</label>
                <input type="text" name="name" class="form-control" id="inputName" aria-describedby="nameHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Adresse e-mail</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword2" required>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>
</div>

<?php
    include 'partials/footer.php';?>  
</body>
</html>