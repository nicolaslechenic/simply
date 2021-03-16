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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/761d77ec55.js" crossorigin="anonymous"></script>
  <title>Simply Home</title>
</head>

<body class="conatiner-fluid">
  <header>
    <div id="top-nav">
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
            <!-- Modal footer -->
          </div>
        </div>
      </div>
    </div>
      <div class="container-fluid d-flex align-items-end" id="header-main-nav">
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
              <ul class="navbar-nav align-items-end m-2">
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>    
              </ul>
            </div>  
          </nav>
        </div>

      </div>
  </header>

</body>

</html>