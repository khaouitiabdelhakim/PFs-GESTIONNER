<!DOCTYPE html>
<html lang="en-US" class="no-js">
  <head>

    <!-- Title -->
    <title>PFs GESTIONNER - ENSIAS</title>
    
  

    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bootstrap HTML template and UI kit by Erilisdesign">

    <!-- Libs CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <link rel="stylesheet" href="{!! url('home/assets/vendor/fullPage.js/dist/jquery.fullpage.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! url('home/assets/vendor/slick/slick.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! url('home/assets/vendor/vegas/vegas.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! url('home/assets/vendor/magnific-popup/dist/magnific-popup.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! url('home/assets/vendor/animate.css/animate.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! url('home/assets/vendor/font-awesome/css/all.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! url('home/assets/vendor/themify-icons/css/themify-icons.css') !!}" type="text/css">


<!--    #########################"""""""#########################################################################"-->

<!--    #########################"""""""#########################################################################"-->
<style>
  body {
      font-family: 'Montserrat', sans-serif;
  }
</style>
    <link rel="stylesheet" href="{!! url('home/style.css') !!}" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;1,100;1,300&display=swap" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{!! url('home/assets/css/theme.css') !!}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! url('home/assets/css/custom.css') !!}">

    <!-- Favicon -->
    <link rel="icon" href="{!! url('home/assets/images/favicon.png') !!}" type="image/png">




  </head>
  <body class="layout-boxed">

    <!-- Loader -->
    <div class="loader bg-dark">
      <div class="spinner-grow text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <div id="top"></div>

    <!-- Site navigation -->
    <nav class="site-navbar site-navbar-transparent navbar navbar-expand-lg navbar-dark fixed-top bg-white shadow-light p-lg-4" data-navbar-base="navbar-dark" data-navbar-toggled="navbar-light" data-navbar-scrolled="navbar-light">

      <!-- Brand -->
<a class="navbar-brand" href="{!! url('home') !!}">
  <img src="{!! url('home/assets/images/blacklogo.png') !!}" class="navbar-brand-img" alt="">
</a>


      <!-- Toggler -->
      <button class="navbar-toggler-alternative" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-alternative-icon"></span>
      </button>

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <!-- Navigation -->
        <ul class="navbar-nav ml-auto" id="navigation">
          <li class="nav-item active" data-menuanchor="home">
            <a class="nav-link" href="#accueil>" style="font-family: 'Montserrat', sans-serif;">Accueil</a>
          </li>
          <li class="nav-item" data-menuanchor="what-we-do">
            <a class="nav-link" href="#apropos" style="font-family: 'Montserrat', sans-serif;">À propos</a>
          </li>
          <li class="nav-item" data-menuanchor="our-mission">
            <a class="nav-link" href="#filières"style="font-family: 'Montserrat', sans-serif;">Filières </a>
          </li>
          <li class="nav-item" data-menuanchor="our-mission">
            <a class="nav-link" href="#duprojet" style="font-family: 'Montserrat', sans-serif;">Du Projet </a>
          </li>
          
          
          <li class="nav-item" data-menuanchor="our-solutions">
            <a class="nav-link" href="#faq" style="font-family: 'Montserrat', sans-serif;">FAQ</a>
          </li>
          <li class="nav-item" data-menuanchor="contact">
            <a class="nav-link" href="#contact" style="font-family: 'Montserrat', sans-serif;">Contact</a>
          </li>
        </ul>

        <!-- Button -->
        <a class="btn btn-primary d-block d-lg-inline-block ml-lg-3" href="login" style="font-family: 'Montserrat', sans-serif;">se connecter</a>

      </div>
    </nav>

    <!-- Back To Top Button -->
    <a href="#top" class="backtotop">
      <span>Back To Top</span>
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Scroll progress -->
    <div class="scroll-progress">
      <div class="sp-left">
        <div class="sp-inner"></div>
        <div class="sp-inner progress"></div>
      </div>
      <div class="sp-right">
        <div class="sp-inner"></div>
        <div class="sp-inner progress"></div>
      </div>
    </div>

    <!-- Fullpage content -->
    <div class="ln-fullpage" data-navigation="true">

      <!-- Section - Home -->
      <section class="ln-section d-flex min-vh-100" data-anchor="home" data-tooltip="Home" data-ui="light" data-navbar="navbar-dark">
        <div class="overlay overlay-advanced">
          <div class="overlay-inner bg-image-holder bg-cover">
            <img src="{!! url('home/assets/images/firstimage.png') !!}" alt="background">
          </div>
          <div class="overlay-inner bg-dark opacity-70"></div>
        </div>
        <div class="container align-self-center text-center text-white">
          <div class="row">
            <div class="col-12 col-xl-9 mx-auto">

              <h1 class="mb-4" data-animation="fadeInUp" style="font-family: 'Montserrat', sans-serif;">ENSIAS</h1>
              <p class="mb-7 " data-animation="fadeInUp" data-animation-delay="200" style="font-family: 'Montserrat', sans-serif;">À la croisée de l'excellence, de l'innovation et de la passion, formant les leaders de demain dans le domaine de l'informatique</p>
              <a style="font-family: 'Montserrat', sans-serif;" href="/login" class="btn btn-primary mr-3 scrollto animated" data-animation="fadeInUp" data-animation-delay="400">se connecter</a>

            </div>
          </div>
        </div>
      </section>

      <!-- Section - Our mission -->
      <section class="ln-section d-xl-flex" data-anchor="apropos" data-tooltip="apropos" data-ui="dark" data-navbar="navbar-light">
        <div class="container align-self-xl-center">

          <div class="row">
            <div class="col-12 col-xl-6">
              <h2 class="mb-4 animated" data-animation="fadeInUp" data-animation-delay="150" style="font-family: 'Montserrat', sans-serif;">À propos</h2>
              <style>
    .animated {
        text-align: justify;
    }
