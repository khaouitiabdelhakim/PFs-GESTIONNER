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

                      <h5 style="margin-bottom:25px;">Voilà le sujet affecté à vous</h5>
                      
                  <div class="card">
                    <div style="background-color:#00b4cc; color:white;" class="card-header">
                      Notre Projet
                    </div>
                    <div style="background-color:#f5f9fa; " class="card-body">
                      <h5 class="card-title">Une Application Web de Gestion de stock</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In cupiditate eaque quas debitis ipsa tempora explicabo nesciunt ut ab sapiente repellat officiis modi similique deleniti quae dolorem, veritatis unde cumque ducimus? Consequuntur ad facere a nisi perspiciatis, quis, esse sit illo nihil natus praesentium soluta dolorum explicabo molestias ab omnis ut iure cumque sint eius? Nihil sit commodi quas temporibus.</p>
         
                    </div>
                  </div>
                  <h5 style="margin-bottom:25px;">Voilà des remarques utiles de votre prof pour vous</h5>

                  <div class="card">
                  <div style="background-color:#f55e00; color:white;" class="card-header">
                  Quel langage de programmation est recommandé pour implémenter ce projet ?
                    </div>
                    <div style="background-color:#f5f9fa; " class="card-body">
                      <p class="card-text">Le choix du langage de programmation dépend de vos préférences et des technologies utilisées dans votre environnement. Cependant, des langages couramment utilisés pour la gestion de bases de données distribuées sont Java et Python. Java offre une bonne performance et de nombreuses bibliothèques pour la gestion des bases de données, tandis que Python est connu pour sa facilité d'utilisation et sa flexibilité.</p>
        
                    </div>
                  </div>

                  <div class="card">
                  <div style="background-color:#f55e00; color:white;" class="card-header">
                  Quels liens utiles peut-on utiliser pour aborder ce projet ?
                    </div>
                    <div style="background-color:#f5f9fa; " class="card-body">
                      <p class="card-text">Voici quelques ressources utiles pour vous aider à aborder ce projet de gestion de bases de données distribuées :

Documentation officielle de Java : https://docs.oracle.com/javase/ - Elle fournit des informations détaillées sur les fonctionnalités de Java, y compris la manipulation des bases de données.
Documentation officielle de Python : https://docs.python.org/ - Vous y trouverez des informations sur la programmation Python et les bibliothèques couramment utilisées pour la gestion des bases de données.
Livre "Distributed Database Systems" de Stefano Ceri et Giuseppe Pelagatti - Ce livre est une référence précieuse pour comprendre les concepts et les défis liés aux bases de données distribuées.</p>
        
                    </div>
                  </div>

                  <div class="card">
                  <div style="background-color:#f55e00; color:white;" class="card-header">
                  Quels sont les principaux défis à prendre en compte lors de la conception d'un système de gestion de bases de données distribuées ?
                    </div>
                    <div style="background-color:#f5f9fa; " class="card-body">
                      <p class="card-text"> La conception d'un système de gestion de bases de données distribuées peut présenter plusieurs défis, notamment :

La répartition efficace des données sur les serveurs pour garantir une utilisation équilibrée des ressources.
La synchronisation des données entre les différents nœuds pour maintenir la cohérence.
La gestion des pannes et la récupération en cas d'erreur pour assurer la disponibilité des données.
Les performances et la minimisation des temps de latence lors des requêtes distribuées.
La sécurité des données lors de leur transfert et de leur stockage sur des serveurs distants.</p>
        
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