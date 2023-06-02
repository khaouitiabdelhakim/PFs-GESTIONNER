<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Title -->
  <title>PFs GESTIONNER - ENSIAS</title>
  <link rel="shortcut icon" type="image/png" href="{!! url('styles/assets/images/logos/favicon.png') !!}" />
  <link rel="stylesheet" href="{!! url('styles/assets/css/styles.min.css') !!}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
      <!-- the side bar -->
      @include('dashboard.professor.src.html.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
    @include('dashboard.professor.src.html.header')

      <div class="container-fluid">
        <!--  Row 1 -->

        <div class="card-body">
  <h5 class="card-title fw-semibold mb-4">Informations du groupe</h5>
  <div class="card">
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label for="groupName" class="form-label">Nom du groupe</label>
          <input value="nom du groupe" type="text" class="form-control" id="groupName" readonly>
        </div>
        <div class="mb-3">
          <label for="projectList" class="form-label">Projets accordés au groupe</label>
          <input class="form-control" id="projectList" value="Une Application Mobile de Suivi des Activités Sportives" readonly> 
        </div>
        <div class="mb-3">
          <label for="email1" class="form-label">Email du membre 1</label>
          <input value="someone1@um5.ac.ma" type="email" class="form-control" id="email1" readonly>
        </div>
        <div class="mb-3">
          <label for="email2" class="form-label">Email du membre 2</label>
          <input value="someone2@um5.ac.ma" type="email" class="form-control" id="email2" readonly>
        </div>
      </form>
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
  <script src="{!! url('styles/assets/libs/simplebar/dist/simplebar.js') !!}"></script>
 
</body>

</html>