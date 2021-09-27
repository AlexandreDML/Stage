<!DOCTYPE html>
<html>
  <head>
    <title>Archives BUT Métiers du Multimédia et de l'Internet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body id="linear-gradient">
    <nav class="navbar navbar-expand-sm navbar-dark">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="./index.php">UNIVERSITÀ DI CORSICA</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#">Étudiants</a></li>
            <li class="nav-item">
            <a class="nav-link" href="#">Personnels</a></li>
            <li class="nav-item">
            <a class="nav-link" href="#">Recherche</a></li>
            <li class="nav-item">
            <a class="nav-link" href="#">Partenaires Pro</a></li>
            <li class="nav-item">
            <a class="nav-link" href="#">Fondation</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="jumbotron" id="pic">
    </div>
    <div class="container text-center" id="title">
      <h1>ARCHIVES</h1>
      <h4>Projets tutorés/rapports de stages du BUT MMI</h4>
    </div>
    <div class="container text-center">
      <div class="btn-group" id="TC">
        <button type="button" class="btn btn-info btn-lg" href="" onclick="document.getElementById('PT').style.display='block'; document.getElementById('RS').style.display='none'">Projets tutorés</button>
        <button type="button" class="btn btn-secondary btn-lg" href="" onclick="document.getElementById('RS').style.display='block'; document.getElementById('PT').style.display='none'">Rapports de stages</button>
      </div>
    </div>
    <br>
    <a href="formulaire.html">
      <button type="button" class="btn btn-warning btn-lg">Nouveau rapport</button>
    </a>
    <br>
    <br>
    <div class="form-group has-search">
      <input class="form-control" id="myInput" type="text" placeholder="Rechecher" >
    </div>
    <br>
    <div class="container-fluid text-center">
      <div id="PT" class="Element"><br>
        <div class="container">
          <table class="table table-bordered">
              <tbody id='table'>
                    <?php include 'Projet_tutoré.php';?>
              </tbody>
          </table>
        </div>
      </div>
      <div id="RS" class="Element" style="display:none;"><br>
        <div class="container">
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <form action="" method="GET">

                </form>
              </tr>
            </thead>
            <tbody id='table'>
              <?php include 'Stage.php';?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <footer>
      <br>
    </footer>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
