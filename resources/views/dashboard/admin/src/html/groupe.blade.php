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
      <h5 class="card-title fw-semibold mb-4">Ajouter un groupe</h5>
      <a href="addgrp" class="btn btn-primary">Ajouter un groupe</a>
    </div>
  </div>
</div>
        <div class="col-lg-12">
  <div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">les groupes disponibles </h5>
      <div class="d-flex justify-content-end mb-3">
        <div class="d-flex align-items-center gap-2">
          <select class="form-select" id="triGroupe">
            <option value="">Tous les groupes</option>
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
            <option value="1A">1A</option>
            <option value="2A">2A</option>
            <option value="3A">3A</option>
          </select>
          <button class="btn btn-primary" id="filtrer">Filtrer</button>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">ID du groupe</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Nom du Groupe</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Filière</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Niveau</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Membres</h6>
              </th>
              
            </tr>
          </thead>
          <tbody>

            <!-- Boucle de génération de lignes avec des données filtrées -->
            <!-- Remplacez cette partie avec votre code de génération dynamique selon les critères de filtrage -->
            @foreach($groups as $group)
            <tr class="groupe-item" data-filiere="Filière" data-niveau="Niveau">
              <td class="border-bottom-0">
                <h6 class="fw-semibold mb-0">
                  <a class="custom-link" href="uniquegrp"><i class="ti ti-edit"></i>{{$group->id}}</a>
                </h6>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{$group->name}}</p>
              </td>
              <td class="border-bottom-0">
                <div class="d-flex align-items-center gap-2">
                  <span class="badge bg-primary rounded-3 fw-semibold">{{$group->sector}}</span>
                </div>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{$group->level}}</p>
              </td>
              <td class="border-bottom-0">
                <div class="d-flex align-items-center gap-2">
                  <span class="badge bg-primary rounded-3 fw-semibold">{{$group->nb_etudiant}}</span>
                </div>
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