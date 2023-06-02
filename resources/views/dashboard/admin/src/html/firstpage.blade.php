<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Title -->
  <title>PFs GESTIONNER - ENSIAS</title>
  <link rel="shortcut icon" type="image/png" href="{!! url('styles/assets/images/logos/favicon.png') !!}" />
  <link rel="stylesheet" href="{!! url('styles/assets/css/styles.min.css') !!}" />
  @push('styles')
    <!--  le lien vers Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  @endpush
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
    @include('dashboard.admin.src.html.sidebar')

    <!-- Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
      <header>
        @include('dashboard.admin.src.html.header')
      </header>

      <div class="container-fluid">
      <h1 style="margin-bottom: 30px;">Bonjour Admin</h1>
       
         <!-- ######################################################################## -->
         <div class="row">
  <div class="col-lg-7">
    <!-- Groupe -->
    <div class="card mb-9">
      <div class="card-header">
        <h6 class="card-subtitle mb-2 text-muted">
          Groupe <span class="badge bg-info">0</span>
        </h6>
      </div>
      <div class="card-body">
        <h5 class="card-title">Groupe</h5>
        <p class="card-text">Description du groupe.</br></br></br></br></br></br>
        </br></br></br></br></br></br></br></p>
        <a href="groupe" class="btn btn-primary">Voir plus</a>
      </div>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="row">
      <div class="col-lg-12">
        <!-- Professeur -->
        <div class="card">
          <div class="card-header">
            <h6 class="card-subtitle mb-2 text-muted">
              Professeur <span class="badge bg-info">15</span>
            </h6>
          </div>
          <div class="card-body">
            <h5 class="card-title">Professeur</h5>
            <p class="card-text">Description du professeur.</p>
            <a href="prof" class="btn btn-primary">Voir plus</a>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <!-- Etudiant -->
        <div class="card">
          <div class="card-header">
            <h6 class="card-subtitle mb-2 text-muted">
              Etudiant <span class="badge bg-info">20</span>
            </h6>
          </div>
          <div class="card-body">
            <h5 class="card-title">Etudiant</h5>
            <p class="card-text">Description de l'étudiant.</p>
            <a href="etu" class="btn btn-primary">Voir plus</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Générer des nombres aléatoires pour les compteurs
  var groupCounter = Math.floor(Math.random() * 10) + 1;
  var professorCounter = Math.floor(Math.random() * 10) + 1;
  var studentCounter = Math.floor(Math.random() * 10) + 1;

  // Mettre à jour les compteurs dans les badges
  document.querySelector(".card:nth-child(1) .badge").textContent = groupCounter;
  document.querySelector(".card:nth-child(2) .badge").textContent = professorCounter;
  document.querySelector(".card:nth-child(3) .badge").textContent = studentCounter;
</script>


          <!-- ######################################################################## -->


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
