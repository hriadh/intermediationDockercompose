<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">Accueil | Portail d'intermédiation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
        <?php if (isset($_SESSION['auth_user'])) : ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['user_nom']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Mon profil</a></li>
            <li>
              <form action="logout.php" method="POST">
               <button type="submit" name="logout" class="dropdown-item">Se déconnecter</button> 
              </form>
            </li>
            
            
          </ul>

        <?php else : ?>
        <li class="nav-item">

          <a class="nav-link" href="login.php">Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">S'inscrire</a>
        </li>
      <?php endif ; ?>
      </ul>
      
    </div>
  </div>
</nav>