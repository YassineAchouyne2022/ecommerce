<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OrdiShop</title>
  <link rel="icon" href="image/pc-monitor.png">
  <link rel="stylesheet" href="css/indexcss.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/ee309550fb.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/blog.css">
</head>
<>
  <!-- راسية الموقع -->
  <header>
    <nav>
      <div class="nav-bar">
        <i class='bx bx-menu sidebarOpen'></i>
        <span class="logo navLogo"><a href="#">OrdiShop</a></span>

        <div class="menu">
          <div class="logo-toggle">
            <span class="logo"><a href="#">OrdiShop</a></span>
            <i class='bx bx-x siderbarClose'></i>
          </div>
          <ul class="nav-links">
            <li><a href="index.php" id="">Home</a></li>
            <li><a href="nos-ordinatour.php">Nos ordinateur</a></li>
            <li><a href="nos-coffrets.php">Nos Couffre</a></li>
            <li class="this"><a href="nos-fourmisseurs.php">Nos Fornisseur</a></li>
            <li><a href="qui-sommes.php">Qui sommes Nous</a></li>
            <li><a href="blog.php">blog</a></li>
            <li><a href="mon-compte.php">Espace Client</a></li>
          </ul>
        </div>

        <div class="darkLight-searchBox">
          <div class="searchBox">
            <div class="searchToggle">
              <i class='bx bx-x cancel'></i>
              <i class='bx bx-search search'></i>
            </div>
            <form class="search-field">
              <input type="text" placeholder="Search..." id="search">
              <i class='bx bx-search' onclick="search()"></i>
            </form>
          </div>
          <div class="panier">
            <i class="fa-solid fa-cart-shopping"></i><span id="panier">0</span>
          </div>
        </div>
      </div>
      <script src="js/serch.js"></script>
    </nav>
  </header>
  <main class="main">
    <div class="container-m">
      <div class="blog">
        <h2 class="h2" style="color:#9e121b">Nos Fornisseur</h2>
        <div class="blog-card-group">
          <article class="blog-card">

            <div class="blog-card-banner">
              <img src="image/hp.png" alt="Building microservices with Dropwizard, MongoDB & Docker" width="250"
                class="blog-banner-img">
            </div>
            <div class="blog-content-wrapper">

              <h3>
                <a href="#" class="h3">
                  Marque HP
                </a>
              </h3>

              <p class="desc">
                HP (Hewlett-Packard) est une Marque multinationale américaine d’électronique et
                d'informatique qui fabricante et spécialiste en informatique, les imprimantes, les serveurs et réseaux,
                le logiciel et le multimédia.
              </p>
            </div>
          </article>
          <article class="blog-card">
            <div class="blog-card-banner">
              <img src="image/asus.png" alt="Building microservices with Dropwizard, MongoDB & Docker" width="250"
                class="blog-banner-img">
            </div>

            <div class="blog-content-wrapper">

              <h3>
                <a href="#" class="h3">
                  Marque ASUS
                </a>
              </h3>

              <p class="desc">
                Liste de produits de la marque Asus disponibles chez OrdiShop : PC Portable, Ecran et
                autres articles de bonne qualité à prix raisonnable.
              </p>
            </div>
          </article>


          <article class="blog-card">

            <div class="blog-card-banner">
              <img src="image/dell.png" alt="Building microservices with Dropwizard, MongoDB & Docker" width="250"
                class="blog-banner-img">
            </div>

            <div class="blog-content-wrapper">

              <h3>
                <a href="#" class="h3">
                  Marque DELL
                </a>
              </h3>

              <p class="desc">
                Liste de produits de la marque Dell disponibles chez OrdiShop : PC portable, Ordinateur bureau, Serveur,
                Ecran,
                Moniteur, Barrette mémoire, unité centrale, consommable pour imprimante et autres articles de bonne
                qualité à prix raisonnable.
              </p>
            </div>
          </article>

        </div>
      </div>
    </div>
  </main>

  <?php include "inc/footer.php" ?>