</style>

<p class="animated" data-animation="fadeInUp" data-animation-delay="150" style="font-family: 'Montserrat', sans-serif;">
  Fondée en 1992, l'École Nationale Supérieure d'Informatique et d'Analyse des Systèmes (ENSIAS) est l'un des dix établissements de l'Université Mohammed V – Souissi. C'est une grande école d'ingénieurs spécialisée en Technologies de l'Information et de la Communication. Elle a pour missions la formation d'ingénieurs d'état et la recherche en vue du développement technologique et économique du Maroc.
</p>


<p class="animated" data-animation="fadeInUp" data-animation-delay="150" style="font-family: 'Montserrat', sans-serif;">  
    L'originalité de son cursus alliant compétences scientifiques et techniques, et ouverture sur l'entreprise en font une des écoles les plus prisées par les étudiants et les recruteurs. L'importance donnée à la pratique des projets permet aux diplômés de l'école d'aborder avec confiance le monde du travail et de prétendre rapidement à des postes de responsabilités dans les domaines les plus variés de la société de l'information.
</p>


            </div>
          </div>

        </div>
      </section>

      <!-- Section - Our solutions -->
<section class="ln-section d-xl-flex" data-anchor="filières" data-tooltip="filières" data-ui="light" data-navbar="navbar-dark">
  <div class="overlay overlay-advanced">
    <div class="overlay-inner bg-image-holder bg-cover">
      <img src="{!! url('home/assets/images/secondimage.png') !!}" alt="background">
    </div>
    <div class="overlay-inner bg-dark opacity-50"></div>
  </div>
  <div class="container">
    <!-- course -->
    <style>
      h1 {
        color: white;
      }
    </style>  
    <h1>Présentation des Filières</h1>
<div class="row">
  <div class="course-col">
    <h3 style="font-family: 'Montserrat', sans-serif;">Business Intelligence & Analytics</h3>
    <p style="font-family: 'Montserrat', sans-serif;">La filière Business Intelligence & Analytics forme des professionnels capables d'analyser et d'interpréter les données afin d'aider les entreprises à prendre des décisions éclairées pour améliorer leurs performances.</p>
  </div>
  <div class="course-col">
    <h3 style="font-family: 'Montserrat', sans-serif;">Génie de la Data</h3>
    <p style="font-family: 'Montserrat', sans-serif;">La filière Génie de la Data forme des experts en gestion, analyse et exploitation des données massives. Ils développent des compétences pour extraire des informations utiles à partir des données et les utiliser dans différents domaines.</p>
  </div>
  <div class="course-col">
    <h3 style="font-family: 'Montserrat', sans-serif;">Génie logiciel</h3>
    <p style="font-family: 'Montserrat', sans-serif;">La filière Génie logiciel forme des ingénieurs spécialisés dans la conception, le développement et la maintenance de logiciels. Ils acquièrent des compétences en programmation, en gestion de projets et en qualité logicielle.</p>
  </div>
