<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site MIMDS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" 
    src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v19.0">
  </script>



<?php include("php/navbar.php"); ?>

<header class="d-flex align-items-center justify-content-center text-center" style="height: 1000px; background: url('img/banner.jpg') center/cover no-repeat;">
  <div>
    <h1>Bienvenue au Ministère International Maisonnée des Sanctifiés</h1>
    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <a href="contact.php" class="btn btn-primary mt-3">Rejoignez-nous</a>
  </div>
</header>

<section class="py-5 text-center">
  <div class="container">
    <h2>Présentation</h2>
    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum. </p>
  </div>
</section>

<!-- Section Actus & Réseaux -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <h2>Nos Réseaux</h2>
    <p class="mb-4">Suivez nos actualités sur Facebook, YouTube et Instagram.</p>

    <div id="socialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- === Slide 1 : Facebook === -->
        <div class="carousel-item active">
          <div class="d-flex justify-content-center">
            <div class="fb-page"
              data-href="https://www.facebook.com/profile.php?id=61579963075914"
              data-tabs="timeline"
              data-width="500"
              data-height="600"
              data-small-header="false"
              data-adapt-container-width="true"
              data-hide-cover="false"
              data-show-facepile="true">
            </div>
          </div>
        </div>

        <!-- === Slide 2 : YouTube === -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center py-4">
            <script src="https://elfsightcdn.com/platform.js" async></script>
            <div class="elfsight-app-6382d7bf-01f7-488c-9fa2-18aedfabbdc3" data-elfsight-app-lazy></div>
          </div>
        </div>

        <!-- === Slide 3 : Instagram === -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center py-4">
            <script src="https://elfsightcdn.com/platform.js" async></script>
            <div class="elfsight-app-2c23da75-1d5c-4463-850a-7d355dd3825f" data-elfsight-app-lazy></div>
          </div>
        </div>

      </div>

      <!-- Contrôles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#socialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Précédent</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#socialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Suivant</span>
      </button>

    </div> 
  </div>
</section>



<?php include("php/footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
