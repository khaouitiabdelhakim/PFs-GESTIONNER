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
      @include('dashboard.group.src.html.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
    @include('dashboard.group.src.html.header')

      <div class="container-fluid">
      <div class="row">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Project Overview</h5>
                  </div>
                  
                </div>
                <div class="card-group" style="display: flex;">
                <div style="float:left;" class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Projet</div>
                    @if(count($subject) > 0)
                    <div  class="card-body text-dark">
                      <h5 class="card-title">Titre</h5>
                      <p class="card-text">{{$subject[0]->title}}</p>
                    </div>
                    <div style="margin-top:0px;" class="card-body text-dark">
                      <h5 class="card-title">Description</h5>
                      <p class="card-text">{{$subject[0]->description}}</p>
                    </div>
                    @else
                    <div  class="card-body text-dark">
                      <h5 class="card-title">Titre</h5>
                      <p class="card-text">Sujet non encore affecté</p>
                    </div>
                    <div style="margin-top:0px;" class="card-body text-dark">
                      <h5 class="card-title">Description</h5>
                      <p class="card-text">Non encore disponible</p>  
                    </div>
                    @endif
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title fw-semibold">Date de soutenance</h5>
                    <p>le 13 Mai 2023</p>

                    <h5 class="card-title fw-semibold">Lieu de soutenance</h5>
                    <p>ENSIAS AMPHI 3</p>

                    <h5 class="card-title fw-semibold">Prof encadrant</h5>
                    @if(count($professor) > 0)
                      <p>M. {{ strtoupper($professor[0]->last_name) }} {{ ucfirst($professor[0]->first_name) }}</p>
                    @else
                    <p>Pas encore effecté</p>
                    @endif

                    <h5 class="card-title fw-semibold">Membres du groupe</h5>
                    @foreach($membres as $membre)
                    <p style="margin-bottom: 3px">{{ strtoupper($membre->last_name) }} {{ ucfirst($membre->first_name) }}</p>

                    @endforeach

                    <a style="margin-top:15px;" class="btn btn-outline-primary m-1" href="generate-pdf">
                    <svg style="margin-right:10px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                      <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                      <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                    </svg>

                      Générer Covocation PDF</a>

                    
                    
                  </div>
                </div>
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