</div>
<div class="row">
  <div class="course-col">
    <h3 style="font-family: 'Montserrat', sans-serif;">Ingénierie en Data Science and IOT</h3>
    <p style="font-family: 'Montserrat', sans-serif;" >La filière Ingénierie en Data Science and IOT forme des professionnels polyvalents capables de gérer, analyser et exploiter les données dans le contexte de l'Internet des objets. Ils développent des compétences en science des données et en technologies IoT.</p>
  </div>
  <div class="course-col">
    <h3 style="font-family: 'Montserrat', sans-serif;">Sécurité des Systèmes d’Information</h3>
    <p style="font-family: 'Montserrat', sans-serif;">La filière Sécurité des Systèmes d’Information forme des experts en cybersécurité. Ils apprennent à protéger les systèmes informatiques contre les attaques et à prévenir les risques liés à la sécurité des données.</p>
  </div>
  <div class="course-col">
    <h3 style="font-family: 'Montserrat', sans-serif;">Smart System Engineering</h3>
    <p style="font-family: 'Montserrat', sans-serif;">La filière Smart System Engineering forme des ingénieurs spécialisés dans la conception et l'optimisation des systèmes intelligents. Ils développent des compétences en ingénierie des systèmes embarqués, en intelligence artificielle et en IoT.</p>
  </div>
</div>
<div class="row">
  <div class="course-col">
    <h3 style="font-family: 'Montserrat', sans-serif;">Smart Supply Chain & Logistics</h3>
    <p style="font-family: 'Montserrat', sans-serif;">La filière Smart Supply Chain & Logistics forme des professionnels capables de gérer efficacement la chaîne d'approvisionnement et la logistique grâce à l'utilisation de technologies avancées telles que l'IA, l'IoT et l'analyse des données.</p>
  </div>
</div>

  </div>
</section>
<!---- section what we do -->
<section class="ln-section d-xl-flex bg-light" data-anchor="duprojet" data-tooltip="duprojet" data-ui="dark" data-navbar="navbar-light">
  <div class="container align-self-xl-center">

    <div class="row">
      <div class="col-12 col-xl-5 mb-8 mb-xl-0">
        <h2 class="animated mb-4" data-animation="fadeInUp" style="font-family: 'Montserrat', sans-serif;">Les Points Clés du Projet</h2>
        <p class="animated" data-animation="fadeInUp" data-animation-delay="150"><span>
        </span></p>
      </div>
      <div class="col-12 col-xl-6 offset-xl-1">
        <div class="row">

          <div class="col-md-6 col-sm-6 mb-8 animated" data-animation="fadeInUp">
            <div class="icon-7x text-primary mb-4">
              <i class="fa-solid fa-user-check"></i>

            </div>
            <h3 class="h4 mb-0" style="font-family: 'Montserrat', sans-serif;">Espace Professeur</h3>
          </div>

          <div class="col-md-6 col-sm-6 mb-8 animated" data-animation="fadeInUp" data-animation-delay="150">
            <div class="icon-7x text-primary mb-4">
              <i class="fa-solid fa-graduation-cap"></i>                  </div>
            <h3 class="h4 mb-0" style="font-family: 'Montserrat', sans-serif;">Espace Étudiant</h3>
          </div>

          <div class="col-md-6 col-sm-6 mb-8 animated" data-animation="fadeInUp" data-animation-delay="300">
            <div class="icon-7x text-primary mb-4">
              <i class="fa-solid fa-user-shield"></i>                  </div>
            <h3 class="h4 mb-0" style="font-family: 'Montserrat', sans-serif;">Espace Admin</h3>
          </div>

          <div class="col-md-6 col-sm-6 mb-8 animated" data-animation="fadeInUp" data-animation-delay="450">
            <div class="icon-7x text-primary mb-4">
              <i class="fa-solid fa-user-group"></i>
            </div>
            <h3 class="h4 mb-0" style="font-family: 'Montserrat', sans-serif;">Espace Groupe</h3>
          </div>

          <div class="col-md-6 col-sm-6 mb-8 mb-sm-0 animated" data-animation="fadeInUp" data-animation-delay="600">
            <div class="icon-7x text-primary mb-4">
              <i class="fa-solid fa-desktop"></i>                  </div>
            <h3 class="h4 mb-0" style="font-family: 'Montserrat', sans-serif;">Interface conviviale</h3>
          </div>

          <div class="col-md-6 col-sm-6 animated" data-animation="fadeInUp" data-animation-delay="750">
            <div class="icon-7x text-primary mb-4">
              <i class="fa-solid fa-users-gear"></i>                </div>
            <h3 class="h4 mb-0"style="font-family: 'Montserrat', sans-serif;">Flexibilité et extensibilité</h3>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>
