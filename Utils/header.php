
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Content/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>Librairie V2</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg" style="background-color: #9AC8EB;">
      <div class="container-fluid">
        <a href="?controller=home&action=home" class="navbar-brand">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Livres</a>
              <ul class="dropdown-menu">
                <li><a href="?controller=livres&action=all_livres" class="dropdown-item">Toutes les livres</a></li>
                <li><a href="?controller=livres&action=livres_par_titre" class="dropdown-item">Par Titre</a></li>
                <li><a href="?controller=livres&action=livres_par_auteur" class="dropdown-item">Par Auteur</a></li>
                <li><a href="?controller=livres&action=livres_par_editeur" class="dropdown-item">Par Editeur</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Fournisseurs</a>
              <ul class="dropdown-menu">
                <li><a href="?controller=fournisseurs&action=all_fournisseurs" class="dropdown-item">Tout les fournisseurs</a></li>
                <li><a href="?controller=fournisseurs&action=fournisseurs_par_raison_sociale" class="dropdown-item">Par Raison Sociale</a></li>
                <li><a href="?controller=fournisseurs&action=fournisseurs_par_localite" class="dropdown-item">Par Localite</a></li>
                <li><a href="?controller=fournisseurs&action=fournisseurs_par_pays" class="dropdown-item">Par Pays</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Commandes</a>
              <ul class="dropdown-menu">
                <li><a href="?controller=commandes&action=all_commandes" class="dropdown-item">Toutes les commandes</a></li>
                <li><a href="?controller=commandes&action=commandes_par_editeur" class="dropdown-item">Par Editeur</a></li>
                <li><a href="?controller=commandes&action=commandes_par_fournisseurs" class="dropdown-item">Par Fournisseurs</a></li>
                <li><a href="?controller=commandes&action=commandes_par_date" class="dropdown-item">Par Date</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- <nav>
        <ul class="links">
            <li class="deroulant"><a class="liens" href="?controller=livres&action=all_livres">Livres </a>
            <ul class="sous">
              <li><a href="?controller=livres&action=all_livres">Tous les livres</a></li>
            </ul>
          </li>
          <li class="deroulant"><a class="liens" href="?controller=fournisseurs&action=all_fournisseurs">Fournisseurs</a>
            <ul class="sous">
              <li><a  href="?controller=fournisseurs&action=all_fournisseurs">Tous les Fournisseurs</a></li>
            </ul>
          </li>
            
          <li class="deroulant"><a class="liens" href="?controller=commandes&action=all_commandes">Commandes</a>
            <ul class="sous">
              <li><a  href="?controller=commandes&action=all_commandes">Toutes les commandes</a></li>
            </ul>
          </li>
          
    </nav> -->
  </header>
</body>
</html>