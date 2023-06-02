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
      @include('dashboard.admin.src.html.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
    @include('dashboard.admin.src.html.header')

      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="col-lg-12 mt-4">
  <div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">Ajouter un étudiant</h5>
      <a href="addstudent" class="btn btn-primary">Ajouter un étudiant</a>
    </div>
  </div>
</div>

<div class="col-lg-12">
  <div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">Les étudiants disponibles</h5>
      <div class="d-flex justify-content-end mb-3">
        <div class="d-flex align-items-center gap-2">
          <select class="form-select" id="triFiliere">
            <option value="">Toutes les filières</option>
            <option value="BI&A">BI&A</option>
            <option value="GD">GD</option>
            <option value="GL">GL</option>
            <option value="IDSIT">IDSIT</option>
            <option value="SSI">SSI</option>
            <option value="SSE">SSE</option>
            <option value="2SCL">2SCL</option>
          </select>
          <select class="form-select" id="triNiveau">
            <option value="">Tous les niveaux</option>
            <option value="Niveau 1">Niveau 1</option>
            <option value="Niveau 2">Niveau 2</option>
            <option value="Niveau 3">Niveau 3</option>
            <option value="Niveau 4">Niveau 4</option>
          </select>
          <button class="btn btn-primary" id="filtrer">Filtrer</button>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">ID de l'étudiant</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Nom</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Prénom</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Email</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Filière</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Niveau</h6>
              </th>
            </tr>
          </thead>
          <tbody>
            <!-- Boucle de génération de lignes avec des données filtrées -->
            <!-- Remplacez cette partie avec votre code de génération dynamique selon les critères de filtrage -->
           
            @foreach($students as $student)

            <tr class="etudiant-item" data-filiere="Filière" data-niveau="Niveau">
              <td class="border-bottom-0">
                <h6 class="fw-semibold mb-0">
                  <a class="custom-link"  href="uniquestudent/{{$student->id}}"><i class="ti ti-edit"></i>{{ $student->id }}</a>
                </h6>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{ $student->last_name }}</p>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{ $student->first_name }}</p>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{ $student->email }}</p>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{ $student->sector }}</p>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{ $student->level }}</p>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
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
  <script src="{!! url('styles/assets/libs/simplebar/dist/simplebar.js') !!}"></script>
 
</body>

</html>