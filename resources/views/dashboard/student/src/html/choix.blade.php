<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{!! url('styles/assets/images/logos/favicon.png') !!}" />
  <link rel="stylesheet" href="{!! url('styles/assets/css/styles.min.css') !!}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
      <!-- the side bar -->
      @include('dashboard.student.src.html.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
    @include('dashboard.student.src.html.header')

      <div class="container-fluid">
        <!--  Row 1 -->

                      <h5 style="margin-bottom:25px;">Voilà la liste des sujets que nous avons choisi</h5>
                      
                  <div class="card">
                    <div class="card-header">
                      GL
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Une Application Web de Gestion de stock</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In cupiditate eaque quas debitis ipsa tempora explicabo nesciunt ut ab sapiente repellat officiis modi similique deleniti quae dolorem, veritatis unde cumque ducimus? Consequuntur ad facere a nisi perspiciatis, quis, esse sit illo nihil natus praesentium soluta dolorum explicabo molestias ab omnis ut iure cumque sint eius? Nihil sit commodi quas temporibus.</p>
                  
                  <button type="button" class="btn btn-outline-danger m-1">Abandonner</button>
                    </div>
                  </div>

                  
                  <h5 style="margin-bottom:25px;">Voilà la liste des sujets disponibles. N'hésitez pas à choisir le sujet qui vous intéresse le plus ou à demander plus de détails sur l'un d'entre eux !</h5>
                      
                      <div class="card">
                        <div class="card-header">
                          GL
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Développement d'une application mobile pour la gestion de tâches et de projets</h5>
                          <p class="card-text">Ce projet consiste à concevoir et développer une application mobile intuitive et conviviale permettant aux utilisateurs de gérer efficacement leurs tâches et projets. L'application devrait inclure des fonctionnalités telles que la création de tâches, la délégation, la planification, les rappels, la collaboration en équipe, et la génération de rapports.</p>
                          <button type="button" class="btn btn-outline-success m-1">Choisir</button>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header">
                          GL
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Mise en place d'un système de recommandation personnalisée pour un site e-commerce</h5>
                          <p class="card-text">Ce projet vise à créer un système de recommandation avancé pour un site de commerce électronique. L'objectif est de fournir aux utilisateurs des suggestions de produits personnalisées en se basant sur leur historique d'achat, leurs préférences et le comportement des utilisateurs similaires. Le système de recommandation devrait utiliser des techniques telles que le filtrage collaboratif, le traitement du langage naturel et l'apprentissage automatique.</p>
                          <button type="button" class="btn btn-outline-success m-1">Choisir</button>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header">
                          GL
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Conception et développement d'un système de gestion de bases de données distribuées</h5>
                          <p class="card-text">Ce projet porte sur la conception et la mise en œuvre d'un système de gestion de bases de données distribuées capable de gérer de grandes quantités de données réparties sur plusieurs serveurs. L'objectif est de permettre une répartition efficace des données, une tolérance aux pannes, une récupération en cas d'erreur et des performances optimales. Le projet peut impliquer l'utilisation de techniques telles que la réplication, la fragmentation et la synchronisation des données.</p>
                          <button type="button" class="btn btn-outline-success m-1">Choisir</button>
                        </div>
                      </div>

                  
      </div>
    </div>
  </div>

  <script src="{!! url('styles/assets/libs/jquery/dist/jquery.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! url('styles/assets/js/sidebarmenu.js') !!}"></script>
  <script src="{!! url('styles/assets/js/app.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/simplebar/dist/simplebar.js') !!}"></script>
 
</body>

</html>