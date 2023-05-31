<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{!! url('styles/assets/images/logos/favicon.png') !!}" />
  <link rel="stylesheet" href="{!! url('styles/assets/css/styles.min.css') !!}" />
  
  <style>
    body {
      margin-top: 50px; /* Espacement vers le bas */
      text-align: center; /* Centrer le contenu du corps */
    }
      
    h1 {
      margin-top: 20px;
      color: #fff;
      font-size: 24px;
      font-weight: bold;
    }

  </style>
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- the sidebar -->
    @include('dashboard.professor.src.html.sidebar')

    <!-- Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
     
      @include('dashboard.professor.src.html.header')
     

      <div class="container-fluid">
      <h1 style="margin-bottom: 30px;">Bonjour M. {{$professor->last_name}}</h1>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Taches
              </div>
              <div class="card-body">
                <h5 class="card-title">Détails et suivi des taches attribués aux élèves.</h5>
                <a href="{{ url('/professor/tache') }}" class="btn btn-primary">Voir plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Groupes
              </div>
              <div class="card-body">
                <h5 class="card-title">Rôles et tâches assignées au groupe</h5>
                <a href="{{ url('/professor/groupe') }}"class="btn btn-primary">Voir plus</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Sujets
              </div>
              <div class="card-body">
                <h5 class="card-title">Exploration des sujets ajoutés</h5>
                <a href="{{ url('/professor/sujet') }}" class="btn btn-primary">Voir plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Grilles
              </div>
              <div class="card-body">
                <h5 class="card-title">Évaluation des performances des élèves avec une grille de notation.</h5>
                <a href="{{ url('/professor/grille') }}" class="btn btn-primary">Voir plus</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{!! url('styles/assets/libs/jquery/dist/jquery.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! url('styles/assets/js/sidebarmenu.js') !!}"></script>
  <script src="{!! url('styles/assets/js/app.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/apexcharts/dist/apexcharts.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/simplebar/dist/simplebar.js') !!}"></script>
  <script src="{!! url('styles/assets/js/dashboard.js') !!}"></script>
</body>

</html>
