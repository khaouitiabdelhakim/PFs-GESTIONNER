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
        <div class="col-lg-12">
  <div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">Voici les groupes que vous encadrez</h5>
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">ID du groupe</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">NOM du group</h6>
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
            @foreach($groups as $group)
            <tr>
              <td class="border-bottom-0" ><h6  class="fw-semibold mb-0">
              <a class="custom-link" href="uniquegroupe">{{$group->id}}</a>

              </h6></td>
              <td class="border-bottom-0">
                <h6 class="fw-semibold mb-1">
                  <a class="custom-link" href="uniquesujet">{{$group->name}}</a>
                </h6>
              </td>
              <td class="border-bottom-0">
                <p class="mb-0 fw-normal">{{$group->sector}}</p>
              </td>
              <td class="border-bottom-0">
                <div class="d-flex align-items-center gap-2">
                  <span class="badge bg-primary rounded-3 fw-semibold">{{$group->level}}</span>
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