<!----  end section what we do -->



      <!-- Section - Our work -->
      <section class="ln-section d-xl-flex" data-anchor="our-work" data-tooltip="Our work" data-ui="dark" data-navbar="navbar-light">
        <div class="container align-self-xl-center">
          <div class="row mb-8">
            <div class="col-12 col-xl-6">
              <h2 class="mb-4 animated" data-animation="fadeInUp" style="font-family: 'Montserrat', sans-serif;">Déroulement du projet</h2>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150" style="font-family: 'Montserrat', sans-serif;">Notre projet de gestion des projets fédérateurs se déroule selon une méthodologie rigoureuse et bien définie. Nous avons soigneusement planifié chaque étape pour assurer le succès de notre initiative. Du concept initial à la réalisation finale, nous suivons un parcours structuré et cohérent.</p>
            </div>
          </div>
          <div class="slider animated" data-animation="fadeInUp" data-animation-delay="300" data-slick='{"dots": true}'>

            <div>
              <div class="portfolio-item mb-8">
                <div class="row">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="assets/images/1.png" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover">
                            <img src="{!! url('home/assets/images/1.png') !!}" alt="" class="small-image">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5">
                    <div class="pt-lg-8">
                      <div class="divider divider-alt bg-dark mt-0 mb-8 d-none d-lg-block"></div>
                      <h4 class="h3 item-title" style="font-family: 'Montserrat', sans-serif;">Analyse des besoins et spécifications</h4>
                      <ul style="font-family: 'Montserrat', sans-serif;">
                        <li>Définissez les objectifs et les exigences de l'application web.</li>
                        <li>Identifiez les fonctionnalités nécessaires pour gérer les projets fédérateurs.</li>
                        <li>Réaliser le MCD</li>
                      </ul>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="portfolio-item mb-8">
                <div class="row flex-lg-row-reverse">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="assets/images/2.png" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover">
                            <img src="{!! url('home/assets/images/2.png') !!}" alt="">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5 d-lg-flex justify-content-lg-end text-lg-right">
                    <div class="pt-lg-8">
                      <div  class="divider divider-alt bg-dark mt-0 mb-8 ml-auto mr-0 d-none d-lg-block"></div>
                      <h4 class="h3 item-title" style="text-align: left;" style="font-family: 'Montserrat', sans-serif;">Conception de l'interface utilisateur </h4>
                      <ul style="text-align: left;" style="font-family: 'Montserrat', sans-serif;">
                        <li style="font-family: 'Montserrat', sans-serif;">Créez des maquettes ou des wireframes pour visualiser la structure et le flux de l'application.</li>
                        <li style="font-family: 'Montserrat', sans-serif;">Concevez l'architecture de l'information en définissant la hiérarchie des pages et des fonctionnalités.</li>
                        <li style="font-family: 'Montserrat', sans-serif;">Choisissez une palette de couleurs, des polices et des éléments visuels cohérents pour l'interface utilisateur.</li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="portfolio-item mb-8">
                <div class="row">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="assets/images/3.png" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover">
                            <img src="{!! url('home/assets/images/3.png') !!}" alt="">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5">
                    <div class="pt-lg-8">
                      <div class="divider divider-alt bg-dark mt-0 mb-8 d-none d-lg-block"></div>
                      <h4 class="h3 item-title" style="font-family: 'Montserrat', sans-serif;">Développement du front-end </h4>
                      
                      <ul style="text-align: left;" style="font-family: 'Montserrat', sans-serif;">                        <li style="font-family: 'Montserrat', sans-serif;">Divisez le projet en modules ou en composants réutilisables.</li>
                        <li style="font-family: 'Montserrat', sans-serif;">Utilisez les langages de programmation web tels que HTML, CSS et JavaScript pour mettre en œuvre l'interface utilisateur.</li>
                        <li style="font-family: 'Montserrat', sans-serif;">Assurez-vous que l'application est réactive et compatible avec différents navigateurs et appareils.</li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="portfolio-item mb-8">
                <div class="row flex-lg-row-reverse">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="assets/images/4.png" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover">
                            <img src="{!! url('home/assets/images/4.png') !!}" alt="">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5 d-lg-flex justify-content-lg-end text-lg-right">
                    <div class="pt-lg-8">
                      <div class="divider divider-alt bg-dark mt-0 mb-8 ml-auto mr-0 d-none d-lg-block"></div>
                      <h4 class="h3 item-title" style="font-family: 'Montserrat', sans-serif;">Intégration de fonctionnalités</h4>
                     
                      <ul  style="text-align: left;">
    <li style="font-family: 'Montserrat', sans-serif;">Implémentez les fonctionnalités nécessaires pour la gestion des projets fédérateurs, telles que la création de projets, l'assignation de tâches, la gestion des ressources, etc.</li>
    <li style="font-family: 'Montserrat', sans-serif;">Assurez-vous que l'application offre une expérience utilisateur intuitive et conviviale.</li>
    <li style="font-family: 'Montserrat', sans-serif;">Effectuez des tests fonctionnels pour vérifier que toutes les fonctionnalités sont opérationnelles.</li>
  </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="portfolio-item">
                <div class="row">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="assets/images/5.png" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover">
                            <img src="{!! url('home/assets/images/5.png') !!}" alt="">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5">
                    <div class="pt-lg-8">
                      <div class="divider divider-alt bg-dark mt-0 mb-8 d-none d-lg-block"></div>
                      <h4 class="h3 item-title" style="font-family: 'Montserrat', sans-serif;" >Intégration du contenu </h4>
                    
                      <ul style="font-family: 'Montserrat', sans-serif;">
                        <li>Ajoutez du contenu pertinent pour présenter votre projet de fin d'année.</li>
                        <li>Intégrez des visuels attrayants, tels que des images, des graphiques ou des vidéos, pour illustrer votre travail.</li>
                      </ul>                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>  
