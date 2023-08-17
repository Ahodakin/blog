  <!-- navigation -->
  <nav class="navigation navbar is-fixed-top is-align-items-center is-transparent" role="navigation" aria-label="main navigation">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="index.php">
          <img class="img-fluid" width="100px" src="assets/images/logo.png" alt="">
        </a>
    
        <a role="button" class="navbar-burger burger mt-2" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
    
      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start mx-auto">

          <li class="navbar-item">
            <a class="navbar-link is-arrowless" href="index.php">Accueil</a>
          </li>
          <li class="navbar-item">
            <a class="navbar-link is-arrowless" href="publish-question.php">Publier une question</a>
          </li>
          <li class="navbar-item">
            <a class="navbar-link is-arrowless" href="my-question.php">Mes questions</a>
          </li>
          <?php
        if(isset($_SESSION["auth"])){
          ?>
          <li class="navbar-item">
            <a class="navbar-link is-arrowless" href="profile.php?id=<?= $_SESSION['id']; ?>">Mon Profil</a>
          </li>
          <li class="navbar-item">
            <a class="navbar-link is-arrowless" href="action/users/logoutAction.php">Déconnexion</a>
          </li>
          <?php
        }    
        ?>
        </div>

      </div>
    </div>
  </nav>
<!-- /navigation -->