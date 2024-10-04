<?php
session_start();
?>

<header>
  <div class="logo">
  <a href="index.php"><img src="images/logomimuss.png" alt="Logo Mimuss"></a>
  </div>
  <nav>
    <ul>
      <li><a href="lire.php">Magazine</a></li>
      <li><a href="interview.php">Interview</a></li>
      <li><a href="#forum">Forum</a></li>
      <li><a href="">Qui sommes-nous</a></li>
      <li><a href="apropos.php">Contact</a></li>
      <li>
    <div class="login-button">
      <a href="connexion.php" title="Connexion">
        <img src="images/logo_connexion.png" alt="Logo Connexion">
       <?php 
        if (isset($_SESSION['nickname'])) {
            echo "<p>Bienvenue, " . $_SESSION['nickname'] . "!</p>";
        } else {
            echo "<p>Bienvenue, invité!</p>";
        }
        ?> 
      </a>
    </div>
  </li>
  <li>
  <?php if (isset($_SESSION['nickname'])) {
    echo '<a href="logout.php" class="logout">Se déconnecter</a>';
} ?>

  
  </li>
    </ul>
  </nav>
  
</header>