<!-- Section - owners -->
<section class="ln-section d-xl-flex" data-anchor="our-work" data-tooltip="Our work" data-ui="dark" data-navbar="navbar-light">
  <div class="container align-self-xl-center">
    <div class="row mb-8">
      <div class="col-12">
        <h2 class="mb-4 animated" data-animation="fadeInUp" style="font-family: 'Montserrat', sans-serif;">OWNERS</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 text-center">
        <div class="portfolio-item mb-8">
          <div class="item-media d-flex justify-content-center"> <!-- Ajout des classes "d-flex" et "justify-content-center" -->
            <a href="{!! url('home/assets/images/khaouiti.png') !!}" class="mfp-image">
              <img src="{!! url('home/assets/images/khaouiti.png') !!}" style="max-width: 100%; height: 500px;">
            </a>
          </div>
          <div class="pt-lg-8">
            <h4 class="h3 item-title" style="font-family: 'Montserrat', sans-serif;">KHAOUITI Abdelhakim</h4>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 text-center">
        <div class="portfolio-item mb-8">
          <div class="item-media d-flex justify-content-center"> <!-- Ajout des classes "d-flex" et "justify-content-center" -->
            <a href="{!! url('home/assets/images/anass.png') !!}" class="mfp-image">
              <img src="{!! url('home/assets/images/anass.png') !!}" style="max-width: 100%; height: 500px;">
            </a>  
          </div>
          <div class="pt-lg-8">
            <h4 class="h3 item-title" style="font-family: 'Montserrat', sans-serif;">BENGMAH Anasss</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Section - owners end -->


      <!-- faq -->
      <!-- section FAQ -->
