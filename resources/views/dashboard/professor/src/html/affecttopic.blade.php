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
      @include('dashboard.professor.src.html.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
    @include('dashboard.professor.src.html.header')

      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="col-lg-12">
  <div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">Affectations des projets & professeurs </h5>
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">ID du groupe</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Nom du groupe</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Filière</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Niveau</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Affectations</h6>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($groups as $group)
            <tr>
              <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$group->id}}</h6></td>
              <td class="border-bottom-0">
                <h6 class="fw-semibold mb-1">{{$group->name}}</h6>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{$group->sector}}</p>
              </td>
              <td class="border-bottom-0">
                <div class="d-flex align-items-center gap-2">
                  <span class="badge bg-primary rounded-3 fw-semibold">{{$group->level}}</span>
                </div>
              </td>
              <td class="border-bottom-0">
                <a href="affectprojet/{{$group->id}}" class="btn btn-info">Affecter</a>
              </td>
            </tr> 
            @endforeach

            <!-- Ajouter les autres lignes similaires pour les autres projets -->
            <!-- ... -->
          </tbody>
        </table>
      </div>

      
    </div>
    </div>
    <div class="card w-100">
    <div style="marging-top:30px;" class="card-body p-4">
    <h5 class="card-title fw-semibold mb-4">Affectations Traitées </h5>
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">ID du groupe</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Nom du groupe</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Filière</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Niveau</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Affectations</h6>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($done_groups as $done_group)
            <tr>
              <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$done_group->id}}</h6></td>
              <td class="border-bottom-0">
                <h6 class="fw-semibold mb-1">{{$done_group->name}}</h6>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{$done_group->sector}}</p>
              </td>
              <td class="border-bottom-0">
                <div class="d-flex align-items-center gap-2">
                  <span class="badge bg-primary rounded-3 fw-semibold">{{$done_group->level}}</span>
                </div>
              </td>
              <td class="border-bottom-0">
                <a href="affectprojet/{{$done_group->id}}" class="btn btn-warning">Editer</a>
              </td>
            </tr> 
            @endforeach

            <!-- Ajouter les autres lignes similaires pour les autres projets -->
            <!-- ... -->
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