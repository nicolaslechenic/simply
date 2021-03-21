<?php
/* Récupération de l'adresse de page passée dans URL*/
$path='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$current=basename($path);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/761d77ec55.js" crossorigin="anonymous"></script>
  <title><?= $page;?></title>
</head>

<body class="conatiner-fluid">
  <header>
    <div id="top-nav" class="<?php if($page=='accueil'){echo 'd-none d-md-block';} else{echo 'd-none';}?> ">
      <div class="container">
        <ul class="nav d-none d-sm-flex justify-content-end ">
          <li class="nav-item">
            <span>|</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://instagram.com"><i class="fab fa-instagram"></i></a>
          </li>
          <li class="nav-item">
            <span>|</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tel:00000000000"><i class="fas fa-phone-alt"></i> 02 57 87 71 85</a>
          </li>
          <li class="nav-item" data-toggle="modal" data-target="#myModal">
            <span>| <i class="fas fa-scroll"></i> Suivre mon projet |</span>
          </li>
        </ul>
      </div>
      <!-- The Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <i class="far fa-times-circle m-2 text-right" data-dismiss="modal"></i>
            <!-- Modal body -->
            <div class="modal-body">
              <form action="/action_page.php">
                <div class="form-group">
                  <label for="email">Email :</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Mot de passe:</label>
                  <input type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group d-flex justify-content-around">
                  <a href="#">Mot de passe oublié</a>
                  <a href="#">Créer un compte</a>
                </div>
                <button type="submit" class="btn btn-primary text-center">SE CONNECTER</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="container-fluid d-flex align-items-end <?php if($page=='accueil'){echo 'accueil';} else{echo 'fixed-top';}?>"
      id="header-main-nav">
      <div class="<?php if($page=='accueil'){echo 'container';} else{echo 'container-fluid nav-fuschia';} ?>">
        <nav class="navbar navbar-expand-md navbar-dark">
          <a class="navbar-brand d-flex" href="accueil.php">
            <img src="../images/simply-home-logo.png" alt="logo">
            <div>
              <p class="mb-0 mt-1">Simply Home</p>
              <p class="mb-0">Constructeur de vie</p>
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav align-items-end m-2 justify-content-around">
              <li class="nav-item">
                <a class="nav-link <?php if($current == 'accueil.php'){ echo 'current-page'; } ?>"
                  href=" accueil.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($current =='apropos.php'){ echo 'current-page'; } ?>" href=" apropos.php">A
                  propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($current =='nosmaisons.php'){ echo 'current-page'; } ?>"
                  href=" nosmaisons.php">Nos Maisons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($current =='contact.php'){ echo 'current-page'; } ?>"
                  href=" contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div id="contact-us"
      class="d-flex flex-column align-items-end <?php if($page=='accueil'){echo 'contactUs';} else{echo 'contUs';}?>">
      <button type="button" class="btn mb-1 d-flex align-items-center" id="phone">
        <i class="fas fa-phone-alt"></i><a href="tel:00000000000" class="ml-3">02 57 87 71 85</a>
      </button>
      <button type="button" class="btn" id="emailButton"><i class="fas fa-envelope" data-toggle="modal"
          data-target="#modal-contact"></i></button>
    </div>
    <div class="modal" id="modal-contact">
    <div class="modal-dialog">
      <div class="modal-content">
        <i class="far fa-times-circle m-2 text-right" data-dismiss="modal"></i>
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/action_page.php">
            <div class="form-group">
              <label for="nom">Nom :</label>
              <input type="text" class="form-control" id="nom">
            </div>
            <div class="form-group">
              <label for="email">Mail :</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea class="form-control" id="message" rows="3" name="text"></textarea>
            </div>
            <button type="submit" class="btn btn-primary text-center">ENVOYER</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </header>