<section class="ln-section d-xl-flex bg-light" data-anchor="faq" data-tooltip="faq" data-ui="dark" data-navbar="navbar-light">
  <div class="container align-self-xl-center">
    <div class="row">
      <div class="col-12 col-xl-10 offset-xl-1" style="font-family: 'Montserrat', sans-serif;"><strong>FAQ</strong></h2>
        <div class="accordion" id="faqAccordion">

          <!-- Question 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1"> <strong>Quels sont les objectifs du projet de fin d'année ? </strong></button>
            </h3>
            <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqCollapse1" data-bs-parent="#faqAccordion">
              <div class="accordion-body" style="font-family: 'Montserrat', sans-serif;">
                Les objectifs du projet de fin d'année sont de concevoir et de réaliser une application web pour la gestion des projets fédérateurs. L'application doit permettre aux utilisateurs de créer et de gérer des projets, d'assigner des tâches aux membres de l'équipe, de suivre l'avancement des projets et de collaborer efficacement.
              </div>
            </div>
          </div>

          <!-- Question 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2"><strong>Quelles fonctionnalités doit inclure l'application web ? </strong></button>
            </h3>
            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqCollapse2" data-bs-parent="#faqAccordion">
              <div class="accordion-body" style="font-family: 'Montserrat', sans-serif;">
                L'application web doit inclure des fonctionnalités telles que la création et la gestion des projets, la gestion des membres de l'équipe, la création et l'assignation de tâches, le suivi de l'avancement des projets, la gestion des documents et des fichiers, la communication et la collaboration entre les membres de l'équipe, etc.
              </div>
            </div>
          </div>

          <!-- Question 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3"> <strong>Quelles technologies seront utilisées pour le développement de l'application web ? </strong></button>
            </h3>
            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqCollapse3" data-bs-parent="#faqAccordion">
              <div class="accordion-body" style="font-family: 'Montserrat', sans-serif;">
                Le développement de l'application web sera basé sur les technologies web modernes telles que HTML, CSS, JavaScript pour le front-end. Pour le back-end, nous utiliserons un framework tel que Node.js ou Django, et une base de données relationnelle comme MySQL ou PostgreSQL. D'autres technologies et outils peuvent être utilisés en fonction des besoins du projet.
              </div>
            </div>
          </div>

          <!-- Question 4 -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4"> <strong>Comment se déroulera la phase de conception de l'application web ?</strong></button>
            </h3>
            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqCollapse4" data-bs-parent="#faqAccordion">
              <div class="accordion-body" style="font-family: 'Montserrat', sans-serif;">
                La phase de conception de l'application web se déroulera en plusieurs étapes. Tout d'abord, une analyse des besoins sera effectuée pour définir les fonctionnalités et les exigences du projet. Ensuite, des wireframes et des maquettes seront créés pour visualiser l'interface utilisateur et l'architecture de l'application. Enfin, une documentation détaillée sera produite, décrivant les choix de conception, l'organisation du code, etc.
              </div>
            </div>
          </div>

          <!-- Question 5 -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5"><strong>Comment assurer la qualité de l'application web développée ?</strong></button>
            </h3>
            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqCollapse5" data-bs-parent="#faqAccordion">
              <div class="accordion-body" style="font-family: 'Montserrat', sans-serif;">
                Pour assurer la qualité de l'application web développée, des tests unitaires, des tests d'intégration et des tests fonctionnels seront réalisés tout au long du processus de développement. Des pratiques de développement agiles seront également utilisées, avec des itérations régulières, des revues de code et des tests d'acceptation par les utilisateurs finaux. De plus, des mesures de sécurité seront mises en place pour protéger les données et prévenir les vulnérabilités.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- end section FAQ -->

      <!-- end  faq -->

      <section class="ln-section d-xl-flex bg-light" data-anchor="contact" data-tooltip="Contact" data-ui="dark" data-navbar="navbar-light">
        <div class="container align-self-center">
          <div class="row mb-7">
            <div class="col-12 col-xl-6">
              <h2 class="mb-4 animated" data-animation="fadeInUp" style="font-family: 'Montserrat', sans-serif;">Contact Us</h2>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150" style="font-family: 'Montserrat', sans-serif;">Découvrez notre application web innovante pour la gestion des projets fédérateurs et contactez-nous dès maintenant pour en savoir plus sur ses fonctionnalités et son potentiel pour votre organisation.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-5 mb-8 mb-lg-0">
              <div class="row">

                <div class="col-12 col-md-4 col-lg-6 mb-8 mb-md-0 mb-lg-5 animated" data-animation="fadeInUp" data-animation-delay="150">
                  <div class="icon-5x text-primary mb-4">
                    <i class="ti-mobile"></i>
                  </div>
                  <p class="mb-0" style="font-family: 'Montserrat', sans-serif;">(+212) 638267468<br/>
                  (+212) 600387695</p>
                </div>

                <div class="col-12 col-md-4 col-lg-6 mb-8 mb-md-0 mb-lg-5 animated" data-animation="fadeInUp" data-animation-delay="150">
                  <div class="icon-5x text-primary mb-4">
                    <i class="ti-location-pin"></i>
                  </div>
                  <p class="mb-0" style="font-family: 'Montserrat', sans-serif;"> Avenue Mohamed Ben Abdellah,Av.Regragui<br/>
                  Rabat</p>
                </div>

                <div class="col-12 col-md-4 col-lg-6 animated" data-animation="fadeInUp" data-animation-delay="150">
                  <div class="icon-5x text-primary mb-4">
                    <i class="ti-email"></i>
                  </div>
                  <p class="mb-0"><a href="mailto:support@example.com" class="text-dark" style="font-family: 'Montserrat', sans-serif;">support@pfsgestionner.ma</a><br/>
                </div>

              </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1 animated" data-animation="fadeInUp" data-animation-delay="150">
              <div class="contact-form">
                <form class="mb-0" id="cf" name="cf" action="include/sendemail.php" method="post" autocomplete="off">
                  <div class="form-row">

                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <input type="text" id="cf-name" name="cf-name"  style="font-family: 'Montserrat', sans-serif;" placeholder="Entrer votre nom" class="form-control required">
                      </div>
                    </div>

                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <input type="email" id="cf-email" name="cf-email"  style="font-family: 'Montserrat', sans-serif;" placeholder="Entrer votre email " class="form-control required">
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <input type="text" id="cf-subject" name="cf-subject" style="font-family: 'Montserrat', sans-serif;" placeholder="Objet" class="form-control">
                      </div>
                    </div>

                    <div class="col-12 mb-4">
                      <div class="form-group">
                        <textarea name="cf-message" id="cf-message" style="font-family: 'Montserrat', sans-serif;" placeholder="Votre message" class="form-control required" rows="7"></textarea>
                      </div>
                    </div>

                    <div class="col-12 d-none">
                      <input type="text" id="cf-botcheck" name="cf-botcheck" value="">
                    </div>

                    <input type="hidden" name="prefix" value="cf-">

                    <div class="col-12">
                      <button class="btn btn-primary" type="submit" id="cf-submit" name="cf-submit" style="font-family: 'Montserrat', sans-serif;">Envoyer un message</button>
                    </div>

                  </div>
                </form>
                <div class="contact-form-result"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>

    <!-- Footer -->
    <footer class="position-relative py-10 py-lg-12 bg-dark text-gray-500">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-12 col-xxl-10 mx-auto text-center">
            <img src="{!! url('home/assets/images/whitelogo.png') !!}" alt="Logo" style="max-width: 200px; margin-bottom: 20px;">
            <ul class="list-inline mb-5">
              <li class="list-inline-item mx-0">
                <a class="btn btn-icon btn-text-secondary text-gray-400" href="#" tabindex="0">
                  <i class="fab fa-facebook-f btn-icon-inner"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn btn-icon btn-text-secondary text-gray-400" href="#" tabindex="0">
                  <i class="fab fa-twitter btn-icon-inner"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn btn-icon btn-text-secondary text-gray-400" href="#" tabindex="0">
                  <i class="fab fa-linkedin-in btn-icon-inner"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn btn-icon btn-text-secondary text-gray-400" href="#" tabindex="0">
                  <i class="fab fa-dribbble btn-icon-inner"></i>
                </a>
              </li>
            </ul>
            <p class="mb-0" style="font-family: 'Montserrat', sans-serif;">© 2023 PFS Gestionner  Made With By BENGMAH Anass & KHAOUITI ABDELHAKIM - All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer><!-- footer end -->

    <!-- Fullpage - Social icons -->
    <nav class="ln-social-icons">
      <ul class="mx-auto">
        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#!"><i class="fab fa-pinterest"></i></a></li>
      </ul>
    </nav>

    <!-- Fullpage - Copyright -->
    <div class="ln-copyright text-right">
      <p>© 2023 PFS Gestionner - All Rights Reserved - <a href="#!">Terms of Service</a></p>
    </div>

    <!-- Documentation Modal -->
    <div class="modal fade" id="documentationModal" tabindex="-1" role="dialog" aria-labelledby="documentation" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content hover-parent">

          <!-- Button Close -->
          <button type="button" class="btn btn-sm btn-icon btn-primary position-absolute top-0 right-0 mt-n3 mr-n3 zindex-1" data-dismiss="modal" aria-hidden="true">
            <i class="fas fa-times btn-icon-inner"></i>
          </button>

          <!-- Modal Body -->
          <div class="modal-body py-5 py-lg-8 px-5 px-lg-8 text-center">

            <div class="icon icon-boxed icon-7x rounded bg-soft-primary text-primary mb-8">
              <i class="ti-book"></i>
            </div>
            <h2 id="documentation" class="mb-3">Documentation</h2>
            <p class="mb-8">This theme is easy to configure and comes witch a well documented help file, which will assist you in the configuration of your new website in few minutes.</p>

            <!-- Button -->
            <a class="btn btn-primary d-block d-lg-inline-block" href="!#">Buy theme</a>

          </div>

        </div>
      </div>
    </div>

	<!-- Subscribe Modal -->
    <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeNewsletter" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content hover-parent">

          <!-- Button Close -->
          <button type="button" class="btn btn-sm btn-icon btn-white position-absolute top-0 right-0 mt-n3 mr-n3 zindex-1" data-dismiss="modal" aria-hidden="true">
            <i class="fas fa-times btn-icon-inner"></i>
          </button>

          <!-- Overlay -->
          <div class="overlay overlay-advanced">
            <div class="overlay-inner bg-cover" style="background-image: url('assets/images/image-12.jpg');"></div>
            <div class="overlay-inner bg-primary opacity-70 hover-opacity-80"></div>
            <div class="overlay-inner bg-gradient-v-transparent-dark opacity-90 hover-opacity-80"></div>
          </div>

          <!-- Modal Body -->
          <div class="modal-body py-5 py-lg-8 px-5 px-lg-8 text-white text-center">

            <h2 id="subscribeNewsletter" class="mb-4">Subscribe<br/> to our newsletter</h2>
            <p class="mb-7 mb-lg-10">Signup for our weekly newsletter to get the latest news, updates and amazing offers delivered directly in your inbox.</p>
            <div class="subscribe-form">
              <form id="sf" name="sf" action="include/subscribe.php" method="post">
                <div class="form-process"></div>
                <div class="form-group">
                  <input type="email" id="sf-email" name="sf-email" placeholder="Enter Your Email Address" class="form-control required">
                </div>
                <input type="text" id="sf-botcheck" name="sf-botcheck" value="" class="form-control d-none">
                <button class="btn btn-soft-white btn-block" type="submit" id="sf-submit" name="sf-submit">Notify Me</button>
              </form>
              <div class="subscribe-form-result"></div>
            </div>

          </div>

        </div>
      </div>
    </div>

    <!-- Libs JS -->
  <script src="{!! url('home/assets/vendor/jquery/dist/jquery.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/popper.js/dist/popper.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/fullPage.js/dist/scrolloverflow.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/fullPage.js/dist/jquery.fullpage.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/waypoints/lib/jquery.waypoints.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/jquery-smooth-scroll/jquery.smooth-scroll.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/jquery-validation/dist/jquery.validate.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/jquery-form/dist/jquery.form.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/jQuery.countdown/dist/jquery.countdown.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/granim.js/dist/granim.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/slick/slick.min.js') !!}"></script>
  <script src="{!! url('home/assets/vendor/vegas/vegas.min.js') !!}"></script>

  <!-- Theme JS -->
  <script src="{!! url('home/assets/js/main.js') !!}"></script>


  </body>
</html>