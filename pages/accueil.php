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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/761d77ec55.js" crossorigin="anonymous"></script>
  <script src="../scripts/phoneEmailtoggle.js"></script>
  <title>Simply Home</title>
</head>

<body class="conatiner-fluid">
  <header>
    <div id="top-nav" class="d-none d-md-block">
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
            <a class="nav-link" href="https://instagram.com"><i class="fas fa-phone-alt"></i> 02 57 87 71 85</a>
          </li>
          <li class="nav-item" data-toggle="modal" data-target="#myModal">
            <span>| Suivre mon projet |</span>
          </li>
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
                <button type="submit" class="btn btn-primary text-center">SE CONNECTER</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid d-flex align-items-end" id="header-main-nav">
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark">
          <a class="navbar-brand d-flex" href="home.php">
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
  </header>
  <main>
    <!-- <div id="modal-phone">
      <p class="text-center font-weight-bold"></p>
    </div> -->
    <!-- Contact us Modal -->
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
                <texarea class="form-control" id="message" rows="3">
              </div>
              <button type="submit" class="btn btn-primary text-center">ENVOYER</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="contact-us" class="d-flex flex-column align-items-end">
      <button type="button" class="btn mb-1 d-flex align-items-center" id="phone">
        <i class="fas fa-phone-alt"></i><a id="num" href="tel:00000000000" class="ml-3">02 57 87 71 85</a>
      </button>
      <button type="button" class="btn"><i class="fas fa-envelope" data-toggle="modal"
          data-target="#modal-contact"></i></button>
    </div>
    <section id="bienvenue" class="container text-center">
      <h1 class="mr-4">Bienvenue Chez Simply Home</h1>
      <div class="row m-3">
        <article class="col-lg-9 col-sm-12 text-justify">
          <p>Pellentesque id sagittis turpis, eget elementum eros. Fusce blandit ex a nulla tempor condimentum. Fusce
            consectetur et blandit aliquet, egestas id magna. In hac habitasse platea dictumst. </p>
          <p>usce sed tincidunt nibh. Phasellus quis cursus velit. Ut quis aliquam sem. Suspendisse at sollicitudin
            ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
        </article>
        <img src="../images/construction_maison_individuelle.jpg" alt="" class="col-3 img-fluid d-none d-md-block">
      </div>
    </section>
    <section id="nos-maisons" class="container text-center">
      <h2>Nos maisons</h2>
      <div class="d-flex justify-content-between flex-wrap">
        <div class="card ">
          <a href="#">
            <img class="card-img-top" src="../images/calypso_3_chambres.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Calypso</h4>
              <p class="card-text description">Maison 3 chambres</p>
              <p class="card-text">107m²</p>
            </div>
          </a>
        </div>
        <div class="card p-0">
          <a href="#">
            <img class="card-img-top" src="../images/city_4_chambres.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">City</h4>
              <p class="card-text description">Maison 2,3 ou 4 chambres</p>
              <p class="card-text">A partir de 68m²</p>
            </div>
          </a>
        </div>
        <div class="card  p-0 text-center text-light" id="financement">
          <img class="card-img-top" src="../images/imgfinancerprojet.jpg" alt="Card image">
          <div class="card-img-overlay pt-4">
            <p class="card-text">Comment financer <br> mon projet ?</p>
            <a href="#" class="btn btn-link">+ d'infos</a>
          </div>
        </div>
        <div class="card ">
          <a href="#">
            <img class="card-img-top" src="../images/armenia_3_chambres.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Armenia</h4>
              <p class="card-text description">Maison 3 chambres+bureau</p>
              <p class="card-text">104m²</p>
            </div>
          </a>
        </div>
        <div class="card ">
          <a href="#">
            <img class="card-img-top" src="../images/bolzano_3_chambres.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Bolzano</h4>
              <p class="card-text description">Maison 3 chambres</p>
              <p class="card-text">104m²</p>
            </div>
          </a>
        </div>
        <div class="card ">
          <a href="#">
            <img class="card-img-top" src="../images/auze_3_chambres.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Azure</h4>
              <p class="card-text description">Maison 3 chambres</p>
              <p class="card-text">97m²</p>
            </div>
          </a>
        </div>
      </div>
      <button type="button" class="btn btn-outline-dark pr-4 pl-4 bold">En voir +</button>
    </section>
  </main>
  <footer>
  </footer>
</body>

</html>