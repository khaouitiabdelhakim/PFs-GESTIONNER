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
        <div class="card">
          <div class="card-body">
          @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

          <form method="post" action="{{ route('add.subject') }}">
          @csrf
          <div class="mb-3">
                <label for="fieldSelect" class="form-label">Filière</label>
                <select name="sector" class="form-select" id="fieldSelect">
                  <option value="BI&A"> Business Intelligence & Analytics</option>
                  <option value="GD">Génie de la Data</option>
                  <option value="GL">Génie logiciel </option>
                  <option value="IDSIT">Ingénierie en Data Science and IOT </option>
                  <option value="SSI">Sécurité des Systèmes d’Information </option>                  
                  <option value="SSE">Smart System Engineering</option>      
                  <option value="2SCL">Smart Supply Chain & Logistics</option>
              </select>
              </div>
              <div class="mb-3">
                <label for="nvSelect" class="form-label">Niveau</label>
                <select name="level"  class="form-select" id="nvSelect">
                  <option value="1A">1A</option>
                  <option value="2A">2A</option>
                  <option value="3A">3A</option>
                
              </select>
              </div>
              <div class="mb-3">
                <label for="topictitle" class="form-label">Titre du sujet</label>
                <input name="title"  type="text" class="form-control" id="topictitle" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="topicdescription" class="form-label">description du sujet</label>
                <textarea name="description"  class="form-control" id="topicdescription" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Envoyer le sujet</button>
            </form>
          </div>

          </form>
        
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Mes sujets proposés</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Titre</h6>
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
                      @foreach ($subjects as $subject)
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$subject->id}}</h6></td>
                        <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">
                          <a class="custom-link" href="uniquesujet/{{$subject->id}}">{{$subject->title}}</a>
                        </h6>
                        </td>
                      
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">{{$subject->sector}}</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">{{$subject->level}}</h6>
                        </td>
                      </tr> 
                      @endforeach

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
