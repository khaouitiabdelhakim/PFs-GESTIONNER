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
        <div class="card-body">
  <h5 class="card-title fw-semibold mb-4">Affectation</h5>
  <div class="card">
    <div class="card-body">
      <form method="post" action="{{ route('do.affectation') }}">
          @csrf
          <input type="hidden" name="group_id" value="{{$group->id}}">
        <div class="mb-3">
          <label for="groupName" class="form-label">Nom du groupe</label>
          <input value="{{$group->name}}" type="text" class="form-control" id="groupName" readonly>
        </div>
        <div class="mb-3">
          <label for="projet" class="form-label">Projet</label>
          <select name="subject_id" class="form-select" id="projet">
            @foreach($subjects as $subject)
            <option value="{{$subject->id}}">{{$subject->title}}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="professeurEncadrant" class="form-label">Professeur encadrant</label>
          <select name="encadrant_id" class="form-select" id="professeurEncadrant">
          @foreach($disponible_professors as $disponible_professor)
            <option value="{{$disponible_professor->id}}">{{$disponible_professor->email}}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="dateSoutenance" class="form-label">Date de soutenance</label>
          <input name="datesoutenance" type="date" class="form-control" id="dateSoutenance">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        
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